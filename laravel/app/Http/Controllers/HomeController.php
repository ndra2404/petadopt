<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnimalTypeModel;
use App\Models\AnimalModel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function home(Request $request){
        $typeAnimal = AnimalTypeModel::all();
        $blog = DB::table('tbl_blog')->get();
        $animal = AnimalModel::orderby('created_at')->offset(0)->limit(5)->get();
        return view('pages.home',compact('typeAnimal','animal','blog'));
    }
    public function login(){
        return view('pages.login');
    }
    public function listAnimal(Request $request){
        $animal = AnimalModel::orderby('created_at')->get();
        if($request->input('tipe')!==null){
            $animal = AnimalModel::leftJoin('tbl_type','tbl_hewan.id_type','=','tbl_type.id')
            ->where('tbl_type.type','like',$request->input('tipe'))
            ->orderby('tbl_hewan.created_at')->get();
        }
        return view('pages.listAnimal',compact('animal'));
    }
}
