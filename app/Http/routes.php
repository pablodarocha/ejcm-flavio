<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

//Route::get('/quem-somos', 'SiteController@getQuemSomos');
Route::get('/quem-somos', 'SiteController@getQuemSomos1');
//Route::get('/quem-somos2', 'SiteController@getQuemSomos2');

Route::get('/serviços', function () {
	return view('servicos');
});


Route::get('/portfolio', 'SiteController@getPortfolio');

Route::get('/ivento', function () {
	return view('ivento');
});

Route::get('cadastro', 'Auth\AuthController@getRegister');
Route::post('cadastro', 'SiteController@postCadastrar');

Route::group(["middleware" => "guest"],function(){
    Route::post('login', 'Auth\AuthController@postLogin');
    Route::get('login', 'Auth\AuthController@getLogin');
});

Route::group(["middleware" => "auth"],function(){

    Route::get('logout', 'Auth\AuthController@getLogout');

    Route::get('editar_equipe', ['as' => 'editar_equipe', 'uses' => 'AdminController@getEquipe']);
    Route::post('/adicionar_equipe',['as' => 'equipe_adicionar', 'uses' => 'AdminController@postEquipe']);
    Route::post('/alterar_equipe',['as' => 'equipe_alterar', 'uses' => 'AdminController@postAlterEquipe']);
    Route::get('/deletar_equipe/{id}',['as' => 'equipe_deletar', 'uses' => 'AdminController@getDeleteEquipe']);

    Route::get('editar_portfolio', ['as' => 'editar_portfolio', 'uses' => 'AdminController@getPortfolio']);
    Route::post('/adicionar_portfolio',['as' => 'portfolio_adicionar', 'uses' => 'AdminController@postPortfolio']);
    Route::post('/alterar_portfolio', 'AdminController@postAlterPortfolio');
    Route::get('/deletar_portfolio/{id}',['as' => 'portfolio_deletar', 'uses' => 'AdminController@getDeletePortfolio']);
});

//Rotas responsaveis pela página de contato. Visualizar e enviar contato.
Route::get('contato', ['as' => 'contato', 'uses' => 'SiteController@getContato']);
Route::post('contato', ['as' => 'enviar-contato', 'uses' => 'SiteController@postContato']);

