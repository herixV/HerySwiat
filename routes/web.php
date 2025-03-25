<?php

// use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ViewsController::class, 'home']) ->name('home');
Route::get('/about', [ViewsController::class, 'about']) ->name('about');
Route::get('/gallery', [ViewsController::class, 'gallery'])-> name('gallery');

Route::get('/services', [ViewsController::class, 'services'])-> name('services');
Route::get('/services/service-details/{id}/{slug}', [ViewsController::class, 'serviceDetails'])-> name('service-details');

Route::get('/contact', [ViewsController::class, 'contact'])-> name('contact');

Route::get('/blog', [ViewsController::class, 'blog'])-> name('blog');
Route::get('/blog/blog-single/{id}/{slug}', [ViewsController::class, 'blogSingle'])-> name('blog-single');

Route::get('/sitemap', [ViewsController::class, 'sitemap'])-> name('sitemap');
Route::get('/reviews', [ViewsController::class, 'reviews'])-> name('reviews');
Route::get('/faqs', [ViewsController::class, 'faqs'])-> name('faqs');

Route::get('/models', [ViewsController::class, 'models'])-> name('models');

Route::get('/register', [ViewsController::class, 'register'])-> name('register');

Route::get('/login', [ViewsController::class, 'login'])-> name('login');

// Route::fallback(function () {
//     return view('404');
// });

// Route::get('/blog', function () {
//     return view('blog');
// });

// Route::get('/blog-single', function () {
//     return view('blog-single');
// });

// Route::get('/sitemap', function () {
//     return view('sitemap');
// });

// Route::get('/reviews', function () {
//     return view('reviews');
// });

// Route::get('/faqs', function () {
//     return view('faqs');
// });

// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });
// Route::get('/models', function () {
//     return view('models');
// });


// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/gallery', function () {
//     return view('gallery');
// });

// Route::get('/services', function () {
//     return view('services');
// });

// Route::get('/service-details', function () {
//     return view('service-details');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// GET son aquellas peticiones que se hacen cuando escribimos una URL en el navegador
// GET son aquellas peticiones que se hacen cuando hacemos click en un enlace
// POST son aquellas peticiones que se hacen cuando enviamos un formulario
// PUT son aquellas peticiones que se hacen cuando queremos actualizar un registro
// PATCH son aquellas peticiones que se hacen cuando queremos actualizar un registro
// DELETE son aquellas peticiones que se hacen cuando queremos eliminar un registro