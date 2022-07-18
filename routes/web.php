<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProductController;
use App\Models\Author;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LanguageController::class,'index']);
Route::get('/lang', [LanguageController::class, 'language'])->name('lang');
Route::get('/show', [JoinController::class, 'show']);

// Company
Route::resource('company', CompanyController::class);

// Product
Route::resource('product', ProductController::class);

Route::get('/join', function () {
    $author = Author::all();
    
    // foreach($author as $authors){
    //     echo 'Author name:'.$authors['name'].'<br> ';
    //     foreach($authors->books as $books){
    //         echo $books['title'].'<br>';
    //     }
    // }
    dd($author);

});