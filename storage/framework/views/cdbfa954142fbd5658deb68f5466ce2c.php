<!-- resources/views/home/index.blade.php -->



<?php $__env->startSection('pastries'); ?>
    <?php $__currentLoopData = $pastries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pastry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="pastry">
            <?php if($pastry->id === 1): ?>
                <div class="pastry-content1">
                    <img src="<?php echo e(asset('images/lemon.jpeg')); ?>" alt="Lemon Pastry">
                    <h3><?php echo e($pastry->pastry_name); ?></h3>
                    <p>Price: Rp <?php echo e($pastry->price); ?></p>
                </div>
            <?php elseif($pastry->id === 2): ?>
                <div class="pastry-content2">
                    <img src="<?php echo e(asset('images/pink.jpeg')); ?>" alt="Strawberry Pastry">
                    <h3><?php echo e($pastry->pastry_name); ?></h3>
                    <p>Price: Rp <?php echo e($pastry->price); ?></p>
                </div>
            <?php elseif($pastry->id === 3): ?>
                <div class="pastry-content3">
                    <img src="<?php echo e(asset('images/croissant.jpeg')); ?>" alt="Strawberry Pastry">
                    <h3><?php echo e($pastry->pastry_name); ?></h3>
                    <p>Price: Rp <?php echo e($pastry->price); ?></p>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\laragon\www\mainpage\resources\views/home/pastries.blade.php ENDPATH**/ ?>