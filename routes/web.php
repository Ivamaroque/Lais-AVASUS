<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin/cursos',['as'=>'admin.cursos','uses'=>"Admin\CursoController@index"]);
    Route::get('/admin/cursos/adicionar',['as'=>'admin.cursos.adicionar','uses'=>'Admin\CursoController@adicionar']);
    Route::post('/admin/cursos/salvar',['as'=>'admin.cursos.salvar','uses'=>'Admin\CursoController@salvar']);
    Route::get('/admin/cursos/editar/{id}',['as'=>'admin.cursos.editar','uses'=>'Admin\CursoController@editar']);
    Route::put('/admin/cursos/atualizar/{id}',['as'=>'admin.cursos.atualizar','uses'=>'Admin\CursoController@atualizar']);
    Route::get('/admin/cursos/deletar/{id}',['as'=>'admin.cursos.deletar','uses'=>'Admin\CursoController@deletar']);
    Route::get('/admin/cursos/baixar/{id}',['as'=>'admin.cursos.baixar','uses'=>'Admin\CursoController@baixar']);
});



Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'aluno'], function () {
  Route::get('/login', 'AlunoAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AlunoAuth\LoginController@login');
  Route::post('/logout', 'AlunoAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AlunoAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AlunoAuth\RegisterController@register');

  Route::post('/password/email', 'AlunoAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AlunoAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AlunoAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AlunoAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'professor'], function () {
  Route::get('/login', 'ProfessorAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'ProfessorAuth\LoginController@login');
  Route::post('/logout', 'ProfessorAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'ProfessorAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'ProfessorAuth\RegisterController@register');

  Route::post('/password/email', 'ProfessorAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'ProfessorAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'ProfessorAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'ProfessorAuth\ResetPasswordController@showResetForm');
});
