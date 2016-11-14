<?php $__env->startSection("content"); ?>

    <form method="post" action="<?php echo e(route("cliente.novo")); ?>">

        <?php echo e(csrf_field()); ?>


        <?php if(isset($cliente)): ?>
            <input type="hidden" name="id" value="<?php echo e($cliente->id); ?>">
        <?php endif; ?>
        <div class="form-group">
            <label>
                Nome:
                <input type="text" name="nome" class="form-control" value="<?php echo e(@$cliente->nome); ?>">
            </label>
        </div>

        <div class="form-group">
            <label>
                Cidade:
                <input type="text" name="cidade" class="form-control" value="<?php echo e(@$cliente->cidade); ?>">
            </label>
        </div>
        <div class="form-group">
            <label>
                Estado:
                <input type="text" name="estado" class="form-control" value="<?php echo e(@$cliente->estado); ?>">
            </label>
        </div>
        <div class="form-group">
            <label>
                Hobbies:
                <input type="text" name="hobbie" class="form-control" value="<?php echo e(@$cliente->hobbie); ?>">
            </label>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="salvar">
        </div>
    </form>



<?php $__env->stopSection(); ?>
<?php echo $__env->make("template", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>