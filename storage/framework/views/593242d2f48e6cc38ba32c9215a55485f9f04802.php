<nav class="header navbar">
    <div class="header-inner">
        <div class="navbar-item navbar-spacer-right brand hidden-lg-up">
            <!-- toggle offscreen menu -->
            <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen">
            <i class="material-icons">menu</i>
            </a>
            <!-- /toggle offscreen menu -->
            <!-- logo -->
            <a class="brand-logo hidden-xs-down">
                <img src="images/logo_white.png" alt="logo"/>
            </a>
            <!-- /logo -->
        </div>
        <?php if($image_logo): ?>
            <a class="brand-logo navbar-item navbar-spacer-right navbar-heading hidden-md-down" target="_blank" href="<?php echo e(url('/')); ?>">
                <img src="<?php echo e($image_logo); ?>" class="avatar" style="max-height: 25px;" alt="<?php echo e(@$configuration['cms_name']); ?>" title="<?php echo e(@$configuration['cms_name']); ?>">
            </a>
        <?php else: ?>
            <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="<?php echo e(url('/')); ?>">
                <span><?php echo e(@$configuration['cms_name']); ?></span>
            </a>
        <?php endif; ?>
        <?php if(isset($userDetail)): ?>
            <div class="navbar-item nav navbar-nav">
                <div class="nav-item nav-link dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i> <span> Welcome, <?php echo e($userDetail->full_name); ?> </span> <i class="fa fa-caret-down"></i> 
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="<?php echo e(route('backend.profile')); ?>"><?php echo e(trans('frontend.header.my_profile')); ?></a>
                        <a class="dropdown-item" href="<?php echo e(route('backend.logout')); ?>"><?php echo e(trans('frontend.header.logout')); ?></a>
                    </div>
                </div>
                
            </div>
        <?php endif; ?>

    </div>
</nav>