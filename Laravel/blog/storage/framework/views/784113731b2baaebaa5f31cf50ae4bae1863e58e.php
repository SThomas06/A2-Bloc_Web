<?php $__env->startSection('titre'); ?>
    Liste des ressources
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
	<a href="./home">Go Home</a>
    <h1>Les ressources : </h1>

    <?php if(isset($ressources)): ?>
    	<ol>
		    <?php $__currentLoopData = $ressources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ressource): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		    	<li>$ressource->name</li>
		    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ol>
    <?php else: ?>
    	<h2>PAS DE RESSOURCES DISPONIBLES</h2>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>