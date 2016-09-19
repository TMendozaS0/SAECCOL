<?php
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('login', function () {
    return view('login.index');
});

Route::get('/', function () {
    return view('usuario.index');
});

Route::get('buscar', function () {
    return view('usuario.modificarbuscar');
});

Route::get('cssagregar', function () {
    return view('root.cssagregareditar');
});

Route::get('cssseleccionar', function () {
    return view('root.cssseleccionar');
});

Route::get('csscuentas', function () {
    return view('root.csscuentasadmin');
});

Route::get('adminperfiles', function () {
    return view('root.adminperfiles');
});

Route::get('adminaccesos', function () {
    return view('root.adminaccesosfe');
});



route::resource('crear','UsuarioController@create');

Route::get('modificar', function () {
    return view('usuario.modificar');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //

});
