

<?php $__env->startSection('contenu'); ?>

<h1>Connexion</h1><br>

<form class="" action="/connexion" method="post">
    <div class="form-group">
        <label>Adresse Email :</label><br>
        <input type="string" name="email" placeholder="adresse email...">
    </div>
    <div class="form-group">
        <label>Mot de passe :</label><br>
        <input type="password" name="mdp" placeholder="Mot de passe...">
    </div>

    <br><div>
        <input type="submit" value="Valider" class="btn btn-outline-success">
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Clawc\Documents\B2-informatique\Projet_Web\Projet_WebBDD_B2\resources\views/LogIn/connexion.blade.php ENDPATH**/ ?>