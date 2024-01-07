
<?php $__env->startSection('content'); ?>
    <div class="container">
        <p class="text">Selamat Datang di <span class="highlight">Solasta</span>!</p>
    </div>
    <section class="image-section1">
        <img src="<?php echo e(asset('images/lemon.jpeg')); ?>" alt="lemon">
        <p>Tempat terbaik untuk menikmati  <br>
            berbagai macam <em>pastry</em></p>
    </section>
    <section class="image-section2">
        <img src="<?php echo e(asset('images/strawberry.jpeg')); ?>" alt="strawberry">
        <p>Selalu membawa <br>
        kehangatan</p>
    </section>
    <section class="image-section3">
        <img src="<?php echo e(asset('images/bread.jpeg')); ?>" alt="bread" >
    </section>
    <section class="image-section4">
        <img src="<?php echo e(asset('images/afternoon.jpeg')); ?>" alt="bread" >
    </section>
    <section class="image-section5">
        <img src="<?php echo e(asset('images/view.jpeg')); ?>" alt="bread" >
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\laragon\www\mainpage\resources\views/home/main.blade.php ENDPATH**/ ?>