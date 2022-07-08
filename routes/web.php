<?php

use App\Http\Livewire\InstallationComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanneController;
use App\Http\Livewire\CreateClient;

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
//Route cliente
Route::get('client', function () {
    return view('homeClient');
});
Route::get('in', function () {
    return view('Installation/create_installations');
});
Route::get('/', function () {
    return view('welcome');
});
//Route::get('/in', InstallationComponent::class);
Route::get('connexion', function () {
    return view('connexion');
});
Route::get('client/register', [App\Http\Controllers\ClientController::class, 'verifyclient']);
Route::get('client/login', [App\Http\Controllers\ClientController::class, 'connexion']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    });



//route du dashboard de l'admin
Route::prefix('admin')->group(function()
{

    //Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    //Route de client
    Route::get('client/liste', [App\Http\Controllers\ClientController::class, 'index']);
    Route::get('client/create', [App\Http\Controllers\ClientController::class, 'create']);
    Route::get('client/show/{id}', 'App\Http\Controllers\ClientController@show');
    Route::post('client/store', [App\Http\Controllers\ClientController::class, 'store']);
    Route::get('client/{id}/edit', 'App\Http\Controllers\ClientController@edit');
    Route::put('client/update/{id}', 'App\Http\Controllers\ClientController@update');
    Route::delete('client/destroy/{id}', 'App\Http\Controllers\ClientController@destroy');

    //Route de produit
    Route::get('produit/liste', [App\Http\Controllers\ProduitController::class, 'index']);
    Route::get('produit/create', [App\Http\Controllers\ProduitController::class, 'create']);
    Route::get('produit/show/{id}', 'App\Http\Controllers\ProduitController@show');
    Route::post('produit/store', [App\Http\Controllers\ProduitController::class, 'store']);
    Route::get('produit/edit/{id}', 'App\Http\Controllers\ProduitController@edit');
    Route::put('produit/update/{id}', 'App\Http\Controllers\ProduitController@update');
    Route::delete('produit/destroy/{id}', 'App\Http\Controllers\ProduitController@destroy');

    //Routes de type devis
    Route::get('typedevis/liste', [App\Http\Controllers\Type_devisController::class, 'index']);
    Route::get('typedevis/create', [App\Http\Controllers\Type_devisController::class, 'create']);
    Route::get('typedevis/show/{id}', 'App\Http\Controllers\Type_devisController@show');
    Route::post('typedevis/store', [App\Http\Controllers\Type_devisController::class, 'store']);
    Route::get('typedevis/edit/{id}', 'App\Http\Controllers\Type_devisController@edit');
    Route::put('typedevis/update/{id}', 'App\Http\Controllers\Type_devisController@update');
    Route::delete('typedevis/destroy/{id}', 'App\Http\Controllers\Type_devisController@destroy');

    //Route de type intervention
    Route::get('typeintervention/liste', [App\Http\Controllers\TypeinverventionController::class, 'index']);
    Route::get('typeintervention/create', [App\Http\Controllers\TypeinverventionController::class, 'create']);
    Route::get('typeintervention/show/{id}', 'App\Http\Controllers\TypeinverventionController@show');
    Route::post('typeintervention/store', [App\Http\Controllers\TypeinverventionController::class, 'store']);
    Route::get('typeintervention/edit/{id}', 'App\Http\Controllers\TypeinverventionController@edit');
    Route::put('typeintervention/update/{id}', 'App\Http\Controllers\TypeinverventionController@update');
    Route::delete('typeintervention/destroy/{id}', 'App\Http\Controllers\TypeinverventionController@destroy');

    //Routes des installations
    Route::get('installation/liste', [App\Http\Controllers\Type_devisController::class, 'index']);
    Route::get('installation/create', [App\Http\Controllers\Type_devisController::class, 'create']);
    Route::get('installation/show/{id}', 'App\Http\Controllers\Type_devisController@show');
    Route::post('installation/store', [App\Http\Controllers\InstallationController::class, 'store']);
    Route::get('installation/{id}/edit', 'App\Http\Controllers\Type_devisController@edit');
    Route::put('installation/update/{id}', 'App\Http\Controllers\Type_devisController@update');
    Route::delete('installation/destroy/{id}', 'App\Http\Controllers\Type_devisController@destroy');

});
Route::get('/instore', CreateClient::class);
//route du dashboard de l'admin
Route::prefix('technicien')->group(function()
{
    Route::get('/in', InstallationComponent::class);
    //Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    //Route de client
   /* Route::get('client/liste', [App\Http\Controllers\ClientController::class, 'index']);
    Route::get('client/create', [App\Http\Controllers\ClientController::class, 'create']);
    Route::get('client/show/{id}', 'App\Http\Controllers\ClientController@show');
    Route::post('client/store', [App\Http\Controllers\ClientController::class, 'store']);
    Route::get('client/{id}/edit', 'App\Http\Controllers\ClientController@edit');
    Route::put('client/update/{id}', 'App\Http\Controllers\ClientController@update');
    Route::delete('client/destroy/{id}', 'App\Http\Controllers\ClientController@destroy');*/
});

Route::get('pannes/liste', [App\Http\Controllers\PanneController::class, 'index']);
Route::get('pannes/create', [App\Http\Controllers\PanneController::class, 'create']);
Route::get('pannes/show/{id}', [App\Http\Controllers\PanneController::class, 'show']);
Route::post('pannes/store', [App\Http\Controllers\PanneController::class, 'store']);
Route::get('pannes/edit/{id}', [App\Http\Controllers\PanneController::class, 'edit']);
Route::put('pannes/update/{id}', [App\Http\Controllers\PanneController::class, 'update']);
Route::delete('pannes/destroy/{id}', [App\Http\Controllers\PanneController::class, 'destroy']);
