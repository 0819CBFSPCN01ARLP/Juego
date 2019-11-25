<?php $__env->startSection('title',"Register"); ?>

<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="/css/registro.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <section class="container col-lg-8 col-md-8 col-sm-8 login-box mt-5">
  <form
    action=""
    method="post"
    name="formulario"
    id="formulario"
    autocomplete="off"
    enctype="multipart/form-data"

  >
<fieldset>
  <div class="form-group col-sm-12 ">
    <label>Username</label>
    <input type="text" id="nombre" name="name" class="form-control" placeholder="write your name"
      value="" required/>

      <!-- DEVOLUCION ERROR NOMBRE-->
        
        </p>

  </div>
  <div class="form-group col-sm-12">
    <label>Email</label>
    <input type="text" id="email" name="mail" class="form-control" placeholder="your-email@example.com"
    value="" required/>

      <!-- DEVOLUCION ERROR EMAIL-->
      
      </p>

  </div>
  <div class="form-group col-sm-12">
    <label>Password</label>
    <input type="password" id="pass" name="pass" class="form-control" placeholder="not less than 6 characters" required/>

      <!-- DEVOLUCION ERROR PASSWORD-->
      
      </p>
    <label>Picture</label>
      <input type="file" name="avatar" />
    <div class="text-center mt-1">
    <button type="submit" class="btn" >Sign up</button>
  </div>
  </fieldset>
</form>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Notebook\Juego\resources\views/register.blade.php ENDPATH**/ ?>