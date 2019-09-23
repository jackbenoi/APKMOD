		<meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content=""/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1"/>
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="<?php echo e(@$configuration['site_title']); ?>">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="<?php echo e(@$configuration['site_title']); ?>">
        <meta name="theme-color" content="#4C7FF0">
        <meta name="_token" content="<?php echo e(csrf_token()); ?>">
        <meta name="google-site-verification" content="<?php echo e(@$configuration['site_verification']); ?>">

		<meta name="keywords" content="<?php echo $__env->yieldContent('meta_keywords',@$configuration['site_keywords']); ?>"/>
		<meta name="description" content="<?php echo $__env->yieldContent('meta_description',@$configuration['site_description']); ?>"/>

		<meta name="author" content="<?php echo $__env->yieldContent('author',@$configuration['site_author']); ?>"/>

		<!-- Open Graph Tags -->
		<meta property='og:type' content='website' />
		<meta property='og:url' content='<?php echo $__env->yieldContent('meta_item_url',url('/')); ?>' />
		<meta property='og:title' content='<?php echo $__env->yieldContent('meta_item_name',@$configuration['site_title']); ?>' />
		<meta property='og:description' content='<?php echo $__env->yieldContent('meta_item_desc',@$configuration['site_description']); ?>' />
		<meta property='og:image' content='<?php echo $__env->yieldContent('meta_item_image',''); ?>' />

		<meta name='twitter:card' content='summary_large_image'>
		<meta name='twitter:site' content='@appmarketcmsAnthonyPillos'>
		<meta name='twitter:title' content='<?php echo $__env->yieldContent('meta_item_name',@$configuration['site_title']); ?>'>
		<meta name='twitter:description' content='<?php echo $__env->yieldContent('meta_item_desc',@$configuration['site_description']); ?>'>
		<meta name='twitter:creator' content='@appmarketcmsAnthonyPillos'>
		<meta name='twitter:image:src' content='<?php echo $__env->yieldContent('meta_item_image',''); ?>'>
		<meta name='twitter:domain' content='<?php echo $__env->yieldContent('meta_item_url',url('/')); ?>'>

		<link rel="icon" href="/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>

		<title><?php echo $__env->yieldContent('site_title',@$configuration['site_title']); ?></title>
