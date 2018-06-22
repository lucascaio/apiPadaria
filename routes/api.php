<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['middleware'=>'api', 'prefix'=>'auth'], function($router) {
    Route::post('login','AuthController@login');
    Route::post('logout','AuthController@logout');
    Route::post('refresh','AuthController@refresh');
    Route::post('me','AuthController@me');
});

//ROTAS USANDO AUTENTICACAO JWT
Route::group(['middleware' => 'jwt.auth'], function($router) {
    Route::resource('/anuncio', 'AnuncioController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/fornada', 'FornadaController')->only(['index', 'store', 'update', 'destroy', 'lastFornada']);
    Route::resource('/pedido', 'PedidoController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/perfil', 'PerfilController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/pessoa', 'PessoaController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/produto', 'ProdutoController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/produto_pedido', 'ProdutoPedidoController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/produto_tipo', 'ProdutoTipoController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/promocao', 'PromocaoController')->only(['index', 'store', 'update', 'destroy']);
    Route::post('/user', 'Auth\RegisterController@create')->name('user.create');
    Route::get('/lastfornada', 'FornadaController@lastFornada')->name('fornada.lastFornada');
    Route::get('/lastpedido', 'PedidoController@lastPedido')->name('pedido.lastPedido');

});

//ROTAS NAO USANDO AUTENTICACAO JWT
Route::group(['middleware'=>'api', 'prefix'=>'notoken'], function($router) {
Route::resource('/anuncio', 'AnuncioController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/fornada', 'FornadaController')->only(['index', 'store', 'update', 'destroy', 'lastFornada']);
    Route::resource('/pedido', 'PedidoController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/perfil', 'PerfilController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/pessoa', 'PessoaController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/produto', 'ProdutoController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/produto_pedido', 'ProdutoPedidoController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/produto_tipo', 'ProdutoTipoController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('/promocao', 'PromocaoController')->only(['index', 'store', 'update', 'destroy']);
    Route::post('/user', 'Auth\RegisterController@create')->name('user.create');
    Route::get('/lastfornada', 'FornadaController@lastFornada')->name('fornada.lastFornada');
    Route::get('/lastpedido', 'PedidoController@lastPedido')->name('pedido.lastPedido');
});

