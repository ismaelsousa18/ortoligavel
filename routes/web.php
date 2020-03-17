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

Route::get('/', function () {
    return view('site.landing-page');
});

Route::get('/mail-example', function () { return view('mail.contact');});

Route::post('/send-mail', 'SendMail@send');