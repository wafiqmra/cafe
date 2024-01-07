<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Fullscreen Overlay Navigation | CodingNepal</title>
      <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/homepage.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/pastry.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/drinks.css')); ?>">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <input type="checkbox" id="active">
      <label for="active" class="menu-btn"><i class="fas fa-bars"></i></label>
      <div class="wrapper">
         <ul>
            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
            <li><a href="<?php echo e(route('pastries.index')); ?>">Pastries</a></li>
            <li><a href="<?php echo e(route('drinks.index')); ?>">Drinks</a></li>
            <li><a href="<?php echo e(route('booking.index')); ?>">Booking</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Logout</a></li>
         </ul>
      </div>
      <?php echo $__env->yieldContent('home.content'); ?>
      <?php echo $__env->yieldContent('home.pastries'); ?>
      <?php echo $__env->yieldContent('home.drinks'); ?>
      </div>
   </body>
</html><?php /**PATH E:\laragon\laragon\www\mainpage\resources\views/home.blade.php ENDPATH**/ ?>