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


/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::resource('/welcome','WelcomeController');
Route::resource('/usuario/encuesta','UEncuestaController');
Route::get('/', function () {
    return view('auth/login');
});

Route::resource('/usuario','UsuarioController');


Route::resource('/empleado','EmpleadoController');
Route::resource('/area','AreaController');
Route::resource('/cargo','CargoController');
Route::resource('/areacargo','AreaCargoController');

 
Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('/');
}); 
Auth::routes();
Route::get('/{slug}', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/empleado','EmpleadoController');
Route::resource('/cuestionario/pregunta','PreguntaController');
Route::resource('/cuestionario/categoria','CategoriaController');
//


