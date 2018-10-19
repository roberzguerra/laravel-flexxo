<?php

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


// Rotas Categories
Route::prefix('admin')->group(function () {
    Route::get('/categorias', [ 'uses' => 'Admin\CategoriesController@index', 'as' => 'admin.categories.index'] );
    Route::get('/categorias/criar', [ 'uses' => 'Admin\CategoriesController@create', 'as' => 'admin.categories.create'] );
    Route::get('/categorias/editar/{id}', [ 'uses' => 'Admin\CategoriesController@edit', 'as' => 'admin.categories.edit'] );
    Route::post('/categorias/salvar', [ 'uses' => 'Admin\CategoriesController@store', 'as' => 'admin.categories.store'] );
    Route::post('/categorias/atualizar/{id}', [ 'uses' => 'Admin\CategoriesController@update', 'as' => 'admin.categories.update'] );

});
