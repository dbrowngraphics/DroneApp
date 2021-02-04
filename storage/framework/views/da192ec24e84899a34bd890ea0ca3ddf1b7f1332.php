<?php $__env->startSection('content'); ?>

	<h1>Drone List</h1>
	<ul>

	<?php $__currentLoopData = $drones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><?php echo e($drone->nickname); ?>: <?php echo e($drone->make); ?> - <?php echo e($drone->model); ?> - <?php echo e($drone->serial_number); ?> - <?php echo e($drone->year); ?></li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</ul>

	<a href="<?php echo e(route('drones.create')); ?>">Add Drones</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dbrown/Code/drone-app/resources/views/drone/drones.blade.php ENDPATH**/ ?>