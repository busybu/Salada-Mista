<?php

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
    
    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');
        
        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
        
    });
        
   Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        
        Route::get('/produtos', 'ProdutoController@index')->name('produtos.index');
        Route::get('/create', 'ProdutoController@create')->name('produtos.create');
        Route::post('/create', 'ProdutoController@store')->name('produtos.store');
        Route::get('/{produto}/show', 'ProdutoController@show')->name('produtos.show');
        Route::get('/{produto}/edit', 'ProdutoController@edit')->name('produtos.edit');
        Route::patch('/{produto}/update', 'ProdutoController@update')->name('produtos.update');
        Route::delete('/{produto}/delete', 'ProdutoController@destroy')->name('produtos.destroy');
        
    });
});
