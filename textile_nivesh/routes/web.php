<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\TechController;
use App\Http\Controllers\OpenController;
use App\Http\Controllers\CaController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\UpiconController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/app-detail', 'AccController@detailApp')->name('detail_App');

Route::group(['prefix'=>'superadmin'], function(){
    Route::get('/', 'SuperAdminController@index')->name('superadmin.sadmin');
    Route::get('/create', 'SuperAdminController@create')->name('superadmin.add');
    Route::post('/', 'SuperAdminController@store')->name('superadmin.save');
    Route::get('/list', 'SuperAdminController@index')->name('superadmin.list');
    Route::get('/edit{superadmin}', 'SuperAdminController@edit')->name('superadmin.edit');
    Route::post('/edit{superadmin}', 'SuperAdminController@update')->name('superadmin.update');
    Route::get('/view/{superadmin}', 'SuperAdminController@show')->name('superadmin.view');
    Route::delete('/superadmin/{superadmin}', 'SuperAdminController@destroy')->name('superadmin.delete');
    Route::get('/list/search', 'SuperAdminController@search')->name('superadmin.simple_search');
    Route::get('/change-password', 'SuperAdminController@changePass')->name('superadmin.changePassword');
    Route::post('/change-password', 'SuperAdminController@UpdatePass')->name('superadmin.change.password');
});

Route::group(['prefix'=>'applicants'], function(){
    Route::get('/', 'ApplicantController@index')->name('applicant.index');
    Route::get('/create', 'ApplicantController@create')->name('applicant.add');
    Route::post('/save', 'ApplicantController@store')->name('applicant.save');
    Route::get('/list', 'ApplicantController@index')->name('applicant.list');
    Route::get('/edit/{applicants}', 'ApplicantController@edit')->name('applicant.edit');
    Route::post('/update', 'ApplicantController@update')->name('applicant.update');
    Route::post('/edit-dir/{applicants}', 'ApplicantController@updateDir')->name('applicant.updateDir');
    Route::get('/view/{applicants}', 'ApplicantController@show')->name('applicant.view');
    Route::get('assets/{filename1}', 'ApplicantController@download')->name('applicant.download');
    Route::delete('/applicant/{applicants}', 'ApplicantController@destroy')->name('applicant.delete');
    Route::get('/list/search', 'ApplicantController@search')->name('applicant.simple_search');

    Route::get('/add-director/{applicants}', 'ApplicantController@createDir')->name('applicant.addDir');
    Route::post('/save-dir', 'ApplicantController@storeDir')->name('applicant.saveDir');
});

Route::group(['prefix'=>'ca'], function(){
    Route::get('/', 'CaController@index')->name('ca.index');
    Route::get('/list', 'CaController@index')->name('ca.list');
    Route::get('/{ca}', 'CaController@edit')->name('ca.edit');
    Route::post('/{ca}', 'CaController@update')->name('ca.update');
    Route::get('/view/{ca}', 'CaController@show')->name('ca.view');
});

Route::group(['prefix'=>'expert'], function(){
    Route::get('/', 'ExpertController@index')->name('expert.index');
    Route::get('/list', 'ExpertController@index')->name('expert.list');
    Route::get('/{expert}', 'ExpertController@edit')->name('expert.edit');
    Route::post('/{expert}', 'ExpertController@update')->name('expert.update');
    Route::get('/view/{expert}', 'ExpertController@show')->name('expert.view');
});

Route::group(['prefix'=>'upicon'], function(){
    Route::get('/', 'UpiconController@index')->name('upicon.index');
    Route::get('/list', 'UpiconController@index')->name('upicon.list');
    Route::get('/edit{upicon}', 'UpiconController@edit')->name('upicon.edit');
    Route::post('/edit{upicon}', 'UpiconController@update')->name('upicon.update');
    Route::get('/upicon/', 'UpiconController@asignApp')->name('upicon.asign');
    Route::post('/app/', 'UpiconController@updateApp')->name('upicon.updateasign');
    Route::get('/upicon/', 'UpiconController@asignApp')->name('upicon.asign');
    Route::post('/app/', 'UpiconController@updateStatus')->name('upicon.updateform');

    Route::get('/view/{upicon}', 'UpiconController@show')->name('upicon.view');
    Route::get('/list/search', 'UpiconController@search')->name('upicon.simple_search');
    Route::get('/all-list', 'UpiconController@allBC')->name('upicon.all-list');
    Route::get('/change-password', 'UpiconController@changePass')->name('upicon.changePassword');
    Route::post('/change-password', 'UpiconController@UpdatePass')->name('upicon.change.password');
});

Route::group(['prefix'=>'openuser'], function(){
    Route::get('/', 'OpenController@index')->name('openuser.index');
    Route::get('/index', 'OpenController@index')->name('openuser.list');
    Route::get('/list/search', 'OpenController@search')->name('openuser.simple_search');

});


