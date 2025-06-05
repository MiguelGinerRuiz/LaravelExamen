<?php $__env->startSection('titulo', 'Inicio'); ?>
<?php $__env->startSection('contenido'); ?>
<h1>Detalles del Alumno</h1>

<p><strong>Nombre Completo </strong> <?php echo e($alumno->Nombre); ?> <?php echo e($alumno->Apellidos); ?></p>
<select class="form-select" aria-label="Default select example">
  <option selected>¿Quien viene a recogerlo?</option>
  <option value="Padre"><?php echo e($alumno->NombreMadre); ?></option>
  <option value="Madre"><?php echo e($alumno->NombrePadre); ?></option>
</select>
<p><strong>Curso</strong> <?php echo e($alumno->Curso); ?></p>
<p><strong>Aula</strong> <?php echo e($alumno->Aula); ?></p>
<button >Enviar</button>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /opt/lampp/htdocs/colegio/resources/views/colegio/show.blade.php ENDPATH**/ ?>