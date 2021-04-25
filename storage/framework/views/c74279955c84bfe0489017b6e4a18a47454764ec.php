

<?php $__env->startSection('title', 'Detail of the task'); ?>

<?php $__env->startSection('main'); ?>
	<div class="task-list">
        <p><?php echo e($detail->title); ?></p>
		<p><?php echo e($detail->description); ?></p>
		<p><?php echo e($detail->created_at->format('d M Y')); ?></p>

	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lea\laravel-test-version\resources\views/detail.blade.php ENDPATH**/ ?>