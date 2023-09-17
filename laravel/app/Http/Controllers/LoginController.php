<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PenjualModel;
use App\Models\PembeliModel;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    public function register(){
        return view('pages.register');
    }
    public function doLogin(Request $req){
        $data = [
            'username' => $req->input('email'),
            'password' => $req->input('password'),
        ];
        if (Auth::Attempt($data)) {
            return redirect('/');
        }else{
            return redirect('')->with([
                'status'=>'alert-danger',
                'message' => 'Email atau Password Salah',
            ]);
        }
    }
    public function shopr(){
        return view('pages.toko');
    }
    public function doLogout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function doRegister(Request $request){
        DB::BeginTransaction();
        try {
            //code...
            $dataUser = array(
                'username'=>$request->input('email'),
                'password'=>\Hash::make($request->input('password')),
                'level'=>2,
                'status'=>1
            );
            $user = User::create($dataUser);

            $dataPenjual = new PenjualModel();
            $dataPenjual->nama_lengkap=$request->input('nama_lengkap');
            $dataPenjual->nomor_telepon=$request->input('no_wa');
            $dataPenjual->alamat=$request->input('alamat');
            $dataPenjual->id_user = $user->id;
            $dataPenjual->save();
            DB::commit();
            return redirect('register')
                ->with([
                    'status'=>'alert-success',
                    'message' => 'Pendaftaran berhasil silahkan login',
                ]);
        } catch (\Exception $th) {
            return redirect('register')
                ->with([
                    'status'=>'alert-danger',
                    'message' => $th->getMessage(),
                ]);
            DB::rollback();
        }
    }
    public function doAdopsi(Request $request){
        DB::BeginTransaction();
        try {
            //code...
            $dataUser = array(
                'username'=>$request->input('email'),
                'password'=>\Hash::make($request->input('password')),
                'level'=>3,
                'status'=>1
            );
            $user = User::create($dataUser);

            $dataPenjual = new PembeliModel();
            $dataPenjual->nama_lengkap=$request->input('nama_lengkap');
            $dataPenjual->nomor_telepon=$request->input('no_wa');
            $dataPenjual->alamat=$request->input('alamat');
            $dataPenjual->id_user = $user->id;
            $dataPenjual->save();
            DB::commit();
            return redirect('register')
                ->with([
                    'status'=>'alert-success',
                    'message' => 'Pendaftaran berhasil silahkan login',
                ]);
        } catch (\Exception $th) {
            return redirect('register')
                ->with([
                    'status'=>'alert-danger',
                    'message' => $th->getMessage(),
                ]);
            DB::rollback();
        }
    }
}
