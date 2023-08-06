<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnimalTypeModel;
use App\Models\AnimalModel;
use Illuminate\Support\Facades\Auth;

class AnimalController extends Controller
{
    //
    public function create(Request $reg){

        if($reg->isMethod('post')){
            $destinationFoto = 'upload/foto';
            $destinationVaccine = 'upload/vaccine';

            $filefoto =$reg->file('foto');
            $extension = $filefoto->getClientOriginalExtension();
            $fileNamefoto= date('Ymdhis').'_foto'. '.' . $extension;
            $filefoto->move($destinationFoto, $fileNamefoto);

            $fileVaccine =$reg->file('bukti');
            $extension = $fileVaccine->getClientOriginalExtension();
            $fileNameVaccine= date('Ymdhis').'_foto'. '.' . $extension;
            $fileVaccine->move($destinationVaccine, $fileNameVaccine);

            $animal = new animalModel();
            $animal->nama_hewan=$reg->input('nama_hewan');
            $animal->id_type=$reg->input('type');
            $animal->ras=$reg->input('ras');
            $animal->jenis_kelamin=$reg->input('jenis');
            $animal->rekam_medis=$reg->input('rekam_medis');
            $animal->harga=$reg->input('harga');
            $animal->foto=$fileNamefoto;
            $animal->bukti_vaksin=$fileNameVaccine;
            $animal->id_user=Auth()->user()->id;


            $animal->save();
            return redirect('animal');
        }
        $types = AnimalTypeModel::all();
        return view('pages.animal.add',compact('types'));
    }
}
