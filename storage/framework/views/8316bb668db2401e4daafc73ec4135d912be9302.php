<?php $__env->startSection('title',"ABM"); ?>

<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="/css/perfil.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div
  class="container text-center col-lg-8 col-md-8 col-sm-10 col-xs-12 mt-5"
  id="puntaje"
>
  <div class="card text-center">
    <div class="card-header" style="font-weight:bold">

      Question manager:
    </div>
    <div class="row mb-1">
      <div class="col-6">Category: </div>
    </div>
    <div class="row mb-1">
      <div class="col-6">Pregunta</div><div class="col-6 float-right">Boolean</div>
    </div>
    <div class="row mb-1">
      <div class="col-6">Pregunta</div><div class="col-6 float-right">Boolean</div>
    </div>
    <div class="row mb-1">
      <div class="col-6">Pregunta</div><div class="col-6 float-right">Boolean</div>
    </div>
    <div class="row mb-1">
      <div class="col-6">Pregunta</div><div class="col-6 float-right">Boolean</div>
    </div>
    <div class="row mb-1">
      <div class="col-6">Pregunta</div><div class="col-6 float-right">Boolean</div>
    </div>
    <input type="text" name="new" class="Question" value=""><br>
    <div class="">

    <select class="drop-down menu col-sm-4 " placeholder="Boolean" value="" name="category">
      <option value="1">Verdadero</option>
      <option value="2">Falso</option>
    </select>
    <select class="drop-down menu col-sm-4 " placeholder="Select category" value="" name="category">
      <option value="1">Ciencia</option>
      <option value="2">Arte</option>
      <option value="3">Geografía</option>
      <option value="4">Espectaculos</option>
      <option value="5">Historia</option>

    </select> <br><br>
  </div>

    <div>
      <input type="submit" class="button-login" value="Modify" />

      <input type="submit" class="button-login" value="Remove" />

      <input type="submit" class="button-login" value="Insert" />
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Notebook\Juego\resources\views/abm.blade.php ENDPATH**/ ?>