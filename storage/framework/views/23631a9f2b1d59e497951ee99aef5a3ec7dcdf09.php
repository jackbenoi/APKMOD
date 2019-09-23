<?php if(isset($newestItemLists) && !$newestItemLists->isEmpty()): ?>
    <div class="card">
        <div class="card-header">
            <div class="pull-left">
                <?php echo e(trans('frontend.index.newly_added')); ?>

            </div>

            <?php if(!isset($isViewAll)): ?>
            <div class="pull-right">
                <a href="<?php echo e(route('frontend.index.newest-app')); ?>" > <?php echo e(trans('frontend.common.see_more')); ?></a>
            </div>
            <?php endif; ?>
        </div>
        <div class="card-block">
            <?php echo $__env->make('frontend.index.partials.grid',['items' => $newestItemLists], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>

<?php else: ?>
    <?php echo $__env->make('frontend.index.partials.no-setup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>





<?php if(isset($newestSubmittedAppLists) && !$newestSubmittedAppLists->isEmpty()): ?>
    <div class="card">
        <div class="card-header">
            <div class="pull-left">
                <?php echo e(trans('frontend.index.newly_submit')); ?>

            </div>
        </div>
        <div class="card-block">
            <?php echo $__env->make('frontend.index.partials.grid',['items' => $newestSubmittedAppLists], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
<?php endif; ?>