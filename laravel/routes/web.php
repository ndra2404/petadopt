<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterDataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CheckoutController;

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

Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/login-page', [HomeController::class, 'login'])->name('login-page');
Route::get('/listAnimal', [HomeController::class, 'listAnimal'])->name('listAnimal');
Route::get('registration', [LoginController::class, 'register'])->name('create.adopsi');
Route::get('shopr', [LoginController::class, 'shopr'])->name('create.shopr');
Route::post('doRegister', [LoginController::class, 'doRegister'])->name('create.doregister');
Route::post('doAdopsi', [LoginController::class, 'doAdopsi'])->name('create.doAdopsi');
Route::post('doLogin', [LoginController::class, 'doLogin'])->name('create.dologin');
Route::get('/', [HomeController::class, 'home'])->name('');
Route::any('detail/{id}', [CheckoutController::class, 'detail'])->name('transaction.detail');
Route::any('blog/{id}', [CheckoutController::class, 'blog'])->name('transaction.blog');

Route::group(['middleware' => ['auth']], function () {


Route::get('doLogout', [LoginController::class, 'doLogout'])->name('create.doLogout');

//user
Route::get('user', [MasterDataController::class, 'user'])->name('masterData.user');

//animal
Route::get('animal', [MasterDataController::class, 'animal'])->name('masterData.animal');
Route::any('animal/create', [AnimalController::class, 'create'])->name('animal.create');
Route::any('animal/update/{id}', [AnimalController::class, 'update'])->name('animal.update');
Route::any('animal/delete/{id}', [AnimalController::class, 'delete'])->name('animal.delete');

//animalType
Route::get('animalType', [MasterDataController::class, 'animalType'])->name('masterData.animalType');
Route::any('animalType/create', [MasterDataController::class, 'animalType'])->name('masterData.animalType');
Route::any('animalType/{id}', [MasterDataController::class, 'animalTypeUpdate'])->name('masterData.animalTypeShow');

//Checkout
Route::get('checkout/{id}', [CheckoutController::class, 'checkout'])->name('checkout');
Route::post('doCheckout', [CheckoutController::class, 'doCheckout'])->name('checkout.doCheckout');
Route::get('checkout-list', [CheckoutController::class, 'list'])->name('checkout.list');
Route::get('checkout-konfirmasi/{id}', [CheckoutController::class, 'konfirmasi'])->name('checkout.konfirmasi');
Route::post('doKonfirmasi/{id}', [CheckoutController::class, 'doKonfirmasi'])->name('checkout.doKonfirmasi');
Route::post('doTerima/{id}', [CheckoutController::class, 'doTerima'])->name('checkout.doTerima');

Route::get('transaction', [CheckoutController::class, 'transaction'])->name('transaction');
Route::any('checkout-verification/{id}', [CheckoutController::class, 'verification'])->name('transaction.verification');
Route::any('checkout-send/{id}', [CheckoutController::class, 'kirimHewan'])->name('transaction.kirimhewan');
Route::any('checkout-terima/{id}', [CheckoutController::class, 'terimaHewan'])->name('transaction.terimaHewan');


});
