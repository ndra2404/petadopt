<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnimalTypeModel;
use App\Models\AnimalModel;

class HomeController extends Controller
{
    //
    public function home(){
        $typeAnimal = AnimalTypeModel::all();
        $animal = AnimalModel::all();
        return view('pages.home',compact('typeAnimal','animal'));
    }
}
