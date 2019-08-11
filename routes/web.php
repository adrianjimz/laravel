<?php

/* -- Tipos de rutas
Route::get('/', function () {
    return "Hola desde la página de inicio";
});

Route::get('contacto', function () {
    return "Hola desde la página de contacto";
});

Route::get('saludo/{nombre?}',function($nombre = "Invitado"){
	return "Saludos ". $nombre;
});
-- */


/* -- Rutas con nombres --*/

/*
Route::get('contactame', function () {
    return "Sección de contactos";
})->name('contactos');

Route::get('/', function () {
    echo "<a href='".route('contactos')."'>Contactos 1</a><br>";
	echo "<a href='".route('contactos')."'>Contactos 2</a><br>";
	echo "<a href='".route('contactos')."'>Contactos 3</a><br>";
	echo "<a href='".route('contactos')."'>Contactos 4</a><br>";
	echo "<a href='".route('contactos')."'>Contactos 5</a><br>";
});*/

//---------------------------------------------------------------------------------------------------------

/*-- Mostrar valores en la vista --*/

/*
Route::get('/', function () {
	$nombre = 'Adrian';
    return view ('home', compact('nombre')); //Estamos pasando el valor de nombre

})->name('home');*/

//---------------------------------------------------------------------------------------------------------

/*-- Forma de llamar la vista--*/

//Route::view('/','home')->name('home');

//----------------------------------------------------------------------------------------------------------

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/portfolio','portfolio')->name('portfolio');
Route::view('/contact','contact')->name('contact');