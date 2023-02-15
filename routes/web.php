<?php

use App\Http\Controllers\MainController;
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
Route :: get('/', [MainController :: class , 'home'])
    -> name('pages.home');

Route :: get('/product', [MainController :: class , 'products'])
    -> name('pages.products');

Route :: get('/createnew',[MainController :: class , 'createNew'])
    -> name('product.create');