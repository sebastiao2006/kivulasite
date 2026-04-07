<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\ProjectController;
use App\Http\Controllers\Site\AuthPageController;

Route::get('/', [HomeController::class, 'index'])->name('site.home');
Route::get('/sobre', [AboutController::class, 'index'])->name('site.about');
Route::get('/contacto', [ContactController::class, 'index'])->name('site.contact');
Route::post('/contacto', [ContactController::class, 'store'])->name('site.contact.store');

Route::get('/blog', [BlogController::class, 'index'])->name('site.blog');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('site.blog.show');

Route::get('/projetos', [ProjectController::class, 'index'])->name('site.projects');
Route::get('/projetos/{id}', [ProjectController::class, 'show'])->name('site.projects.show');

Route::get('/politica-de-privacidade', function () {
    return view('site.privacy-policy');
})->name('site.privacy');

Route::get('/termos-e-condicoes', function () {
    return view('site.terms');
})->name('site.terms');

Route::get('/entrar', [AuthPageController::class, 'login'])->name('site.login');
Route::get('/registrar', [AuthPageController::class, 'register'])->name('site.register');