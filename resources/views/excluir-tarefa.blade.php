@extends('layouts.view-navigation')
@section('content')
<head>
    <style>
        h1 {
            color: white;
            text-align: left;
            margin: 0;
            padding: 10px;
        }
        button {
            background-color: red;
                padding: 10px 50px;
                cursor: pointer;
                border: 10px;
                color: white;
                border-radius: 8px;
                display: flex;
                justify-content: center;
                margin: 10px
        }
    </style>
</head>
<body>
    <h1>VOCÊ REALMENTE DESEJA EXCLUIR A TAREFA?</h1>
    <form method="post" action="{{route("excluir-tarefa-put",['id' =>$task->id])}}">
        @csrf
        @method('delete')
        <button>EXcluir tarefa</button>
    </form>
</body>
@endsection