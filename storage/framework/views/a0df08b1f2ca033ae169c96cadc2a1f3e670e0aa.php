<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="icon" type="image/png" href="/img/telepractica-logo-16x16.png" />

    <?php echo $__env->yieldContent('estilos'); ?>

    <title>Telepráctica</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>

<?php echo $__env->yieldContent('content-login'); ?>

<?php echo $__env->yieldContent('scripts'); ?>

</html>
<?php /**PATH C:\laragon\www\telepractica-vue\resources\views/layouts/app.blade.php ENDPATH**/ ?>