
<?php $__env->startSection('drinks'); ?>
    <?php $__currentLoopData = $drinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="drinks">
                <?php if($drink->id === 1): ?>
                    <div class="drinks-content1">
                        <img src="<?php echo e(asset('images/tiramisu.jpeg')); ?>">
                        <h3><?php echo e($drink->drinks_name); ?></h3>
                        <p>Price: Rp <?php echo e(number_format($drink->price, 0, ',', '.')); ?></p>
                    </div>
                    <?php elseif($drink->id === 2): ?>
                    <div class="drinks-content2">
                        <img src="<?php echo e(asset('images/americano.jpeg')); ?>">
                        <h3><?php echo e($drink->drinks_name); ?></h3>
                        <p>Price: Rp <?php echo e(number_format($drink->price, 0, ',', '.')); ?></p>
                    </div>
                    <?php elseif($drink->id === 3): ?>
                    <div class="drinks-content3">
                        <img src="<?php echo e(asset('images/mango.jpeg')); ?>">
                        <h3><?php echo e($drink->drinks_name); ?></h3>
                        <p>Price: Rp <?php echo e(number_format($drink->price, 0, ',', '.')); ?></p>
                    </div>
                <?php endif; ?>
            </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\laragon\www\mainpage\resources\views/home/drinks.blade.php ENDPATH**/ ?>