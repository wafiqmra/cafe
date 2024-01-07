<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/edit.css')); ?>">
    <title>Edit Booking</title>
</head>
<body>
    <div id="container">
    
        <form action="<?php echo e(route('booking.update', ['booking' => $booking])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="input-container" style="left: 220px; top: 390px;">
                <label for="party_size">Party Size:</label>
                <input type="number" id="party_size" name="party_size" value="<?php echo e($booking->party_size); ?>">
            </div>

            <div class="input-container" style="left: 589px; top: 390px;">
                <label for="tanggal">Booking Date:</label>
                <input type="date" id="tanggal" name="tanggal" value="<?php echo e($booking->tanggal); ?>">
            </div>

            <div class="input-container" style="left: 958px; top: 390px;">
                <label for="waktu">Booking Time:</label>
                <input type="time" id="waktu" name="waktu" value="<?php echo e($booking->waktu); ?>">
            </div>

            <div class="input-container" style="left: 220px; top: 500px;">
                <label for="nama">Name:</label>
                <input type="text" id="nama" name="nama" value="<?php echo e($booking->nama); ?>">
            </div>

            <div class="input-container" style="left: 589px; top: 500px;">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo e($booking->email); ?>">
            </div>

            <div class="input-container" style="left: 958px; top: 500px;">
                <label for="noTelp">Phone Number:</label>
                <input type="text" id="noTelp" name="noTelp" value="<?php echo e($booking->noTelp); ?>">
            </div>

            <button type="submit" id="reserve-now">Update Reservation</button>
        </form>
        
        <div id="reservation-title">
            <p>Edit Reservation</p>
        </div>

        <div id="separator"></div>
    </div>
</body>
</html><?php /**PATH E:\laragon\laragon\www\mainpage\resources\views/booking/edit.blade.php ENDPATH**/ ?>