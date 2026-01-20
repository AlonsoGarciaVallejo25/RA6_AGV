<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Publicaciones</title>
</head>
<body>

<h1>Listado de publicaciones</h1>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Categoría</th>
            <th>Extracto</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($post->id); ?></td>
                <td><?php echo e($post->title); ?></td>
                <td><?php echo e($post->user->name); ?></td>
                <td><?php echo e($post->category); ?></td>
                <td><?php echo e($post->excerpt); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<br>
<a href="/users">Ver usuarios</a>

</body>
</html>
<?php /**PATH C:\Users\CampusFP\RA6_AGV\resources\views/posts/index.blade.php ENDPATH**/ ?>