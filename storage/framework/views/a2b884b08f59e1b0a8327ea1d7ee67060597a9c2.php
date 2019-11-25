<?php $__env->startSection('title',"Profile"); ?>

<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="/css/perfil.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div
  class="container text-center col-lg-8 col-md-8 col-sm-10 col-xs-12 mt-5"
  id="puntaje">
  <div class="card text-center">
    <div class="card-header user-img" style="font-weight:bold">
      <img src="imgperfil/1.jpg" alt="" />
      <?php echo e(Auth::user()->name); ?> total score:
      </div>
    <div class="card-body">
      <h5 class="card-title">Congratulation <?php echo e(Auth::user()->name); ?>!!,
        this week you added 5000 points!</h5>
      <div>
        <a href="/home" class="btn mt-2 mb-3 abm">Return to main page</a>
      </div>
      <div>
        <a href="/ranking" class="btn mb-3 abm">Go to the ranking</a>
      </div>
      <div>
        <a href="/edition" class="btn abm">Edit user</a>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Notebook\Juego\resources\views/profile.blade.php ENDPATH**/ ?>