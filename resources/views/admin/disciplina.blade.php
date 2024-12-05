<!DOCTYPE html>
<html lang="en-CA"{{-- Me dá emprego no Canadá, Toacy :) --}}> 
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Disciplina</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #4d0000, #800000);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .form-container {
            background: white;
            color: #800000;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.6);
            width: 90%;
            max-width: 600px;
        }
        h1 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
        }
        input, button, select, option {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #800000;
            border-radius: 5px;
        }
        button {
            background: #800000;
            color: white;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        button:hover {
            background: #4d0000;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Adicionar Disciplina</h1>
        <form method="POST" action="{{url('/admin/disciplina/criarDisciplina')}}">
            <label for="nome">Nome da Disciplina:</label>
            @csrf
            <input type="text" id="nome" name="nome" required>

            <label for="carga_horaria">Carga horária:</label>
            @csrf
            <input type="number" id="carga_horaria" name="carga_horaria">

            <button type="submit">Criar Disciplina</button>
        </form>
        @if(session('message'))
        <script>
            const message = {!! session('message') !!};
            alert(message.message);
        </script>
        @endif
    </div>
</body>
</html>
