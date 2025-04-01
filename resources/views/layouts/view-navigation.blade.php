{{-- view de navegação do site, aqui contem o header e o estilo dos botões do site --}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #36454F; /* Fundo cinza escuro */
            margin: 0;
            padding: 0;   
            
   
            
        }


        header {
            display: flex;
            justify-content: space-between; /* Divide os itens ao máximo */
            align-items: center;
            padding: 10px;
            background-color: #29343b;
        }

        .actions {
            display: flex;
            gap: 10px; /* Espaço entre os botões */
        }

        .botao-padrao {
            padding: 10px 20px;
            background-color: green;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 8px;
        }

        button:hover {
            background-color: #0056b3; /* Azul ao passar o mouse */
        }

        h3 {
            color: white;
            text-align: left;
            margin: 0;
            padding: 10px;
        }
        
    </style>
</head>
<body>
    <header>
        <!-- Botões referente aos conteudos do site -->
        {{-- alinhados a esquerda --}}
        <form method="get" action="{{route('dashboard')}}">
            @csrf
            <button class="botao-padrao">Tarefas</button>
        </form>

       

        <!-- Botões referente a conta do usuario -->
        {{-- alinhados a direita --}}
        <div class="actions">
            <h3>{{Auth::user()->name}}</h3>

            <form method="get" action="{{route('profile.edit')}}">
                @csrf
                <button class="botao-padrao">Minha Conta</button>
            </form>

            <form method="post" action="{{route('logout')}}">
                @csrf
                <button class="botao-padrao">Logout</button>
            </form>
        </div>
    </header>
    @yield('content')
</body>
</html>