<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 2rem;
            background: #f9fafb;
            color: #1f2937;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .box {
            padding: 2rem;
            margin-bottom: 2rem;
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        a {
            color: #6366f1;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="box">
        <h1>Laravel com Vue 3</h1>
        <p>Você está vendo a tela inicial estilizada sem Tailwind.</p>

        <hr><br>
    </div>
    <div class="box">
        <div id="app">
            <example-component></example-component>
            <usuarios-component></usuarios-component>
        </div>
    </div>
</body>

</html>