<?php

use Illuminate\Support\Facades\Route;

use App\Models\Task;

// ______________________________________________________________________

Route::get('/', function () {
    return redirect(null)->route('tasks.index');
});

Route::get('/tasks', function ()  {
    return view('index', [
        'tasks' => Task::latest()->get()
    ]);
})->name('tasks.index');

Route::get('/tasks/{id}', function ($id) {
    return view('show', [
        'task' => Task::findOrFail($id)
    ]);
})->name('tasks.show');

// Route::get("/hello", function () {
//     return "Hello World";
// })->name("hello");
//
// Route::get("/hallo", function () {
//     return redirect(null)->route("hello");
// });
//
// Route::get("/greet/{name}", function ($name) {
//     return "Hello " . $name;
// });

Route::fallback(function () {
    return "Not Found";
});
