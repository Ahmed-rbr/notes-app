<?php

use App\Http\Controllers\NoteBookController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




Route::controller(NoteController::class)->middleware('auth')->group(function(){
Route::get('notes','index')->name('notes.index');
Route::get('notes/create','create')->name('notes.create');
Route::post('notes','store')->name('notes.store');
Route::get('notes/{note}','show')->name('notes.show');
Route::get('notes/{note}/edit','edit')->name('notes.edit');
Route::patch('notes/{note}','update')->name('notes.update');
Route::delete('notes/{note}','destroy')->name('notes.destroy');
});

