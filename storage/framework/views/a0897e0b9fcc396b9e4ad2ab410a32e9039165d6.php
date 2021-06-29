

<?php $__env->startSection('title'); ?>
    Soy institución - Telepráctica
<?php $__env->stopSection(); ?>

<?php $__env->startSection('estilos'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section>
        <img src="/img/quienes-somos.jpg" class="img-fluid" alt="Imagen" style="width: 100%">
    </section>

    <section>
        <div class="card text-center">
            <div class="card-header display-4">
                ¿Quiénes somos?
            </div>
            <div class="card-body">
                <p class="card-text">¡Somos Telepráctica, de ©Creatiox!</p>
                <p class="card-text">Una plataforma orientada a estudiantes que buscan realizar su práctica profesional de manera online.</p>
            </div>
            <div class="card-footer text-muted">
                <p><i class="fas fa-phone-square-alt mr-1"></i>(32) 332 5244<i class="fas fa-envelope ml-5 mr-1"></i>contacto@creatiox.com</p>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\telepractica-vue\resources\views//web/quienes-somos.blade.php ENDPATH**/ ?>