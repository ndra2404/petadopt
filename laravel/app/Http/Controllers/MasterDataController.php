<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\AnimalTypeModel;
use App\Models\AnimalModel;
//use Request;

class MasterDataController extends Controller
{
    //
    public function user(){
        $users = User::leftJoin('tbl_level as l','l.id','=','tbl_users.level')->get();
        return view('pages.user.index',compact('users'));
    }
    public function animal(){
        $animal = AnimalModel::leftJoin('tbl_type','tbl_type.id','=','tbl_hewan.id_type')
        ->where('id_user',Auth()->user()->id)->get();
        return view('pages.animal.index',compact('animal'));
    }
    public function animalType(Request $reg){
        $uriSegment = request()->segments();
        if(isset($uriSegment[1])){
            if($reg->isMethod('post')){
                $type=new AnimalTypeModel();
                $type->type=$reg->input('type');
                $type->save();
                return redirect('animalType');
            }
            return view('pages.animalType.add');
        }else{
            $types = AnimalTypeModel::all();
            return view('pages.animalType.index',compact('types'));
        }

    }
    public function animalTypeUpdate(Request $reg,$id){
        $uriSegment = request()->segments();
        if(isset($uriSegment[1])){
            if($reg->isMethod('post')){
                $type = AnimalTypeModel::find($id);
                $type->type=$reg->input('type');
                $type->save();
                return redirect('animalType');
            }
            $row = AnimalTypeModel::find($id);
            return view('pages.animalType.update',compact('row'));
        }else{
            $types = AnimalTypeModel::all();
            return view('pages.animalType.index',compact('types'));
        }

    }
}
