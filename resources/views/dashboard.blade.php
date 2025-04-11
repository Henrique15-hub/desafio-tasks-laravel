<x-app-layout>
    <head>
        <style>
              h1 {
            color: white;
            text-align: center;
            margin: 0;
            padding: 10px;
            }
            .top-view {
                display: flex;
                align-items: center;
                justify-content: center;
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
                font-size: 20px;
                color: white;
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
            .botao-padrao {
                justify-content: center;
                align-itens: center;
                background-color: blue;
                color: white;
                border-radius: 8px;
                padding: 10px 20px;
            }
        </style>
    </head>
    <body >
    <div class="top-view">
        <strong><h1 style="font-size: 48px">MINHAS TAREFAS {{date("d/m/Y")}}</h1></strong>
        <form action="{{route('nova-tarefa')}}">
            <button class="botao-padrao">Nova tarefa</button>
        </form>
    </div>

       @foreach ($tasks as $task)
       <div class="tarefas">
       <h3>{{$task->id}} | </h3>
        <h3> {{$task->nome}} | </h3>
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
</x-app-layout>

