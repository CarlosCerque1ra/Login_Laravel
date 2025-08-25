<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="mb-0"><i class="bi bi-house-door-fill me-2"></i>Home Page</h4>
                    </div>
                    <div class="card-body text-center">
                        <h5>Bem-vindo à Home Page!</h5>
                        <p>Você está logado com sucesso.</p>
                        <a href="<?php echo e(route ('welcome')); ?>" class="btn btn-danger"><i class="bi bi-box-arrow-right me-1"></i>Sair</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Apache\htdocs\PaginaDeLogin_Laravel\resources\views/user/home.blade.php ENDPATH**/ ?>