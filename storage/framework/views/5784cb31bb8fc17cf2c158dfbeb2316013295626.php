<?php if(isset($featuredItems) && !$featuredItems->isEmpty()): ?>
    <div class="card">
        <div class="card-header">
            <div class="pull-left">
                <a href=""><?php echo e(trans('frontend.index.editors_pick')); ?> <i class="fa fa-angle-double-right"></i></a>
            </div>
            <?php if(!isset($isViewAll)): ?>
            <div class="pull-right">
                <a href="<?php echo e(route('frontend.index.editors-pick')); ?>" > <?php echo e(trans('frontend.common.see_more')); ?></a>
            </div>
            <?php endif; ?>
        </div>
        <div class="card-block">
            <?php echo $__env->make('frontend.index.partials.grid',['items' => $featuredItems], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <?php if(isset($isViewAll)): ?>
            <div>
                <?php echo $__env->make('pagination.default', ['paginate' => $featuredItems], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>