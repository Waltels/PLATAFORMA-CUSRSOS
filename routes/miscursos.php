<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\MiscursosCourses;

Route::get('courses', MiscursosCourses::class)->name('livewire.miscursos-courses');