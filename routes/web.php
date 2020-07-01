<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');
Route::get('/dueniossearch','DueniosController@search');
Route::resource('duenios', 'DueniosController')->names('duenios')->parameters(['duenios' => 'project']);
Route::put('/dueniosUpdate/{id}','DueniosController@update');
Route::delete('/dueniosdelete/{id}','DueniosController@delete');

Route::get('animales/search', 'AnimalesController@search')->name('animales.search');
Route::resource('animales', 'AnimalesController')->names('animales')->parameters(['animales' => 'project']);

Route::get('productos/search', 'ProductosController@search')->name('productos.search');

Route::resource('productos', 'ProductosController')->names('productos')->parameters(['productos' => 'project']);
Route::resource('ventas', 'VentasController')->names('ventas')->parameters(['ventas' => 'project']);
Route::resource('portafolio', 'ProjectController')->names('projects')->parameters(['portafolio' => 'project']);
Route::get('reservas/search', 'ReservasController@search')->name('reservas.search');
Route::resource('reservas', 'ReservasController')->names('reservas')->parameters(['reservas' => 'project']);


Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');

Auth::routes(['register'=>true]);
//Auth::Route();

//Route::get('/home', 'HomeController@index')->name('home');
