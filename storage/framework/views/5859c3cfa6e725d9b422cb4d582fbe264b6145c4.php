<?php $__env->startSection('content'); ?>

	<h1>Mission List</h1>
	<ul>

	<?php $__currentLoopData = $operations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><?php echo e($operation->mission_name); ?> - <?php echo e($operation->location); ?> - <?php echo e($operation->start_date); ?> - <?php echo e($operation->end_date); ?></li>

			<ul>
			<?php $__currentLoopData = $operation->missions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><?php echo e($mission->pilot->full_name); ?> : <?php echo e($mission->drone->nickname); ?></li>

			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</ul>

	<a href="<?php echo e(route('missions.create')); ?>" class="mx-3">Add Missions</a>

	<a href="<?php echo e(route('missions.addstaff')); ?>" class="mx-3">Add Pilots &amp; Drones to a Mission</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dbrown/Code/drone-app/resources/views/mission/missions.blade.php ENDPATH**/ ?>