<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\KanbanController;
use App\Http\Controllers\CalendarController;

Route::get('/', function () {
    return view('auth.form');
});

use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/dashboard', function () {
    return Auth::check() ?view('dashboard'): redirect('/');
})->name('dashboard');
// TASKS
Route::get('/tasks/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/tasks/store', [TaskController::class, 'store'])->name('task.store');

// TEAM MEMBERS
Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
Route::post('/team/store', [TeamController::class, 'store'])->name('team.store');

// LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/settings', function () {
    return view('settings');
})->name('settings.update');
Route::post('/settings', [SettingsController::class, 'update'])->name('settings.update');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects/store', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks/store', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/team', [TeamController::class, 'index'])->name('team.index');
Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
Route::post('/team/store', [TeamController::class, 'store'])->name('team.store');
Route::get('/kanban', [KanbanController::class, 'index'])->name('kanban.index');
Route::resource('projects', ProjectController::class);


Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');

