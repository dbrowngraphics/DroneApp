<?php $__env->startSection('content'); ?>

	<form action="<?php echo e(route('missions.store')); ?>" method="POST">
		<?php echo csrf_field(); ?>

		<input type="text" name="mission_name" placeholder="Mission Name" required>

		<input type="text" name="location" placeholder="Location" required>

		<input type="date" name="start_date" required>

		<input type="date" name="end_date" required>

		<textarea rows="5" name="mission_details" placeholder="Mission Details"></textarea>


		<input type="submit">
	</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dbrown/Code/drone-app/resources/views/mission/create.blade.php ENDPATH**/ ?>