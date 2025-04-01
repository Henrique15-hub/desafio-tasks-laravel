{{-- pagina inicial do site --}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #36454F; /* Fundo cinza escuro */
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        p {
            color: #FFFFFF; /* Texto branco */
            font-size: 1.5rem;
            margin-bottom: 20px;
            text-align: center;
        }

        a {
            color: #FFFFFF; /* Link em branco */
            text-decoration: none;
            padding: 10px 20px;
            background-color: green; /* Verde para os links */
            border: none;
            border-radius: 8px;
            font-weight: bold;
            margin: 5px;
            display: inline-block;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        a:hover {
            background-color: #0056b3; /* Azul ao passar o mouse */
            transform: scale(1.05); /* Pequeno efeito de zoom */
        }

        nav {
            display: flex;
            gap: 10px;
            justify-content: center;
            flex-wrap: wrap;
        }
    </style>

</head>
<body>   
    <p>SISTEMA DE TAREFAS</p>
    @if (Route::has('login'))
        @auth 
        <a href="{{route('dashboard')}}">Dashboard</a>

    @else
        <a href="{{route("login")}}">Logar</a>

        @if (Route::has('register'))
            <a href="{{route('register')}}">Registrar</a>
        @endif
    @endauth
    @endif
</body>
</html>

