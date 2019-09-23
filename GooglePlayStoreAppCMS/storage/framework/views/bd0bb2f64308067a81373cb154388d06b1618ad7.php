<!doctype html>
<html lang="en">
    <head>
        
        <?php echo $__env->make('frontend.layouts.common.meta-tags', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <link rel="stylesheet" href="<?php echo e(elixit('assets/css/app.css')); ?>"/>
        <link rel="stylesheet" href="<?php echo e(elixit('assets/css/common.css')); ?>"/>

        <?php if(isset($configuration['enable_rtl_support']) && $configuration['enable_rtl_support'] == 'yes'): ?>
            <link rel="stylesheet" href="<?php echo e(elixit('assets/css/rtl/app.css')); ?>"/>
            <link rel="stylesheet" href="<?php echo e(elixit('assets/css/rtl/common.css')); ?>"/>
        <?php endif; ?>
        
        <?php echo $__env->yieldContent('stylesheets'); ?>

        <?php if($isDemo): ?>
            <style type="text/css">
                .float{
                    position: fixed;
                    width: 200px;
                    height: 65px;
                    bottom: 40px;
                    right: 23px;
                    background-color: #d26d54;
                    color: #FFF;
                    border-radius: 0px;
                    text-align: center;
                    box-shadow: 2px 2px 3px #999;
                }

                .my-float{
                    font-size:24px;
                    margin-top:18px;
                }

                a.float + div.label-container {
                    visibility: hidden;
                    opacity: 0;
                    transition: visibility 0s, opacity 0.5s ease;
                }

                a.float:hover + div.label-container{
                    visibility: visible;
                  orphanspacity: 1;
                }


                a.float:hover {
                    text-decoration: none;
                    color: #f5f3f3;
                }
            </style>
        <?php endif; ?>

        <?php if(isset($configuration['custom_css']) && $configuration['custom_css'] != ''): ?>
            <style type="text/css">
                <?php echo e($configuration['custom_css']); ?>

            </style>
        <?php endif; ?>

        <?php echo $__env->make('frontend.layouts.common.analytics', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body>
        <div class="app skin-1 fixed-header horizontal">
            <!-- content panel -->
            <div class="main-panel">
                <!-- top header -->
                <?php echo $__env->make('frontend.layouts.common.top-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- /top header -->
                <!-- menu header -->
                <?php echo $__env->make('frontend.layouts.common.menu-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- /menu header -->
                <!-- main area -->
                <div class="main-content">
                    <div class="content-view">

                        <div class="col-lg-8">
                            
                            <div class="card text-center">
                                <div class="card-block">
                                    <?php echo showAds('leaderboard'); ?>

                                </div>
                            </div>
                            <?php echo $__env->yieldContent('content'); ?>

                            <?php if(isset($is_index)): ?>
                                <div class="card text-center">
                                    <div class="card-block">
                                        <?php echo showAds('footer_ads'); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                            
                        </div>
                        <div class="col-lg-4">
                            <?php echo $__env->make('frontend.layouts.common.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>
                        
                    </div>
                    <!-- bottom footer -->
                    <?php echo $__env->make('frontend.layouts.common.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <!-- /bottom footer -->
                </div>
                <!-- /main area -->
            </div>
            <!-- /content panel -->
        </div>

        <?php if( $isDemo ): ?>
            <a href="https://codecanyon.net/item/google-play-app-store-cms/20614679?ref=ianthonypillos" class="float" title="<?php echo $__env->yieldContent('site_title',@$configuration['site_title']); ?>">
                <i class="fa fa-usd my-float"></i><u>BUY MY SCRIPT</u>
            </a>
        <?php endif; ?>
        <?php echo $__env->make('frontend.layouts.common.vars', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <script type="text/javascript" src="<?php echo e(elixit('assets/js/app.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(elixit('assets/js/frontend/search.js')); ?>"></script>
        
        <?php echo $__env->yieldContent('scripts'); ?>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.my-ratings').ratings('disable');
            });
        </script>
        <?php if(isset($configuration['custom_js']) && $configuration['custom_js'] != ''): ?>
            <script type="text/javascript">
                <?php echo e($configuration['custom_js']); ?>

            </script>
        <?php endif; ?>

    </body>
</html>