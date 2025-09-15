<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoController;
Route::get('/', [TodoController::class, 'index'])->name('todos.index');

Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');
Route::patch('/todos/{todo}', [TodoController::class, 'update'])->name('todos.update');
Route::delete('/todos/{todo}', [TodoController::class, 'delete'])->name('todos.delete');
