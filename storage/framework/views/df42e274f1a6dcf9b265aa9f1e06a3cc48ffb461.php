<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <a href="">404 - Page Not Found</a>
    </div>
    <div class="card-block">
    	<h5 class="text-center">I'm sorry, we can't find what you're looking for.</h5>
		<p class="text-xs-center">
			Please check our homepage link: <a href="<?php echo e(url('/')); ?>" title="<?php echo e($configuration['cms_name']); ?>"><?php echo e($configuration['cms_name']); ?></a>
		</p>
       <hr />
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>