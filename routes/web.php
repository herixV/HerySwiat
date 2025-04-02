<?php

// use App\Http\Controllers\HomeController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\ServiceController;
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

// Login Administration
Route::get('/admin', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/admin', [LoginController::class, 'auth'])-> name('auth');
// LogOut Administration
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// dashboard Administration
Route::get('/admin/dashboard', [LoginController::class, 'dashboard'])-> name('dashboard')->middleware('auth');

// CRUD Administration Services 
Route::get('/admin/serviceList', [ServiceController::class, 'serviceList'])->name('serviceList')->middleware('auth');
// Create Service
Route::get('admin/serviceCreate', [ServiceController::class, 'create'])->name('serviceCreate')->middleware('auth');
Route::post('admin/serviceStore', [ServiceController::class, 'store'])->name('serviceStore')->middleware('auth');
// Edit Service
Route::get('admin/serviceEdit/{id}', [ServiceController::class, 'edit'])->name('serviceEdit')->middleware('auth');
Route::put('admin/serviceUpdate/{id}', [ServiceController::class, 'update'])->name('serviceUpdate')->middleware('auth');

Route::delete('admin/serviceDelete/{id}', [ServiceController::class, 'destroy'])->name('serviceDelete')->middleware('auth');

// CRUD Administration models
Route::get('/admin/modelList', [ModelsController::class, 'modelList'])->name('modelList')->middleware('auth');
Route::get('/admin/modelCreate', [ModelsController::class, 'create'])->name('modelCreate')->middleware('auth');
Route::post('/admin/modelStore', [ModelsController::class, 'store'])->name('modelStore')->middleware('auth');
Route::get('/admin/modelEdit/{id}', [ModelsController::class, 'edit'])->name('modelEdit')->middleware('auth');
Route::put('/admin/modelUpdate/{id}', [ModelsController::class, 'update'])->name('modelUpdate')->middleware('auth');
Route::get('/admin/modelDelete/{id}', [ModelsController::class, 'destroy'])->name('modelDelete')->middleware('auth');
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