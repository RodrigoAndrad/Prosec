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

/*
|--------------------------------------------------------------------------
| Website Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for the website. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* index page routes */
//Route::get('index.html', 'WebsiteController@index');
Route::get('/', 'WebsiteController@index');
Route::redirect('index.html', url('/'), 301);
Route::get('/24h.html', 'WebsiteController@index');
Route::get('atuacao.html', 'WebsiteController@index');
Route::get('clientes.html', 'WebsiteController@index');
Route::get('conheca.html', 'WebsiteController@index');
Route::get('contatos.html', 'WebsiteController@index');
Route::get('fale-conosco.html', 'WebsiteController@index');
Route::get('fornecedores.html', 'WebsiteController@index');
Route::get('grupo.html', 'WebsiteController@index');
Route::get('limpeza.html', 'WebsiteController@index');
Route::get('portaria.html', 'WebsiteController@index');
Route::get('portaria-recepcao.html', 'WebsiteController@index');
Route::get('pro-acao.html', 'WebsiteController@index');
Route::get('pro-acao-campanha.html', 'WebsiteController@index');
Route::get('pro-control.html', 'WebsiteController@index');
Route::get('proposta.html', 'WebsiteController@index');
Route::get('resp-social.html', 'WebsiteController@index');
Route::get('rh.html', 'WebsiteController@index');
Route::get('sac.html', 'WebsiteController@index');
Route::get('seg-eletronica.html', 'WebsiteController@index');
Route::get('servicos.html', 'WebsiteController@index');
Route::get('servicos-gerais.html', 'WebsiteController@index');
Route::get('trabalhe-conosco.html', 'WebsiteController@index');
Route::get('vig-patrimonial.html', 'WebsiteController@index');
Route::get('vig-pessoal-escolta.html', 'WebsiteController@index');



Auth::routes();

Route::prefix('manage')->middleware('role:desenvolvedor|administrador|editor|autor|parceiro|cliente|visitante')->group(function () {
  Route::get('/', 'ManageController@index');
  Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
  Route::resource('/users', 'UserController');
  Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
  Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
  Route::resource('/pages', 'PageController');
  Route::resource('/components', 'ComponentController');
  Route::resource('/elements', 'ElementController');
  Route::resource('/texts', 'TextController');
  Route::resource('/images', 'ImageController');
  Route::resource('/links', 'LinkController');
  Route::get('/content/home', 'ManageController@start')->name('manage.website.homepage');
  Route::get('/content/servicos', 'ManageController@start')->name('manage.servicos');
  Route::get('/content/vig-patrimonial', 'ManageController@start')->name('manage.vigPatrimonial');
  Route::get('/content/vig-pessoal-escolta', 'ManageController@start')->name('manage.vigPessoalEscolta');
  Route::get('/content/portaria-recepcao', 'ManageController@start')->name('manage.portariaRecepcao');
  Route::get('/content/seg-eletronica', 'ManageController@start')->name('manage.segEletronica');
  Route::get('/content/24h', 'ManageController@start')->name('manage.24h');
  Route::get('/content/pro-control', 'ManageController@start')->name('manage.proControl');
  Route::get('/content/limpeza', 'ManageController@start')->name('manage.limpeza');
  Route::get('/content/servicos-gerais', 'ManageController@start')->name('manage.servicosGerais');
  Route::get('/content/atuacao', 'ManageController@start')->name('manage.atuacao');
  Route::get('/content/grupo', 'ManageController@start')->name('manage.grupo');
  Route::get('/content/conheca', 'ManageController@start')->name('manage.conheca');
  Route::get('/content/resp-social', 'ManageController@start')->name('manage.respSocial');
  Route::get('/content/pro-acao', 'ManageController@start')->name('manage.proAcao');
  Route::get('/content/pro-acao-campanha', 'ManageController@start')->name('manage.proAcaoCampanha');
  Route::get('/content/clientes', 'ManageController@start')->name('manage.clientes');
  Route::get('/content/rh', 'ManageController@start')->name('manage.rh');
  Route::get('/content/fale-conosco', 'ManageController@start')->name('manage.faleConosco');
  Route::get('/content/sac', 'ManageController@start')->name('manage.sac');
  Route::get('/content/trabalhe-conosco', 'ManageController@start')->name('manage.trabalheConosco');
  Route::get('/content/fornecedores', 'ManageController@start')->name('manage.fornecedores');
  Route::get('/content/contatos', 'ManageController@start')->name('manage.contatos');
  Route::get('/content/proposta', 'ManageController@start')->name('manage.proposta');
  //Route::resource('/posts', 'PostController');
});

Route::get('/manage/home', 'HomeController@index')->name('manage.home');
//Route::view('/manage/home', 'manage.home');
Route::get('/console', function () {
    return redirect('manage/dashboard');
});