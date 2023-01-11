<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
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

Route::get('/my-route/{input_data?}', function($input_data=""){
    //return "<h1>My Route - $input_data</h1>";
    $datas['name'] = $input_data;
    return view('my_view', ['name' => $input_data]);
});

Route::get('/my-controller/{input?}', [MyController::class, 'show']);