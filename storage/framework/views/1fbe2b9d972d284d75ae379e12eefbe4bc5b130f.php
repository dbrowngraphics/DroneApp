<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Drone App</title>

        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       </head>
    <body>
    	<div>
    		<a href="<?php echo e(url('pilots')); ?>" class="btn">Pilots</a>
    		<a href="<?php echo e(url('drones')); ?>" class="btn">Drones</a>
    		<a href="<?php echo e(url('missions')); ?>" class="btn">Missions</a>
    	</div>


    	<?php echo $__env->yieldContent('content'); ?>

    </body>

</html><?php /**PATH /Users/dbrown/Code/drone-app/resources/views/layouts/master.blade.php ENDPATH**/ ?>