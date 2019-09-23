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
                <img src="<?php echo e($image_logo); ?>" class="avatar img-circle" alt="user" title="user">
            </a>
            <!-- /logo -->
        </div>
        <?php if($image_logo): ?>
            <a class="brand-logo navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="<?php echo e(url('/')); ?>">
                <img src="<?php echo e($image_logo); ?>" class="avatar" style="max-height: 30px;" alt="<?php echo e(@$configuration['cms_name']); ?>" title="<?php echo e(@$configuration['cms_name']); ?>">
            </a>
        <?php else: ?>
            <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="<?php echo e(url('/')); ?>">
                <span><?php echo e(@$configuration['cms_name']); ?></span>
            </a>
        <?php endif; ?>
        <?php echo $__env->make('frontend.layouts.common.partials.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="navbar-item nav navbar-nav">

            <?php if(isset($dbLocale)): ?>
                <div class="nav-item nav-link dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <span><i class="fa fa-language"></i> <?php echo e(trans('frontend.common.translate')); ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <?php foreach($dbLocale as $locale): ?>
                            <a class="dropdown-item text-uppercase" href="<?php echo e(route('frontend.translate',$locale)); ?>"><?php echo e($locale); ?></a>
                        <?php endforeach; ?>
                    </div>

                </div>
            <?php endif; ?>
            
            	<?php if(isset($userDetail)): ?>
	                <div class="nav-item nav-link dropdown">
	                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
	                        <span> <?php echo e($userDetail->full_name); ?></span> <i class="fa fa-chevron-down"></i>
	                    </a>
	                    <div class="dropdown-menu dropdown-menu-right">
                            <?php if(isset($isAdmin) && $isAdmin): ?>
	                        <a class="dropdown-item" href="<?php echo e(route('backend.index.index')); ?>"><i class="fa fa-lock"></i> <?php echo e(trans('frontend.header.admin')); ?></a>
                            <?php endif; ?>
	                        <?php if(isset($isSuperAdmin) && $isSuperAdmin): ?>
	                            <a class="dropdown-item" href="<?php echo e(route('backend.index.index')); ?>"><i class="fa fa-lock"></i> <?php echo e(trans('frontend.header.admin')); ?></a>
	                        <?php endif; ?>
	                        <?php if(isset($configuration['enable_submit_apps'])): ?>
	                            <a class="dropdown-item" href="<?php echo e(route('frontend.submitapps.list')); ?>"><i class="fa fa-android"></i> <?php echo e(trans('frontend.header.submit_apps')); ?></a>
	                        <?php endif; ?>
	                        <a class="dropdown-item" href="<?php echo e(route('frontend.profile')); ?>"><i class="fa fa-user"></i> <?php echo e(trans('frontend.header.my_profile')); ?></a>
	                        <a class="dropdown-item" href="<?php echo e(route('frontend.logout')); ?>"><i class="fa fa-sign-out"></i> <?php echo e(trans('frontend.header.logout')); ?></a>
	                    </div>
	                </div>
                <?php else: ?>
                    <div class="nav-item nav-link dropdown">
                        <a href="<?php echo e(route('frontend.login')); ?>" class="dropdown-toggle">
                            <i class="fa fa-user"></i> <span> <?php echo e(trans('frontend.header.login_register')); ?></span>
                        </a>
                    </div>
                <?php endif; ?>
        </div>
    </div>
</nav>