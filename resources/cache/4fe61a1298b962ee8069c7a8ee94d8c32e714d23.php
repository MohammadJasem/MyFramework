<!DOCTYPE html>
<html>
<head>
	
	<link rel="icon" href="<?php echo e(url('icon_1.ico')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(url('icon_1.ico')); ?>" type="image/x-icon">

	<title><?php echo $__env->yieldContent('title'); ?></title>

	<?php echo $__env->make('layouts._styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->yieldContent('myStyles'); ?>

	

</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
	<div class="gm-loader" style="display: none;">
        <div class="preloader">
            <div class="hollow-dots-spinner" :style="spinnerStyle">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('partials._bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->make('layouts._scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->yieldContent('myScripts'); ?>


</body>
</html><?php /**PATH C:\laragon\www\MyFramework\resources\views/layouts/master_page.blade.php ENDPATH**/ ?>