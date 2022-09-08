<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
// Praktikum 1
// Route::get('/', function () {
//     // 
//     echo "Selamat Datang";    
// });
Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', function () {
//     // 
//     echo "Maulana Malik Ibrahim";
//     echo "1941720055";
//     echo "TI-4A";
// });
// Route::get ('/articles/{id}', function($id){
//     echo "Halaman Artikel dengan ID". $id;
// });

// // Praktikum 2
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/article/{id}', [HomeController::class, 'article']);
// Route::get('/about', [HomeController::class, 'about']);

// //Praktikum 3
// //1
// Route::get('/', [HomeController::class,'index']);
// //2
// Route::prefix('product')->group(function(){
//     Route::get('pakaian', function () {
//         echo "Pakaian";
//     });
//     Route::get('makanan', function () {
//     echo "Daging";
//     });
//     Route::get('minuman', function () {
//     echo "Coca-cola";
//     });
// });
// //3
// Route::get('/article/{id}', [HomeController::class,'article']);
// //4
// Route::prefix('program')->group(function(){
//     Route::get('melukis', function () {
//     echo "Program Melukis";
//     });
//     Route::get('fitnes', function () {
//     echo "Program Fitnes";
//     });
//     Route::get('design', function () {
//     echo "Program Design";
//     });
// });
//     //5
// Route::get('/about', function () {
//     echo "1941720055 <br>";
//     echo "Maulana Malik Ibrahim <br>";
//     echo "TI-2A";
// });
// //6
// Route::get('/about', function () {
//     echo "For more information, please Contact 021-245-34456";
// });