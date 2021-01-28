


<?php $__env->startSection('contenu'); ?>



    <div class="principale"> 

        <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="/game/<?php echo e($game->id); ?>"><div class='jeu_photo'> <?php echo e($game->name); ?> <img src=""></div></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\adrie\ProjetWeb\Projet_WebBDD_B2\resources\views/welcome.blade.php ENDPATH**/ ?>