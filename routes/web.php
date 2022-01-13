<?php

use App\Models\Contact;
use App\Models\Travaux;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TravauxController;
use App\Http\Controllers\PaiementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/logout', function () {
    Auth::logout();
    return Redirect()->route('login');
})->name('logout');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $travaux = Travaux::get();
  
    $contact = Contact::get();

 return view('backend.dashboard',compact('contact','travaux'));
    //return view('dashboard');
})->name('dashboard');

/**Frontend All URl */

//Home

route::get('/',[HomeController::class,'homeU'])->name('home');

//demande devis
Route::get('/quote', function () {
    return view('frontend.quote');
})->name('quote');
//UserController routes
Route::prefix('utilisateurs')->group(function(){

    route::get('/',[UserController::class,'allUser'])->name('show.user');
    route::get('/add',[UserController::class,'addUser'])->name('add.user');
    route::post('/store',[UserController::class,'storeUser'])->name('store.user');
    route::get('/edit/{id}',[UserController::class,'editUser'])->name('edit.user');
    route::get('/delete/{id}',[UserController::class,'deleteUser'])->name('delete.user');
    route::post('/update',[UserController::class,'updateUser'])->name('update.user');
    route::post('/form/contact',[HomeController::class,'formContact'])->name('contact');
    route::get('/demande',[UserController::class,'demandeUser'])->name('demandes');
});

//InvoiceContorller routes
route::get('/factures',[InvoiceController::class,'allInvoice'])->name('show.invoice');
route::get('/factures/add',[InvoiceController::class,'addInvoice'])->name('add.invoice');

Route::prefix('paiement')->group(function(){
    route::get('/',[PaiementController::class,'checkout'])->name('checkout');
    route::get('/list',[PaiementController::class,'allPaiement'])->name('show.paiement')->middleware('auth');
    route::post('/payaction',[PaiementController::class,'payAction'])->name('payaction');
    route::get('/{trasaction_id}/success',[PaiementController::class,'paySuccess'])->name('paysuccess');
    route::get('/{trasaction_id}/cancel',[PaiementController::class,'payCancel'])->name('paycancel');
    route::any('/{pay_method}/ipn',[PaiementController::class,'ipn']);
    
});

//SliderController
Route::prefix('slider')->group(function(){
route::get('/show',[HomeController::class,'showSlider'])->name('slider.store');

route::post('/update',[HomeController::class,'updateSlider'])->name('update.slide');
route::post('/update/image',[HomeController::class,'updateSliderImage'])->name('update.slide.image');
});



//ServiceController routes
Route::prefix('service')->group(function(){
route::get('/',[ServiceController::class,'allService'])->name('show.service');
route::get('/add',[ServiceController::class,'addService'])->name('add.service');
route::post('/add',[ServiceController::class,'addService'])->name('store.service');
route::post('/edit',[ServiceController::class,'editService'])->name('edit.service');
route::post('/update',[ServiceController::class,'updateService'])->name('update.service');
});

//TravauxController routes
Route::prefix('travaux')->group(function(){
    route::get('/',[TravauxController::class,'allTravaux'])->name('show.travaux');
    route::get('/add',[TravauxController::class,'addTravaux'])->name('add.travaux');
    route::post('/add',[TravauxController::class,'addTravaux'])->name('store.travaux');
    route::post('/edit',[TravauxController::class,'editTravaux'])->name('edit.travaux');
    route::post('/update',[TravauxController::class,'updateTravaux'])->name('update.travaux');
    });