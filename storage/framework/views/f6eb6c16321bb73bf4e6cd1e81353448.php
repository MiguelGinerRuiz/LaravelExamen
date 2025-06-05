<?php $__env->startSection('titulo', 'Inicio'); ?>
<?php $__env->startSection('contenido'); ?>
<h1>Buscar Alumno</h1>
<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Nombre del alumno" aria-label="Username" aria-describedby="basic-addon1">
<button type="button" class="btn btn-primary">Buscar</button>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nombre Completo</th>
            <th scope="col">curso</th>
            <th scope="col">Aula</th>
            <th scope="col">NIA</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr scope="row">
            <?php $__currentLoopData = $alumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td><?php echo e($alumno->Nombre); ?> <?php echo e($alumno->Apellidos); ?></td>
            <td><?php echo e($alumno->Curso); ?></td>
            <td><?php echo e($alumno->Aula); ?></td>
            <td><?php echo e($alumno->NIA); ?></td>

            <td><a href="<?php echo e(route('colegio.show', $alumno->id)); ?>">Detalles del alumno</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /opt/lampp/htdocs/colegio/resources/views/colegio/index.blade.php ENDPATH**/ ?>