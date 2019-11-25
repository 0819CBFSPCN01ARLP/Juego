<?php $__env->startSection('title',"Play"); ?>

<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="/css/jugar.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="container pt-5">
    <div class="row">
      <div class="col-6"><h2 class="float-left">Puntaje</h2></div>
      <div class="col-6"><h2 class="float-right">Tiempo</h2></div>
    </div>
  </div>
  <!-- preguntas  -->
    <div class="m-auto preguntas">
      <h4 class="text-align-center">EL AGUA HIERVE A 95 GRADOS</h4>
    </div>
    <!-- botones -->
    <div class="m-auto">
      <button class="btn btn-success btn-lg btn-block true m-auto" style="">VERDADERO</button>
      <br>
      <button class="btn btn-danger btn-lg btn btn-block false m-auto">FALSO</button>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Notebook\Juego\resources\views/play.blade.php ENDPATH**/ ?>