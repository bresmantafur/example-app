<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Pest\Plugins\Profile;

Route::get('/chirps1', function () {
    return 'este es una pagina';
});

Route::get('/chirps', function () {
    return view('chirps.index');
})->name('chirps.index');




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/empleado', function () {
        return view('chirps.index');
    })->name('chirps.index');
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
Route::get('/empleado',[EmpleadoController::class,'index'])->name('empleado.index');
Route::post('/empleado', [EmpleadoController::class,'store'])->name('empleado.store');



Route::get('/lista empleado', function () {
    return view('lista empleado.index');
})->name('lista empleado.index');

Route::get('/agendacitas', function () {
    return view('agendacitas.index');
})->name('agendacitas.index');

Route::get('/agenda', function () {
    return view('agenda.index');
})->name('agenda.index');

Route::get('/citas agendadas', function () {
    return view('citas agendadas.index');
})->name('citas agendadas.index');

});
require __DIR__.'/auth.php';
