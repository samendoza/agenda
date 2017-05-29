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
use App\Usuario;
//use DB;

Route::get('/', 'WelcomeController@index');

Route::post('login', 'LoginController@inicio');
Route::get('/home', function(){

    if(session('usuario')=='')
        return redirect('/');
	else
		return view('home');
});


Route::get('/imagen', 'LoginController@imagen');
Route::get('/usuario', function(){

    return session('usuario');
});


Route::get('/contactos', 'ContactosController@busqueda');
Route::get('/busqueda', function(){
	if(session('usuario')=='')
        return redirect('/');
	return view('busquedaContactos');
});

Route::get('/adicion', function(){
	if(session('usuario')=='')
        return redirect('/');
	return view('agregarContactos');
});


Route::post('/contactos/eliminar', 'ContactosController@eliminar');
Route::post('/contactos/agregar', 'ContactosController@agregar');
Route::get('/registro', function(){
	return view('registro');
});

Route::post('/verificar','LoginController@verificar');
Route::post('/registrar', 'LoginController@registrar');
Route::get('/logout', function(){

	//Session::flush(); // removes all session data
    //Auth::logout();
    //session()->regenerate();
    session()->forget('usuario');
	return Redirect::action('WelcomeController@index');
} );

Route::post('/edicion', 'LoginController@editar');
Route::get('/edicion', function(){
	if(session('usuario')=='')
        return redirect('/');
	return view('editarPerfil');
});

Route::get('dom', function(){
    return view('dom');
});

Route::post('info', 'LoginController@guardarInfo');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
