<?php $__env->startSection('titre'); ?>
    Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
    <h1>Bienvenue sur le gestionnaire de ressources</h1>
    <br>
    <a href="./ressources">Cliquez ici pour voir les ressources disponibles</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>