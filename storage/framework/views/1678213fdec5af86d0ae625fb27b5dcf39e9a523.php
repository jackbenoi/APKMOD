<?php $__env->startSection('content'); ?>

<div class="card">
    
    <div class="card-block">
       
       <?php echo e(Form::open(['accept-charset'=>'UTF-8', 'url' => $url, 'method' => 'POST'])); ?>

        <div class="text-xs-center m-b-3">
            <i class="text-success fa fa-android fa-5x"></i>
            <hr/>
            <h5>
                <?php echo e($configuration['cms_name']); ?>

            </h5>
            <p class="text-muted">
                Sign in with your username & password to continue.
            </p>
        </div>
        <?php /* Login Error Message Response */ ?>
        <?php if($errors->has()): ?>

            <div class="alert alert-danger fade in text-left">
                <button class="close" data-dismiss="alert"><span>×</span></button>
                <?php foreach($errors->all() as $error): ?>
                    <p><i class="fa fa-warning"></i> <?php echo e($error); ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <?php /* Login Success Message Response */ ?>
        <?php if(Session::get('success')): ?>
            <div class="alert alert-success fade in text-left m-t-10">
                <button class="close" data-dismiss="alert"><span>×</span></button>
                <p><i class="fa fa-check"></i> <?php echo e(Session::get('success')); ?></p>
            </div>
        <?php endif; ?>
        <?php if(Session::get('error')): ?>
            <div class="alert alert-danger fade in text-left m-t-10">
                <button class="close" data-dismiss="alert"><span>×</span></button>
                <p><i class="fa fa-check"></i> <?php echo e(Session::get('error')); ?></p>
            </div>
        <?php endif; ?>
        <fieldset class="form-group">
            <label for="username">
            Enter your username
            </label>
            <input type="text" class="form-control form-control-md" name="login" placeholder="username" required/>
        </fieldset>
        <fieldset class="form-group">
            <label for="password">
            Enter your password
            </label>
            <input type="password" class="form-control form-control-md" name="password" placeholder="********" required/>
        </fieldset>

        <?php if($configuration['enable_recaptcha'] == 'yes'): ?>
            <fieldset class="form-group">
                <div class="g-recaptcha" data-sitekey="<?php echo e($configuration['recaptcha_site_key']); ?>"></div>
            </fieldset>
        <?php endif; ?>
        
        <button class="btn btn-success btn-md" type="submit">
            <i class="fa fa-user"></i> Login
        </button>
         <a href="<?php echo e(route('frontend.forgot.password')); ?>" title="Forgot Password" class="btn btn-default  btn-md" >
            <i class="fa fa-link"></i> Forgot Password
        </a>
        <a href="<?php echo e(route('frontend.register')); ?>" title="Create an Account" class="btn btn-default  btn-md" >
            <i class="fa fa-user-plus"></i> Create an Account
        </a>
      
        <div class="divider">
          <hr/>
        </div>

        <div class="text-xs-center">
          <p>
            or Login with your social account
          </p>
          <a href="<?php echo e(route('frontend.auth.fb')); ?>" class="btn btn-icon-icon btn-facebook btn-lg m-b-1 m-r-1">
            <i class="fa fa-facebook">
            </i>
          </a>
          <a href="<?php echo e(route('frontend.auth.twitter')); ?>" class="btn btn-icon-icon btn-twitter btn-lg m-b-1 m-r-1">
            <i class="fa fa-twitter">
            </i>
          </a>
          <a href="<?php echo e(route('frontend.auth.gplus')); ?>" class="btn btn-icon-icon btn-google btn-lg m-b-1 m-r-1">
            <i class="fa fa-google-plus">
            </i>
          </a>
        </div>
        
     <?php echo e(Form::close()); ?>

        
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    
    <?php if($configuration['enable_recaptcha'] == 'yes'): ?>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>