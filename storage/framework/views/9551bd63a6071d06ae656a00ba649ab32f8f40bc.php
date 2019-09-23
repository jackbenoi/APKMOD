<div class="navbar-search navbar-item">
    <?php /* <?php echo e(Form::open(['accept-charset'=>'UTF-8', 'url' => route('frontend.search') , 'method' => 'GET','class'=>'search-form'])); ?>

        <i class="material-icons">search</i>
        <input class="form-control" type="text" name="q" placeholder="Search" />
    <?php echo e(Form::close()); ?> */ ?>
    <?php echo e(Form::open(['accept-charset'=>'UTF-8', 'url' => '#' , 'method' => 'GET','class'=>'search-form'])); ?>

    	<input type="hidden" id="search-url" name="search-url" value="<?php echo e(route('frontend.search')); ?>">
	    <i class="material-icons">search</i>
	    <input class="form-control" type="text" name="q" placeholder="Search" />
    <?php echo e(Form::close()); ?>

</div>