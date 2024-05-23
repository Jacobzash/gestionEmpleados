<?php

use App\Livewire\Empleados\EmpleadoIndex;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    //Routes Empleados
    Route::get('/empleados', \App\Livewire\Empleados\Index::class)->name('empleados.index');
    Route::get('/empleados/create', \App\Livewire\Empleados\Create::class)->name('empleados.create');
    Route::get('/empleados/show/{empleado}', \App\Livewire\Empleados\Show::class)->name('empleados.show');
    Route::get('/empleados/update/{empleado}', \App\Livewire\Empleados\Edit::class)->name('empleados.edit');
    //Routes Departamentos
    Route::get('/departamentos', \App\Livewire\Departamentos\Index::class)->name('departamentos.index');
    Route::get('/departamentos/create', \App\Livewire\Departamentos\Create::class)->name('departamentos.create');
    Route::get('/departamentos/show/{departamento}', \App\Livewire\Departamentos\Show::class)->name('departamentos.show');
    Route::get('/departamentos/update/{departamento}', \App\Livewire\Departamentos\Edit::class)->name('departamentos.edit');
});


