<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Informações</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="row w-100 justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-info text-white text-center position-relative">
                        <a href="<?php echo e(route('user.login')); ?>" class="position-absolute top-50 start-0 translate-middle-y ms-3 text-white" style="text-decoration: none;">
                            <i class="bi bi-arrow-left-circle" style="font-size: 1.5rem;"></i>
                        </a>
                        <h4 class="mb-0"><i class="bi bi-check-circle me-2"></i>Verificação de Informações</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('user.verificar')); ?>">
                            <?php echo csrf_field(); ?>
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" id="email" name="email" class="form-control" required value="<?php echo e(old('email')); ?>">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info w-100 text-white">
                                <i class="bi bi-send"></i>Enviar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Apache\htdocs\PaginaDeLogin_Laravel\resources\views/user/verificacao.blade.php ENDPATH**/ ?>