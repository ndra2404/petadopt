<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterDataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnimalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [HomeController::class, 'home'])->name('login');
Route::get('register', [LoginController::class, 'register'])->name('create.register');
Route::get('register/adopsi', [LoginController::class, 'adopsi'])->name('create.adopsi');
Route::post('doRegister', [LoginController::class, 'doRegister'])->name('create.doregister');
Route::post('doAdopsi', [LoginController::class, 'doAdopsi'])->name('create.doAdopsi');
Route::post('doLogin', [LoginController::class, 'doLogin'])->name('create.dologin');

Route::group(['middleware' => ['auth']], function () {
Route::get('/', [HomeController::class, 'home'])->name('');

Route::get('doLogout', [LoginController::class, 'doLogout'])->name('create.doLogout');

//user
Route::get('user', [MasterDataController::class, 'user'])->name('masterData.user');

//animal
Route::get('animal', [MasterDataController::class, 'animal'])->name('masterData.animal');
Route::any('animal/create', [AnimalController::class, 'create'])->name('animal.create');

//animalType
Route::get('animalType', [MasterDataController::class, 'animalType'])->name('masterData.animalType');
Route::any('animalType/create', [MasterDataController::class, 'animalType'])->name('masterData.animalType');
Route::any('animalType/{id}', [MasterDataController::class, 'animalTypeUpdate'])->name('masterData.animalTypeShow');
});
