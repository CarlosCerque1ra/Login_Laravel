<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="row w-100 justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white position-relative">
                        <a href="{{ route('welcome') }}" class="position-absolute top-50 start-0 translate-middle-y ms-3 text-white" style="text-decoration: none;">
                            <i class="bi bi-arrow-left-circle" style="font-size: 1.5rem;"></i>
                        </a>
                        <div class="text-center">
                            <h4 class="mb-0">Login de Usuário</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.logar') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    <input type="password" id="senha" name="senha" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3 ">
                                <a href="{{route ('user.verificacao')}}" class="link-secondary text-decoration-none small">Esqueci minha senha</a>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="bi bi-box-arrow-in-right me-1"></i>Entrar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
