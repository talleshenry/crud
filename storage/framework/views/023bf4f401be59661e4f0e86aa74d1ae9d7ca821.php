<?php $__env->startSection("content"); ?>

    <table class="table">
        <thead>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Hobbies</th>
            <th>Editar</th>
            <th>Excluir</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
                    <td><?php echo e($cliente->nome); ?></td>
                    <td><?php echo e($cliente->cidade); ?></td>
                    <td><?php echo e($cliente->estado); ?></td>
                    <td><?php echo e($cliente->hobbie); ?></td>
                    <td>
                        <a href="<?php echo e(route("cliente.editar", ["id" => $cliente->id ])); ?>">Editar</a>
                    </td>
                    <td>
                        <a href="<?php echo e(route("cliente.excluir", ["id" => $cliente->id ])); ?>">Excluir</a>
                    </td>
                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("template", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>