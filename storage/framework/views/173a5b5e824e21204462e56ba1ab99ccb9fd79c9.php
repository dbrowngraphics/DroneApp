<?php $__env->startSection('content'); ?>

	<h1>Pilots List</h1>
	<ul>

	<?php $__currentLoopData = $pilots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pilot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><?php echo e($pilot->full_name); ?> - <?php echo e($pilot->email); ?> - <?php echo e($pilot->certification->certification_name); ?></li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</ul>

	<a href="<?php echo e(route('pilots.create')); ?>">Add Pilots</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dbrown/Code/drone-app/resources/views/pilot/pilots.blade.php ENDPATH**/ ?>