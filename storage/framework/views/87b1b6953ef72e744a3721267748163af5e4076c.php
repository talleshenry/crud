<?php $__env->startSection("content"); ?>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <a href="<?php echo e(url('/login')); ?>">Login</a>
                    <a href="<?php echo e(url('/register')); ?>">Register</a>
                </div>
            <?php endif; ?>

            <div class="content">
                <h1><a href="<?php echo e(route("cliente.novo")); ?>">Novo Cliente</a></h1>
                <h1><a href="<?php echo e(route("cliente.listar")); ?>">Listar Cliente</a></h1>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("template", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>