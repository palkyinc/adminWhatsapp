<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;
use App\Mail\TestWhats;
use App\Custom\MyFunctions;
use Illuminate\Http\Request;

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
Route::get('/whatssAppWebHoo', function () {
    if (isset($_REQUEST['hub_mode']) && $_REQUEST['hub_mode'] === 'subscribe' && $_REQUEST['hub_verify_token'] === env('WHATSAPP_TOKEN') ) {
        $data_return = $_REQUEST['hub_challenge'];
    } else {
        $data_return = '';
    }
    $toSend = new TestWhats();
    Mail::to('migvicpereyra@hotmail.com')->queue($toSend);
    MyFunctions::loguear('a', 'whatsresponse.txt', 'contacto');
    return response($data_return, 200);
});
Route::post('/whatssAppWebHoo', function (Request $request) {
    MyFunctions::loguear('a+', 'entidades.txt', MyFunctions::iterator($request->all()), false);
    //$toSend = new TestWhats($request);
    //Mail::to('migvicpereyra@hotmail.com')->queue($toSend);
    //MyFunctions::loguear('a', 'whatsresponse.txt', 'contacto');
    //dd($request->all());
    return response('', 200);
});
Route::get('/ordenarEntidades', function() {
    $data = (MyFunctions::readFile("entidades.txt"));
    foreach ($data as $key => $value) {
        MyFunctions::loguear("a+", "entidades_final.txt", $key . "=" . $value, false);
    }
    echo "fin";
});