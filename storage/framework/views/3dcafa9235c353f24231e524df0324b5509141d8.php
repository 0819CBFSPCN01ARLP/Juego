<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    
    <link rel="stylesheet" href="css/master.css" />
    <?php echo $__env->yieldContent('head'); ?>
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <button
        class="navbar-toggler nabvar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <div class="navbar-nav mr-auto">

          <a class="nav-item nav-link" href="/home">Home </a>
          <a class="nav-item nav-link" href="/contact">Contact</a>
          <a class="nav-item nav-link" href="/faq">FAQ</a>
          <?php if(auth()->guard()->guest()): ?>
          <a class="nav-item nav-link" href="/register">Register</a>
          <a class="nav-item nav-link" href="/login">Login</a>
        </div>
      <?php else: ?>
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="/profile">Profile</a>
          <a class="nav-item nav-link" href="/abm">ABM</a>
        <a class="nav-item nav-link" href="<?php echo e(route('logout')); ?>"
         onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
            <?php echo e(__('Logout')); ?>

        </a>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
        </div>
      <?php endif; ?>
      </div>
    </nav>
<?php echo $__env->yieldContent('content'); ?>
  </body>
</html>
<?php /**PATH C:\Users\Notebook\Juego\resources\views/layouts/base.blade.php ENDPATH**/ ?>