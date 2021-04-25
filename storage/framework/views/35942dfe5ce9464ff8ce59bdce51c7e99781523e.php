

<?php $__env->startSection('title', 'Detail of the task'); ?>

<?php $__env->startSection('main'); ?>
	<div class="task-list">
        <p><?php echo e($task->title); ?></p>
		<p><?php echo e($task->description); ?></p>
		<p><?php echo e($task->created_at->format('d M Y')); ?></p>

	</div>
	<div><a href="/task/delete/<?php echo e($task->id); ?>">Supprimer</a></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lea\laravel-test-version\resources\views/show.blade.php ENDPATH**/ ?>