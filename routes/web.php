<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;

/*
    GET - Request a resource
    POST - Create a new resource
    PUT - Update a resource
    PATCH - Modify a resource
    DELETE - Delete a resource
    OPTION - Ask the server which verbs are allowed
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// GET
Route::get('/blog', [PostsController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [PostsController::class, 'show'])->name('blog.show');

// POST
Route::get('/blog/create', [PostsController::class, 'create'])->name('blog.create');
Route::post('/blog', [PostsController::class, 'store'])->name('blog.store');

// PUT OR PATCH  
Route::get('/blog/edit/{id}', [PostsController::class, 'edit'])->name('blog.edit');
Route::post('/blog/{id}', [PostsController::class, 'update'])->name('blog.update');

// DELETE
Route::delete('/blog/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');

// Route::resource('blog', PostsController::class);

// Route for invoke method
Route::get('/', HomeController::class);

// Multiple HTTP verbs
// Route::match(['GET', 'POST'], '/blog', [PostsController::class, 'index']);
// Route::any('/blog', [PostsController::class, 'index']);

// Return a view
// Route::view('/blog', 'blog.index', ['name' => 'Code With Alex']);