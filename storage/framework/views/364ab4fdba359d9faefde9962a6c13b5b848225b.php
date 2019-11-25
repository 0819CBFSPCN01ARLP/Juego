<?php $__env->startSection('title',"Login"); ?>

<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="/css/login.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="container">
  <section class="login-box text-center">
    <div class="col-10 img-user" id="logo">
      <img src="img/hombre.jpg" alt="" />
    </div>
      <form action="" method="post">

        

        </p>

      <div>
        <label for="username">Username</label>
        <input type="text" name="name" class="username"  required
        value=""/>
        <!-- DEVOLUCION ERROR NOMBRE-->

          

          </p>

      </div>
      <div>
        <label for="password">Password</label>
        <input type="password" name="pass" class="password" />
        <!-- DEVOLUCION ERROR PASSWORD-->

        
        </p>
      </div>
      <div>
        <input type="submit" class="button-login" value="Login" />
      </div>
      <div>
      <label>
        <span style="color:white">Remember me</span>
        <input class="mb-1 mt-1" name="remember-me" type="checkbox" id="remember-me">
      </label>
      <a href="/register">Don't have an account?</a>
      <br />
      <a href="/contact">Forgot your password?</a>
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Notebook\Juego\resources\views/login.blade.php ENDPATH**/ ?>