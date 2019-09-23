<div class="content-footer">
    
    <nav class="footer-left">
        <ul class="nav">
            <li>
                <a href="<?php echo e(url('/')); ?>">
                    <strong>
                    <?php echo trans('frontend.common.copyright'); ?> <i class="fa fa-copyright"></i> <?php echo e(Carbon\Carbon::now()->format('Y')); ?> - <?php echo e($configuration['site_title']); ?></strong>
                </a>
            </li>
        </ul>
    </nav>
</div>