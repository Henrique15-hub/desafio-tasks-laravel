<?php

use App\Http\Controllers\ControllerWeb;
use App\Http\Controllers\ProfileController;
use App\Models\ModelTask;
use Illuminate\Support\Facades\Route;

// pagina inicial
Route::get('/', function () {
    return view('welcome');
});

// criação de tarefas
// formulario de criação de tarefas
Route::get('nova-tarefa', function () {
    return view('nova-tarefa');
})->middleware('auth', 'verified')->name('nova-tarefa');

// verificação de dados inseridos no formulario e redirecionamento pra pagina de erros ou sucesso
Route::put('nova-tarefa/criada', [ControllerWeb::class, 'CriarTarefa'])->middleware('auth', 'verified')->name('nova-tarefa-criada');
// fim

Route::get('pagina-de-teste', function () {
    return view('view-navigation');
})->name('view-teste');

// edição de tarefas
// formulario de edição de tarefas
Route::get('tarefa/editar/{task}', function ($task) {
    $task_comp = ModelTask::find($task);

    return view('view-editar-tarefa', ['task_comp' => $task_comp]);
})->middleware('auth', 'verified')->name('editar-tarefa-get');

// redirecionamento dos dados do formulario de tarefas
Route::put('tarefa/editar/{id}', [ControllerWeb::class, 'EditarTarefa'])->middleware('auth', 'verified')->name('editar-tarefa-put');
// fim

// exclusão de tarefas
// formualrio de exclusão de tarefas
Route::get('tarefa/excluir/{id}', function ($id) {
    $task = ModelTask::find($id);

    return view('excluir-tarefa', ['task' => $task]);
})->middleware('auth', 'verified')
    ->name('excluir-tarefa');
// função de excluir tarefas
Route::delete('tarefa/excluir/{id}', [ControllerWeb::class, 'ExcluirTarefa'])->name('excluir-tarefa-put');

// rotas de cadastro de usuarios com o breeze
Route::get('/dashboard', function () {
    $id_usuario = Auth::user()->id;
    $tasks = ModelTask::where('user_id', $id_usuario)->get();

    return view('dashboard', ['tasks' => $tasks]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// fim
