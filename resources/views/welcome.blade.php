<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro:</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<body class="bg-light">
    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
            <h1 class="mb-4 text-center">Bem-vindo</h1>
            <div class="d-flex gap-2 justify-content-center">
                <!-- Botão de Login -->
                <a href="{{ route('user.login') }}" class="btn btn-primary">Login</a>
                <a href="{{ route('user.cadastro') }}" class="btn btn-success">Cadastrar</a>
            </div>
        </div>
    </div>
</body>
</html>
        </div>
    </body>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-VkzQbN4Z1cdq9VHtV6nRvWmvMRGsiE9z1FMvx6bMpiKFFitvolG/Gp2gbf28pQAo" crossorigin="anonymous">
</html>
