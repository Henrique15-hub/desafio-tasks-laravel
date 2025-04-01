{{-- view referente á pagina de erros do formulario de criação de tarefas  --}}
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
        h1 {
            color: white;
                text-align: center;
                margin: 0;
                padding: 10px;
        }
        h3 {
            color: red;
                text-align: center;
                margin: 0;
                padding: 10px;
        }
        
    </style>
</head>
<body>
    <h1>Você está nessa pagina por esses erros:</h1>
    @foreach ($erros as $erro)
        <h3>{{$erro}}</h3>
        <br>
    @endforeach
</body>
</html>