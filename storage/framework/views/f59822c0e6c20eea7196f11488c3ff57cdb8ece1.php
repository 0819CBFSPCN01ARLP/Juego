<?php $__env->startSection('title',"Login"); ?>

<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="/css/login.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="container">
  <section class="login-box text-center">
    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>

      <div>
        <label for="email"><?php echo e(__('E-Mail Address')); ?></label>
<input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?> username" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
  <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
      <span class="invalid-feedback" role="alert">
          <strong><?php echo e($message); ?></strong>
      </span>
  <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
      </div>

      <div>
        <label for="password"><?php echo e(__('Password')); ?></label>
        <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?> password" name="password" required autocomplete="current-password">

        <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
      </div>

      <div>
        <button type="submit" class="button-login">
            <?php echo e(__('Login')); ?>

        </button>
      </div>

      <div>
        <div class="form-check">
        <input class="mb-1 mt-1" name="remember" type="checkbox" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
      <label class="form-check-label" for="remember">
          <?php echo e(__('Remember Me')); ?>

      </label>
      </div>
      <?php if(Route::has('password.request')): ?>
          <a class="btn btn-link prueba " href="<?php echo e(route('password.request')); ?>">
              <?php echo e(__('Forgot Your Password?')); ?>

          </a>
      <?php endif; ?>
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lucia\Desktop\Digital House\UltimaVersion\resources\views/auth/login.blade.php ENDPATH**/ ?>