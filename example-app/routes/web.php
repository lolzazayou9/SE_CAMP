<?php

use Illuminate\Support\Facades\Route;

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

use Illuminate\Http\Request;
use App\Http\Controllers\MyController;
use App\Http\Controllers\MyAuth;
use App\Http\Controllers\C_titles;

Route::get('/login', [MyAuth::class, 'login_view'])->name('login');
Route::get('/register', [MyAuth::class, 'register_view']);
Route::get('/logout', [MyAuth::class, 'logout_process'])->name('logout');
Route::post('/login', [MyAuth::class, 'login_process']);
Route::post('/register', [MyAuth::class, 'register_process']);
Route::resource('titles', C_titles::class)->middleware('auth');
Route::middleware('auth')->group(function(){
    // auth first
});
Route::middleware(['preventBackHistory','otherMiddlewareClasses'])->group(function () {});

Route::get('/my-controller',[MyController::class, 'index']);
Route::get('/my-controller/Form',[MyController::class, 'Form_For_ReDirec']);

Route::get('/my-controller2','App\Http\Controllers\MyController@index');
Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('my-controller3', 'MyController@index');
});
Route::resource('/my-controller4',MyController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/myD', function () {
    return view('FolderExam.FileinFolder');
});

Route::post('/myD', function(Request $req){
    $data['myinput'] = $req->input('myinput'); 
    return view('myD', $data);
});