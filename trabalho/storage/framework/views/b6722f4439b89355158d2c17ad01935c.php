<?php
  $error_number = 403;
?>

<?php $__env->startSection('title'); ?>
  Forbidden.
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
  <?php
    $default_error_message = "Please <a href='javascript:history.back()''>go back</a> or return to <a href='".url('')."'>our homepage</a>.";
  ?>
  <?php echo isset($exception)? ($exception->getMessage()?e($exception->getMessage()):$default_error_message): $default_error_message; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('errors.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alisha/myApps/trabalho/resources/views/errors/403.blade.php ENDPATH**/ ?>