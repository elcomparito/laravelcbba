

<?php $__env->startSection('title'); ?>
    Soy institución - Telepráctica
<?php $__env->stopSection(); ?>

<?php $__env->startSection('estilos'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section>
        <img src="/img/soy-institucion.jpg" class="img-fluid" alt="Imagen" style="width: 100%">
    </section>

    <section>
        <div class="card text-center">
            <div class="card-header display-4">
                ¿Eres institución?
            </div>
            <div class="card-body">
                <p class="card-text">¡Contáctanos! y te brindaremos la oportunidad de acceder a los beneficios que ofrece Telepráctica.</p>
                <p class="card-text">Nuestros canales de contacto son:</p>
            </div>
            <div class="card-footer text-muted">
                <p><i class="fas fa-phone-square-alt mr-1"></i>(32) 332 5244<i class="fas fa-envelope ml-5 mr-1"></i>contacto@creatiox.com</p>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.partials.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\telepractica-vue\resources\views//web/soy-institucion.blade.php ENDPATH**/ ?>