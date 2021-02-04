<?php $__env->startSection('content'); ?>

	<h1>Add Staff &amp; Drones to the Mission</h1>

	<form action="<?php echo e(route('missions.addstaffStore')); ?>" method="POST">
		<?php echo csrf_field(); ?>

		<select name="mission_id" id="mission_id" required>
			<option value="0">Select A Mission</option>
		<?php $__currentLoopData = $missions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option value="<?php echo e($mission->id); ?>"><?php echo e($mission->mission_name); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select>

		<select name="pilot_id" id="pilot_id" required>
			<option value="0">Selet A Pilot</option>
		<?php $__currentLoopData = $pilots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pilot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option value="<?php echo e($pilot->id); ?>"><?php echo e($pilot->full_name); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select>

		<select name="drone_id" id="drone_id" required>
			<option value="0">Selet A Drone</option>
		<?php $__currentLoopData = $drones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option value="<?php echo e($drone->id); ?>"><?php echo e($drone->nickname); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select>


		<input type="submit">
	</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dbrown/Code/drone-app/resources/views/mission/addstaff.blade.php ENDPATH**/ ?>