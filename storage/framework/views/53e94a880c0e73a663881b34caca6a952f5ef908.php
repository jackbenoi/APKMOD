<script type="text/javascript">
    window.APPMarket  			 = (window.APPMarket || {});
    window.APPMarket.Vars        = (window.APPMarket.Vars || {});
    window.APPMarket.Resources   = (window.APPMarket.Resources || {});
    window.APPMarket.Backend   	 = (window.APPMarket.Backend || {});

    // current user_id
    window.APPMarket.user_id = '<?php echo e(@$userDetail->id); ?>';
    window.APPMarket.email   = '<?php echo e(@$userDetail->email); ?>';
</script>