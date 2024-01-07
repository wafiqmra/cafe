<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Fullscreen Overlay Navigation | CodingNepal</title>
      <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/pastry.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/drinks.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/show.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/booking.css')); ?>">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
   <?php echo $__env->yieldContent('booking'); ?>
   <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-flex" role="search">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button class="btn btn-danger" type="submit">Logout</button>
      </form>
      <input type="checkbox" id="active">
      <label for="active" class="menu-btn"><i class="fas fa-bars"></i></label>
      <div class="wrapper">
         <ul>
            <li><a href="<?php echo e(route('home.index')); ?>">Home</a></li>
            <li><a href="<?php echo e(route('pastries.index')); ?>">Pastries</a></li>
            <li><a href="<?php echo e(route('drinks.index')); ?>">Drinks</a></li>
            <li><a href="<?php echo e(route('booking.index')); ?>">Booking</a></li>
            <li><a href="#">About</a></li>
         </ul>
      </div>
      <?php echo $__env->yieldContent('content'); ?>
      <?php echo $__env->yieldContent('pastries'); ?>
      <?php echo $__env->yieldContent('drinks'); ?>
      <?php echo $__env->yieldContent('show'); ?>
   </body>
</html><?php /**PATH E:\laragon\laragon\www\mainpage\resources\views/booking/layout.blade.php ENDPATH**/ ?>