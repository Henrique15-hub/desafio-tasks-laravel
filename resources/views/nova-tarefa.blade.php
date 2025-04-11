{{-- pagina referente a criação de tarefas --}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #36454F;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #26454F;
            border: 1px solid #16454F;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

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
    <form action="{{route('nova-tarefa-criada')}}" method="POST">
        @csrf
        @method('put')
        <label for="">Nome da tarefa:</label>
        <input type="text" id="name" name="name">
        <label for="">Horas da tarefa (24hrs):</label>
        <input type='text' id="horas" name="horas">
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
