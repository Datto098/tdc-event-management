<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <link rel="shortcut icon" href="<?php echo e(asset('assets/logo/logo_removebg.png')); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/navbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/search.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/detail.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/calendar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/attendence.css')); ?>">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css">
    <link rel="stylesheet" href="<?php echo e(asset('js/owlcarousel/assets/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('js/owlcarousel/assets/owl.theme.default.min.css')); ?>">
    <title><?php echo $__env->yieldContent('title', 'My Laravel App'); ?></title>
</head>

<body>
    <?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo $__env->yieldContent('scripts'); ?>
    <script src='<?php echo e(asset('js/fullcalendar/index.global.min.js')); ?>'></script>
    <script src="<?php echo e(asset('js/owlcarousel/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/owlcarousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/navbar.js')); ?>"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            dots:true,
            autoplay: true,
            autoplayTimeout: 3000,
            items: 1,
        })
    </script>
</body>

</html>
<?php /**PATH /var/www/tdc-event-management/resources/views/layouts/app.blade.php ENDPATH**/ ?>