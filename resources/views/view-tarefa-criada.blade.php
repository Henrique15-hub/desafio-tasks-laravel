{{-- view referente á pagina de sucessos do formulario de criação de tarefas --}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
                background-color: #36454F; /* Fundo cinza escuro */
                margin: 10px;
                padding: 0;
        }
        form {
                display: inline-block;
                margin: 10px;
                vertical-align: top;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        button {
        background-color: green;
                font-size: 1rem;
                padding: 10px 20px;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                transition: background-color 0.3s ease;
                color: white;
                
            }

            button:hover {
                background-color: #0056b3; /* Azul ao passar o mouse */
            }
            h1 {
                color: white;
                text-align: center;
                margin: 0;
                padding: 10px;
            }
            header {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
                padding: 10px;
                background-color: #36454F;
            }
    </style>
</head>
<body>
    <h1>TAREFA {{$metodo}} COM SUCESSO!</h1>
    <form method="POST" action="{{route('nova-tarefa')}}">
        @csrf
        <button>Criar nova tarefa</button>
    </form>
    <form action="{{route('dashboard')}}">
        <button>Ver tarefas</button>
    </form>
    <form method="POST"  action="{{route('logout')}}">
        @csrf
        <button>Logout</button>
    </form>
</body>
</html>