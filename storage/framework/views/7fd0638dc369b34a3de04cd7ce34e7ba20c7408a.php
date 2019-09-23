<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('frontend.index.partials.editorspick', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend.index.partials.popular-apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend.index.partials.newest', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>