{{-- pagina referente a edição de tarefas --}}
@extends('layouts.view-navigation')

@section('content')

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <style>


        .form-edit{
            background-color: #26454F;
            border: 1px solid #16454F;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
           display: flex;
           align-items: center;
           justify-content: center;
        }
      
      

        /* form {
            background-color: #26454F;
            border: 1px solid #16454F;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        } */

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #FFFFFF;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: green;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>

</head>
<body>
    <div class="form-edit">
        
    <form method="post" action="{{route('editar-tarefa-put', ['id' =>$task_comp->id])}}">
        @csrf
        @method("PUT")
        <label for="">Editar nome</label>
        <input type="text" id="nome" name="nome" value="{{$task_comp->nome}}">

        <label for="">Editar horas</label>
        <input type="text" id="horas" name="horas" value="{{$task_comp->horas}}">

        <input type="submit" value="Editar">
    </form>
    
    {{-- {{var_dump();}} --}}
    </div>
</body>
</html>


@endsection

