<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/sobre-nosotros', function () {
    return view('about');
})->name('about');

Route::get('/servicios', function () {
    return view('services');
})->name('services');

Route::get('/beneficios', function () {
    return view('benefits');
})->name('benefits');

Route::get('/nuestro-equipo', function () {
    return view('team');
})->name('team');

Route::get('/contactanos', function () {
    return view('contact');
})->name('contact');

Route::post('/contactanos', function () {
    // Aquí iría la lógica para procesar el formulario de contacto
    // Por ahora, solo redirigiremos de vuelta a la página de contacto
    return redirect()->route('contact')->with('message', 'Mensaje enviado correctamente');
})->name('contact.submit');
