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

// Route::get('/', function () {
//     return 'ffffff';
// });

// Route::get('/my_page', function() {
//     return 'this is my page';
// });

// Route::get('/jena', function(){
//     return 'Ekaterina';
// });
// Route::get('/san',function(){
//     return 'Vlad';
// });
// Route::get('/work', function(){
//     return 'my work shahter';
// });

use App\Http\Controllers\MyHobbiController;
Route::get('/hobbi',  [MyHobbiController::class, 'hobbi']);

use App\Http\Controllers\MyCarController;
Route::get('/car', [MyCarController::class, 'car']);

use App\Http\Controllers\MyDochaController;
Route::get('/docha',  [MyDochaController::class, 'docha']);

use App\Http\Controllers\MyGorodController;
Route::get('/gorod',  [MyGorodController::class, 'gorod']);