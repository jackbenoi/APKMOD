<div class="content-footer">
    <nav class="footer-right">
        <ul class="nav">
            <li>
                <a href="<?php echo e(route('frontend.contact')); ?>"><i class="fa fa-envelope"></i> <?php echo e(trans('frontend.contact_us.title')); ?></a>
            </li>
            <li class="hidden-md-down">
                <a href="<?php echo e(route('frontend.rss')); ?>"  title="<?php echo e(trans('frontend.index.rss_feeds')); ?>">
                    <i class="fa fa-rss"></i>  <?php echo e(trans('frontend.index.rss_feeds')); ?>

                </a>
            </li>
            <li class="hidden-md-down">
                <a href="<?php echo e(url('sitemap/sitemap.xml')); ?>"  title="<?php echo e(trans('frontend.index.sitemap')); ?>">
                    <i class="fa fa-sitemap"></i>  <?php echo e(trans('frontend.index.sitemap')); ?>

                </a>
            </li>
        </ul>
    </nav>
    <nav class="footer-left">
        <ul class="nav">
            <li>
                <a href="<?php echo e(url('/')); ?>">
                    <strong>
                    <?php echo trans('frontend.common.copyright'); ?> <i class="fa fa-copyright"></i> <?php echo e(Carbon\Carbon::now()->format('Y')); ?> - <?php echo e($configuration['site_title']); ?></strong>
                </a>
            </li>

            <?php if(isset($pages)): ?>
                <?php foreach($pages as  $page): ?>
                    <li class="hidden-md-down">
                        <a href="<?php echo e($page['detail_url']); ?>" title="<?php echo e($page['title']); ?>"><?php echo e($page['title']); ?></a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
            <li class="hidden-md-down">
                <a href="<?php echo e(route('frontend.index.report-app')); ?>"  title="<?php echo e(trans('frontend.report_title')); ?>">
                    <i class="fa fa-warning"></i>  <?php echo e(trans('frontend.report_title')); ?>

                </a>
            </li>
            <?php if(isset($configuration['enable_submit_apps'])): ?>
                <li>
                    <a href="<?php echo e(route('frontend.submitapps.index')); ?>" title="<?php echo e(trans('frontend.common.submit_apps')); ?>">
                        <i class="fa fa-android"></i> <?php echo e(trans('frontend.common.submit_apps')); ?>

                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</div>