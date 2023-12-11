<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\PembeliModel;
use App\Models\CheckoutModel;
use App\Models\PenjualModel;
use App\Models\KonfirmasiModel;
use App\Models\AnimalModel;


class CheckoutController extends Controller
{
    //
    function checkout($id){
        if(Auth::user()->level!="3"){
            echo "<script>alert('Silahkan login sebagai pengadopsi');location.href='/';</script>";
        }
        $ongkir = DB::table('tbl_setting')->where('code','ONGKIR')->first();
        $bank = DB::table('tbl_setting')->where('code','BANK')->first();
        $hewan = DB::table('tbl_hewan')->where('id_hewan',$id)->first();
        $adopter = PembeliModel::where('id_user',Auth::user()->id)->first();
        return view('pages.checkout.index',compact('ongkir','hewan','adopter','bank'));
    }
    function list(){
        $adopter = PembeliModel::where('id_user',Auth::user()->id)->first();
        $checkout= CheckoutModel::where('id_adopter',$adopter->id_adopter)->leftJoin('tbl_hewan','tbl_hewan.id_hewan','=','tbl_checkout.id_hewan')->get();
        return view('pages.checkout.list',compact('checkout'));
    }
    public function konfirmasi($id){
        $data = CheckoutModel::leftJoin('tbl_hewan','tbl_hewan.id_hewan','=','tbl_checkout.id_hewan')
        ->leftJoin('tbl_penjual','tbl_penjual.id_penjual','=','tbl_checkout.id_penjual')
        ->select('tbl_checkout.*','nama_hewan','harga')
        ->where('id',$id)->first();
        return view('pages.checkout.konfirmasi',compact('data'));
    }
    public function doTerima(REQUEST $reg,$id){
        $destinationPath = 'upload/pembayaran';
        if($reg->isMethod('post')){
            $no_pendaftaran = CheckoutModel::where('id',$id)->firstOrFail();
            if($no_pendaftaran){
                CheckoutModel::where('id',$id)->update([
                'status'=>'5'
            ]);
                return redirect('checkout-terima/'.$id)
                ->with([
                    'status'=>'alert-success',
                    'message' => 'Konfirmasi terima berhasil',
                ]);
            }else{
                redirect('checkout-konfirmasi/'.$id)
                ->with([
                    'status'=>'alert-danger',
                    'message' => 'Konfirmasi terima gagal',
                ]);
            }
        }
    }
    public function doKonfirmasi(REQUEST $reg,$id){
        $destinationPath = 'upload/pembayaran';
        if($reg->isMethod('post')){
            $no_pendaftaran = CheckoutModel::where('id',$id)->firstOrFail();
            $bukti_bayar =$reg->file('bukti_bayar');
            $extension = $bukti_bayar->getClientOriginalExtension();
            $fileNamebukti_bayar = $no_pendaftaran->no_transaksi.'-buktiBayar'. '.' . $extension;
            $bukti_bayar->move($destinationPath, $fileNamebukti_bayar);
            $success=false;
            $adaKonfirmasi = KonfirmasiModel::where('id_checkout',$id)->first();
            if(!$adaKonfirmasi){
                $buktiBayar = new KonfirmasiModel();
                $buktiBayar->id_checkout=$id;
                $buktiBayar->no_rekening=$reg->input('no_rek');
                $buktiBayar->nominal=str_replace(",","",$reg->input('nominal'));
                $buktiBayar->bukti_bayar=$destinationPath."/".$fileNamebukti_bayar;
                $buktiBayar->save();
                $success=true;
            }else{
                KonfirmasiModel::where('id_checkout',$id)->update([
                    'no_rekening'=>$reg->input('no_rek'),
                    'nominal'=>str_replace(",","",$reg->input('nominal')),
                    'bukti_bayar'=>$destinationPath."/".$fileNamebukti_bayar,
                ]);
                $success=true;
            }
                if($success){
                    CheckoutModel::where('id',$id)->update([
                    'status'=>'2'
                ]);
                    return redirect('checkout-konfirmasi/'.$id)
                    ->with([
                        'status'=>'alert-success',
                        'message' => 'Konfirmasi pembayaran berhasil',
                    ]);
                }else{
                    redirect('checkout-konfirmasi/'.$id)
                    ->with([
                        'status'=>'alert-danger',
                        'message' => 'Konfirmasi pembayaran gagal',
                    ]);
                }
        }
    }
    public function doCheckout(Request $request){
        $adopter = PembeliModel::where('id_user',Auth::user()->id)->first();
        $ongkir = DB::table('tbl_setting')->where('code','ONGKIR')->first();
        $hewan = DB::table('tbl_hewan')->where('id_hewan',$request->post('id_hewan'))->first();
        $penjual =DB::table('tbl_penjual')->where('id_user',$hewan->id_user)->first();
        $code = $this->invoiceNumber();
        $checkout = new CheckoutModel();
        $checkout->no_transaksi=$code;
        $checkout->id_hewan=$request->post('id_hewan');
        $checkout->tgl_checkout=date('Y-m-d H:i:s');
        $checkout->id_adopter=$adopter->id_adopter;
        $checkout->id_penjual=$penjual->id_penjual;
        $checkout->status="1";
        $checkout->alamat=$request->post('alamat');
        $checkout->no_wa=$request->post('no_wa');
        $checkout->kode_pos=$request->post('kode_pos');
        $checkout->ongkir=$ongkir->value;
        $checkout->total=$ongkir->value+$hewan->harga;
        $checkout->notes=$request->post('order_note');
        $checkout->save();
        return redirect('checkout-list');
    }
    public function Transaction(){
        $adopter = PenjualModel::where('id_user',Auth::user()->id)->first();
        $checkout= CheckoutModel::where('id_penjual',$adopter->id_penjual)->leftJoin('tbl_hewan','tbl_hewan.id_hewan','=','tbl_checkout.id_hewan')->get();
        return view('pages.transaction.index',compact('checkout'));
    }
    public function verification($id,Request $reg){
        if($reg->isMethod('post')){
            $dataUpdate = CheckoutModel::where('id',$id)->update(['status'=>3]);
        }
        $notifWa = DB::table('tbl_message')->where('status','3')->first();
        $notifWa = $notifWa->message;
        $change = array('[no_transaksi]');

        $data = CheckoutModel::leftJoin('tbl_hewan','tbl_hewan.id_hewan','=','tbl_checkout.id_hewan')
        ->leftJoin('tbl_penjual','tbl_penjual.id_penjual','=','tbl_checkout.id_penjual')
        ->where('id',$id)->first();

        $new = array($data->no_transaksi);
        $notifWa = str_replace($change,$new,$notifWa);

        $konfirmasi = DB::table('tbl_konfirmasi')->where('id_checkout',$id)->first();
        return view('pages.transaction.verification',compact('notifWa','data','konfirmasi'));
    }
    public function kirimHewan($id,Request $reg){
        if($reg->isMethod('post')){
            $dataUpdate = CheckoutModel::where('id',$id)->update(['status'=>4,'tgl_kirim'=>$reg->post('tgl_kirim')]);
        }
        $notifWa = DB::table('tbl_message')->where('status','4')->first();
        $notifWa = $notifWa->message;
        $change = array('[no_transaksi]','[tgl]');

        $data = CheckoutModel::leftJoin('tbl_hewan','tbl_hewan.id_hewan','=','tbl_checkout.id_hewan')
        ->leftJoin('tbl_penjual','tbl_penjual.id_penjual','=','tbl_checkout.id_penjual')
        ->where('id',$id)->first();

        $new = array($data->no_transaksi,$reg->post('tgl_kirim'));
        $notifWa = str_replace($change,$new,$notifWa);

        $konfirmasi = DB::table('tbl_konfirmasi')->where('id_checkout',$id)->first();
        return view('pages.transaction.kirim',compact('notifWa','data','konfirmasi'));
    }
    public function terimaHewan($id,Request $reg){
        if($reg->isMethod('post')){
            $dataUpdate = CheckoutModel::where('id',$id)->update(['status'=>5]);
        }
        $notifWa = DB::table('tbl_message')->where('status','4')->first();
        $notifWa = $notifWa->message;
        $change = array('[no_transaksi]','[tgl]');

        $data = CheckoutModel::leftJoin('tbl_hewan','tbl_hewan.id_hewan','=','tbl_checkout.id_hewan')
        ->select('tbl_checkout.*','tbl_hewan.*')
        ->leftJoin('tbl_penjual','tbl_penjual.id_penjual','=','tbl_checkout.id_penjual')
        ->where('id',$id)->first();

        $new = array($data->no_transaksi,$reg->post('tgl_kirim'));
        $notifWa = str_replace($change,$new,$notifWa);

        $konfirmasi = DB::table('tbl_konfirmasi')->where('id_checkout',$id)->first();
        return view('pages.checkout.terimahewan',compact('notifWa','data','konfirmasi'));
    }
    function invoiceNumber()
    {
        $latest = CheckoutModel::latest()->first();
        if (! $latest) {
            return 'TRA'.date('ymd').'00001';
        }

        $string = preg_replace("/[^0-9\.]/", '',$latest->no_transaksi);
        return 'TRA' . sprintf('%04d', $string+1);
    }
    function detail(Request $reg,$id){
        $animal = AnimalModel::where('id_hewan',$id)->first();
        return view('pages.animal.detail',compact('animal'));
    }
    function blog(Request $reg,$id){
        $blog = DB::table('tbl_blog')->where('id',$id)->first();
        return view('pages.blog.detail',compact('blog'));
    }
}
