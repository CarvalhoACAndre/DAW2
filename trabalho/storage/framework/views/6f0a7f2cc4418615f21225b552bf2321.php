<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10 Shopping Cart Example - LaravelTuts.com</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/71b7145720.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>
<body>
  

<div class="container mt-4">
    <?php if(session('success')): ?>
        <div class="alert alert-success">
          <?php echo e(session('success')); ?>

        </div> 
    <?php endif; ?>
    <?php echo $__env->yieldContent('content'); ?>
</div>
  
<?php echo $__env->yieldContent('scripts'); ?>
</body>
</html><?php /**PATH /home/alisha/myApps/trabalho/resources/views/product/shop.blade.php ENDPATH**/ ?>