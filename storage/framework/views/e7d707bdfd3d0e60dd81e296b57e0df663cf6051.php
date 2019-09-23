<?php if(isset($popularApps) && count($popularApps) > 0): ?>
    <div class="card">
        <div class="card-header">
            <div class="pull-left">
               <?php echo e(trans('frontend.common.most_popular')); ?>

            </div>
        </div>
        <div class="card-block">
            <?php foreach($popularApps as $item): ?>
                <?php if($item->app): ?>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div class="card">
                            <a href="<?php echo e($item->app->detail_url); ?>" title="<?php echo e($item->app->title); ?>">
                                <img  class="card-img-top img-fluid" src="<?php echo e(firefoxImage(isset($item->app->appImage) ? $item->app->appImage->image_link : $item->app->image_url)); ?>" alt="<?php echo e($item->app->title); ?>" style="margin: 0 auto;padding: 5px;border-radius: 15px;">
                            </a>
                            <div class="card-block" style="padding: .5rem;background: #fff;white-space: nowrap;overflow: hidden;width: 95%;">
                            <p>
                                    <a href="<?php echo e($item->app->detail_url); ?>" title="<?php echo e($item->app->title); ?>"><strong><?php echo e($item->app->title); ?></strong></a>
                                </p>
                                <span class="my-ratings" data-ratings='{"max": 5, "value": "<?php echo e($item->app->ratings); ?>" }'></span>
                                <small class="pull-left">
                                    <a href="#" style="color: #263238;" title="$item->app->developer_name">
                                        <?php echo e(truncate($item->app->developer_name,12)); ?>

                                    </a>
                                </small>
                                <small class="text-success pull-right" >
                                    <a href="<?php echo e($item->app->detail_url); ?>" title="<?php echo e($item->app->title); ?>"> <i class="fa fa-download"></i></a>
                                </small>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>