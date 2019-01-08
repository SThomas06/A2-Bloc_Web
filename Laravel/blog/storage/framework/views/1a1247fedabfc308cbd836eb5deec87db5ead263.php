<?php $__env->startSection('titre'); ?>
    ACCUEIL
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
    <p>Bienvenue sur le gestionnaire de ressources</p>
    <br>
    <a href="./ressources">Voir les ressources</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>