<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;
use App\Mail\TestWhats;

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
    return view('welcome');
});
Route::get('/mailTest', function () {
    $toSend = new TestWhats();
    //$toSend->from = env('MAIL_FROM_ADDRESS');
    //$toSend->assertSeeInHtml('migvicpereyra@hotmail.com');
    //dd($toSend);
    //print_r($_SERVER); die;
    Mail::to('migvicpereyra@hotmail.com')->send($toSend);
    echo "DONE";
});
