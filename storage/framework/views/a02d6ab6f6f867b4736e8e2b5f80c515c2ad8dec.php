<form action="<?php echo e(route('pilots.store')); ?>" method="POST">
	<?php echo csrf_field(); ?>

	<input type="text" name="first_name" placeholder="First Name" required>

	<input type="text" name="last_name" placeholder="Last Name" required>

	<input type="text" name="email" placeholder="Email" required>

	<select name="certification_id" id="certification_id">
	<?php $__currentLoopData = $cert_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		
		<option value="<?php echo e($type->id); ?>"><?php echo e($type->certification_name); ?></option>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</select>

	<input type="submit">
</form><?php /**PATH /Users/dbrown/Code/drone-app/resources/views/pilot/create.blade.php ENDPATH**/ ?>