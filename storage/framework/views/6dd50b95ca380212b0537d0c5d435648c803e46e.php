<?php $__env->startSection('title',"Index"); ?>

<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="/css/perfil.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="container text-center col-lg-4 col-md-6 col-sm-10 col-xs-10 mt-3" id="puntaje">
  <div class="card text-center">
    <h3>Edition</h3>
    <div class="card-body">
      <div>
        <label for="username">New Username</label>
        <input type="text" name="newName" class="username" value=""/>
      </div>
      <form action="" method="post">
      <div>
        <label for="password">New Password</label>
        <input type="password" name="newPass" class="password" />
      </div>
      <div>
        <label>New picture</label>
          <input type="file" name="newAvatar" /> <br><br>
      </div>
      </form>
    </div>
    <input type="submit" class="button-login" value="Save changes" />
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Notebook\Juego\resources\views/edition.blade.php ENDPATH**/ ?>