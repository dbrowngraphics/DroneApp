<form action="<?php echo e(route('drones.store')); ?>" method="POST">
	<?php echo csrf_field(); ?>

	<input type="text" name="nickname" placeholder="Nickname" required>

	<input type="text" name="make" placeholder="Make" required>

	<input type="text" name="model" placeholder="Model" required>

	<input type="text" name="serial_number" placeholder="Serial Number" required>

	<input type="year" name="year" placeholder="Year" required>

	<input type="submit">
</form><?php /**PATH /Users/dbrown/Code/drone-app/resources/views/drone/create.blade.php ENDPATH**/ ?>