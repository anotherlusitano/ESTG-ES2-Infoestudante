<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de Disciplinas</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #800000, #4d0000);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            position: absolute;
            top: 20px;
            font-size: 36px;
            text-align: center;
            width: 100%;
            margin: 0;
            color: white;
        }

        .container {
            background: white;
            color: #800000;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.6);
            width: 80%;
            max-width: 800px;
            min-height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            width: 100%;
            margin-top: 20px;
        }

        .buttons a {
            text-decoration: none;
            background: #800000;
            color: white;
            width: 200px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-size: 18px;
            margin: 10px;
        }

        .buttons a:hover {
            background: #4d0000;
        }
    </style>
</head>
<body>

    <h1>Área de Disciplinas</h1>

    <div class="container">
        <div class="buttons">
            <a href="{{ route('admin.disciplina.index') }}">Adicionar Disciplina</a>
            <a href="{{ route('admin.professor_disciplina.index') }}">Associar Professor</a>
            <a href="{{ route('admin.curso_disciplina.index') }}">Associar Curso</a>
        </div>
    </div>
</body>
</html>
