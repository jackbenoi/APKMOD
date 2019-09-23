<div class="card">
    <div class="card-header">
        <div class="pull-left">
            <strong><i class="fa fa-list"></i> Featured Categories</strong>
        </div>

        <div class="pull-right">
            <ul class="nav nav-tabs card-header-tabs">
                <?php if(isset($featuredCategories) && count($featuredCategories) > 0): ?>
                    <?php foreach($featuredCategories as $index => $pCat): ?>

                        <?php /**/ $active = ($pCat == reset($featuredCategories)) ? 'active' : ''; /**/ ?>
                        <li class="nav-item">
                            <a data-toggle="tab" role="tab" class="nav-link <?php echo e($active); ?>" href="#<?php echo e($index); ?>"><?php echo e($pCat['title']); ?></a>
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Setup Category</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="card-block">

        <!-- Tab panes -->
        <div class="tab-content">
            <?php if(isset($featuredCategories) && count($featuredCategories) > 0): ?>
                <?php foreach($featuredCategories as $index => $pCat): ?>
                    <?php /**/ $active = ($pCat == reset($featuredCategories)) ? 'active' : ''; /**/ ?>
                    <div class="tab-pane  <?php echo e($active); ?>" id="<?php echo e($index); ?>" role="tabpanel">
                        <ul class="list-unstyled">
                        <?php foreach($pCat['categories'] as $cat): ?>
                            <li>
                                <a href="<?php echo e($cat['detail_url']); ?>" class="btn btn-block btn-icon btn-outline-success m-r-xs m-b-xs">
                                  <i class="fa fa-<?php echo e(@$cat['icon'] != '' ? @$cat['icon'] : 'android'); ?>"></i>
                                  <span>
                                    <?php echo e($cat['title']); ?>

                                  </span> 
                                </a>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                 <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>
</div>