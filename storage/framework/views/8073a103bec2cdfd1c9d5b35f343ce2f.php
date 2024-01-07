
<?php $__env->startSection('show'); ?>
    <div class="address-text">Address</div>
    <div class="open-time-text">Open Time</div>
    <div class="background-box"></div>
    <div class="border-box"></div>

    <div class="details-text">Name: <?php echo e($reservationData['nama']); ?></div>
    <div class="details-text email">Email: <?php echo e($reservationData['email']); ?></div>
    <div class="details-text phone">Phone Number: <?php echo e($reservationData['noTelp']); ?></div>
    <div class="details-text date">Date: <?php echo e($reservationData['tanggal']); ?></div>
    <div class="details-text time">Time: <?php echo e($reservationData['waktu']); ?></div>
    <div class="details-text party-size">Party Size: <?php echo e($reservationData['party_size']); ?></div>

    <div class="additional-info-text">9.00 AM - 9.00 PM</div>
    <div class="location-text">Jl. Sukasenang IV<br />Bandung - Indonesia</div>
    <div class="thank-you-text">Thank you for booking!</div>
    <div class="reservation-details-text">Reservation details:</div>
    <form id="cancelForm" action="<?php echo e(route('booking.show', ['booking' => $reservationData['id']])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <div class="cancel-reservation-btn" onclick="showCancelPopup()">Cancel Reservation</div>
    </form>

    <!-- Cancel Popup -->
    <div class="cancel-popup" id="cancelPopup">
        <div class="popup-content">
            <p>Are you sure you want to cancel the reservation?</p>
            <button class="confirm-btn" onclick="cancelReservation()">Yes, Cancel</button>
            <button class="cancel-btn" onclick="hideCancelPopup()">No, Keep Reservation</button>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\laragon\www\mainpage\resources\views/booking/show.blade.php ENDPATH**/ ?>