<?php $__env->startSection('title',"Index"); ?>

<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="/css/index.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="text-center">
    <h4>Welcome User!! click here to start your game! </h4>
  <br>
  </div>
  <a href="/play">
    <img src="img/Play_Button.png" class="play" alt="..."/>
  </a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Notebook\Juego\resources\views/index.blade.php ENDPATH**/ ?>