
<?php $__env->startSection('title'); ?>
<?php $__env->startSection('content'); ?>
<h1 style="margin: 20px;">Todos Los Productos</h1>

<ul class="list-group">
    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="list-group-item active" aria-current="true"><?php echo e($producto->nombre); ?></li>
    <li class="list-group-item"><?php echo e($producto->descripcion); ?></li>
    <li class="list-group-item"><?php echo e($producto->marca); ?></li>
    <li class="list-group-item"><?php echo e($producto->categoria); ?></li>
    <li class="list-group-item"><?php echo e($producto->precio); ?></li><br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<a href="http://localhost/ecomerce/public/productos?page=1">1</a>
<a href="http://localhost/ecomerce/public/productos?page=2">2</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecomerce\resources\views/productos/index.blade.php ENDPATH**/ ?>