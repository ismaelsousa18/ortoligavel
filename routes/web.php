<?php

use Illuminate\Support\Facades\Route;

use App\Mail\Contact;

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

Route::get('/lp', function () {
    return view('site.landing-page.landing-page');
});

Route::get('/', function () {
    return view('site.index');
});

Route::get('/sobre', function () {
    return view('site.about');
});

Route::group(['prefix' => '/tratamentos'], function () {
    Route::get('/', function () {
        return view('site.tratamentos.listagem');
    });

    Route::get('/alinhadores-invisiveis', function () {
        return view('site.tratamentos.alinhadores-invisiveis');
    });

    Route::get('/braquetes-autoligaveis', function () {
        return view('site.tratamentos.braquetes-autoligaveis');
    });

    Route::get('/tratamento-hibrido', function () {
        return view('site.tratamentos.tratamento-hibrido');
    });

    Route::get('/tratamento-estetico', function () {
        return view('site.tratamentos.tratamento-estetico');
    });

    Route::get('/autoligavel-lingual', function () {
        return view('site.tratamentos.autoligavel-lingual');
    });
});

Route::get('/mail-example', function () { return view('mail.contact');});

Route::post('/send-mail', 'SendMail@send');