<?php

namespace App\Http\Controllers;

use App\Models\ModelTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerWeb extends Controller
{
    // validação dos dados inseridos no formulario de criação de tarefas
    public function CriarTarefa(Request $request)
    {
        $alfabeto = 'abcdefghijlklmnopqrstuvwxyz';
        $algarismos = '0123456789';
        $erros = [];

        if (empty($request->name)) {
            $erros[] = 'Nome da tarefa vazio!';
        }

        if (empty($request->horas)) {
            $erros[] = 'Horas da tarefa vazio!';
        }

        // as combinações de letras e numeros são permitidas
        // um exemplo seria 1ª ida na academia
        if (is_numeric(value: $request->name)) {
            $erros[] = 'Apenas numeros digitados no nome da tarefa!';

        }

        if (! strlen($request->horas) == 5) {
            $erros[] = 'Fuga do formato de horas aceitado (00:00) !';

        }

        if (strpbrk($request->horas, $alfabeto) or ! strpbrk($request->horas, $algarismos)) {
            $erros[] = 'letras ou simbolos digitados nas horas!';

        }
        if (! empty($erros)) {
            // view de erros
            return view('view-erro', ['erros' => $erros]);
        } else {
            // pagina de criação de tarefa
            $task = new ModelTask;
            $task->user_id = Auth::user()->id;
            $task->nome = $request->name;
            $task->horas = $request->horas;
            $task->save();

            return view('view-tarefa-metodo-sucesso', ['metodo' => 'CRIADA']);
        }

    }

    public function EditarTarefa(Request $request, $id)
    {
        $task = ModelTask::find($id);
        $task->update([
            'nome' => $request->nome,
            'horas' => $request->horas,
        ]);

        return view('view-tarefa-metodo-sucesso', ['metodo' => 'EDITADA']);
    }

    public function ExcluirTarefa($id)
    {
        $task = ModelTask::find($id);
        $task->delete();

        return view('view-tarefa-metodo-sucesso', ['metodo' => 'EXCLUIDA']);
    }
}
