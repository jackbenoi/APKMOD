<nav class="header-secondary navbar bg-faded shadow">
    <div class="navbar-collapse">
        <a class="navbar-heading hidden-md-down"  href="<?php echo e(url('/')); ?>">
            <span><?php echo e($configuration['cms_description']); ?></span>
        </a>
        <ul class="nav navbar-nav pull-xs-right">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i> <?php echo e(trans('frontend.common.home')); ?></a>
            </li>

            <?php if(isset($parentCatCollections)): ?>
                <?php foreach($parentCatCollections as $category): ?>
                    <div class="nav-item nav-link dropdown">
                        <i class="fa fa-<?php echo e(@$category->icon != '' ? $category->icon : 'android'); ?>"></i> <a href="<?php echo e($category->detail_url); ?>" title="<?php echo e($category->title); ?>"> <?php echo e($category->title); ?></a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </ul>
    </div>
</nav>