{{-- pagina referente ao conteudo central do site, aqui tem todas as tarefas do usuario logado --}}
@extends("layouts.view-navigation")
@section("content")
    <head>
        <style>
              h1 {
            color: white;
            text-align: left;
            margin: 0;
            padding: 10px;
            }
            .top-view {
                display: flex;
                align-items: center;
            }
           .botao-editar-tarefa {
                background-color: blue;
                padding: 1px 5px;
                cursor: pointer;
                border: 10px;
                color: white;
                border-radius: 8px;
                display: flex;
                justify-content: center;
                margin: 10px
            }
            .tarefas {
                display: flex;
                margin: 10px
            }
            .botao-excluir {
                background-color: red;
                padding: 1px 5px;
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
    <div class="top-view"> 
        <h1>MINHAS TAREFAS {{date("d/m/Y")}}</h1>    
        <form action="{{route('nova-tarefa')}}">
            <button class="botao-padrao">Nova tarefa</button>
        </form>
    </div>
    
       @foreach ($tasks as $task)
       <div class="tarefas">
       <h3>{{$task->id}} | </h3>
        <h3> {{$task->nome}}</h3>
      <h3> {{$task->horas}}</h3>
       <form method="get" action="{{route('editar-tarefa-get', ['task' => $task->id])}}">
        @csrf
        <button class="botao-editar-tarefa">Editar</button>
    </form> 
        <form method="get" action="{{route('excluir-tarefa', ['id' =>$task->id])}}">
            @csrf
            <button class="botao-excluir">Excluir</button>
        </form>
        </div>
       @endforeach
        
    
    </body>
@endsection

