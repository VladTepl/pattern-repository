<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/position/{id}',[TestController::class,'position']); //Get-запрос выполняет поиск по id и предоставляет доступ к данным с сортировкой по должностям.
Route::get('/salary/{id}',[TestController::class,'salary']); // Get-запрос  выполняет поиск по id и предоставляет доступ к данным с сортировкой по запрлатам.
Route::get('/created/{id}',[TestController::class,'created']); //Get-запрос  выполняет поиск по id и предоставляет доступ к данным с сортировкой по датам создания записи.
Route::get('/updated/{id}',[TestController::class,'updated']); //Get-запрос  выполняет поиск по id и предоставляет доступ к данным с сортировкой по датам обновления записи.