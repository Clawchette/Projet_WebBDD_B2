

<?php $__env->startSection('contenu'); ?>

<h1>Administration des jeux</h1>
<br>

    <a href="/adminAddGames" class="btn btn-info" style="margin-bottom:20px;">Ajouter un jeu</a><br>
    <!-- liste des jeux déjà sur le site qui seront des boutons pour les modifier -->
    <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row" style="margin-bottom:20px; border:solid black 2px; border-radius:5px; width: 400px;">
            <div class="col-5">
                <img src="<?php echo e($game->photo); ?>" style="height:150px; width:150px;">
            </div>
            <div class="col-3">
                <h3 style="margin-bottom:20px;"><?php echo e($game->name); ?></h5>
                <a href="/adminModGames?id=<?php echo e($game->id); ?>" class="btn btn-success" style="margin-bottom:20px;">Modifier</a>

                <form action="/adminGames" method="post">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="id" value="<?php echo e($game->id); ?>">
                    <input type="submit" value="Supprimer" class="btn btn-danger">
                </form>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Clawc\Documents\B2-informatique\Projet_Web\Projet_WebBDD_B2\resources\views/Admin/adminGames.blade.php ENDPATH**/ ?>