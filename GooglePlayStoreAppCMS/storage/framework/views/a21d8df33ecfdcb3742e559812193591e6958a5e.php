<div class="card">
    <div class="card-block">
        <?php /* Sidebar Show Ads Here */ ?>
        <a class="btn btn-md btn-danger btn-block animated infinite pulse" href="<?php echo e(route('frontend.submitapps.index')); ?>" title="<?php echo e(trans('frontend.common.submit_apps')); ?>">
            <i class="fa fa-android"></i> <?php echo e(trans('frontend.common.submit_apps')); ?>

        </a>
    </div>
</div>

<div>
    <?php echo showAds('sidebar'); ?>

</div>

<?php echo $__env->make('frontend.layouts.common.partials.featured-category', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php if(isset($popularCategories) && count($popularCategories) > 0): ?>
    <div class="card">
        <div class="card-header">
            <div>
                <a href="#"><i class="fa fa-eye">
                              </i> <?php echo e(trans('frontend.common.most_popular_cat')); ?></a>
            </div>
        </div>
        <div class="card-block">
                <ul class="list-unstyled text-left">
                    <?php foreach($popularCategories as $cat): ?>
                        <li>
                            <a href="<?php echo e($cat->category->detail_url); ?>" class="btn btn-block btn-icon btn-outline-success m-r-xs m-b-xs">
                              <i class="fa fa-<?php echo e(@$cat->category->icon != '' ? $cat->category->icon : 'android'); ?>"></i> <span>
                                <?php echo e($cat->category->title); ?> 
                              </span> <small>(<?php echo e(countFormat($cat->views)); ?>)</small>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>
<?php endif; ?>


<?php if(!isset($is_index)): ?>
    <?php if(isset($popularApps) && count($popularApps) > 0): ?>
        <div class="card">
            <div class="card-header">
                <div>
                    <i class="fa fa-eye"></i> <?php echo e(trans('frontend.common.most_popular_apps')); ?>

                </div>
            </div>
            <div class="card-block">
                <?php foreach($popularApps as $item): ?>
                    <div class="card card-block">
                        <div class="profile-timeline-header">
                            <a href="<?php echo e($item->app->detail_url); ?>" title="<?php echo e($item->app->title); ?>" class="profile-timeline-user">
                                <img  src="<?php echo e(isset($item->app->appImage) ? $item->app->appImage->image_link : $item->app->image_url); ?>" alt="<?php echo e($item->app->title); ?>" class="img-rounded">
                            </a>
                            <div class="profile-timeline-user-details">
                                  <a href="<?php echo e($item->app->detail_url); ?>" title="<?php echo e($item->app->title); ?>" class="bold">
                                    <?php echo e($item->app->title); ?>

                                  </a>
                                <br>
                                <span class="text-muted small">
                                    <?php echo e(trans('frontend.app_detail.views')); ?> (<?php echo e(countFormat($item->views)); ?>)
                                </span>
                            </div>
                            <div class="profile-timeline-content">
                                <p>
                                    <?php echo e(truncate($item->app->description,70)); ?>

                                </p>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>

