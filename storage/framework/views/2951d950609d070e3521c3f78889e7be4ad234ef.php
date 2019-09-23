<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
	window.APPMarket.Resources = {
        index       : '<?php echo e(route('appmarket-admin.resource.configuration.index')); ?>',
        validateApi : '<?php echo e(route('appmarket-admin.resource.validate-download-api.index')); ?>',
        uploadLogo  : '<?php echo e(route('backend.setting.upload.logo')); ?>'
    };
    window.APPMarket.Vars = {
    	

	};
</script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/backend/general.js')); ?>"></script>
<?php $__env->stopSection(); ?>