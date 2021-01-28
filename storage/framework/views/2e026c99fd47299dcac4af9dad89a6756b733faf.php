<header class="page-header">
    

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <h1><a href="" class="no-link-style">eGames</a></h1>
            </div>
        </div>
        <form class="form-inline">
            <?php if(!auth()->check()): ?>
                <ul>
                    <form>
                        <input type="text" class="search_bar"> 
                        <button type='submit' class="button_search_bar"><i></i></button>
                    </form>

                    <a href="<?php echo e(url('/register')); ?>" class="btn btn-info">Inscription</a>

                    <a href="<?php echo e(url('/login')); ?>" class="btn btn-info">Connexion</a>

                    
                </ul>

            <?php else: ?>
                <ul>
                    <a href="" class="btn btn-info">Profil</a>

                   
                    <a href="<?php echo e(url('/panier')); ?>" class="btn btn-info">Panier</a>

                    <a href="<?php echo e(url('/logout')); ?>" class="btn btn-info">Déconnexion</a>

                </ul>
            <?php endif; ?>
        </form>
    </nav>

</header><?php /**PATH C:\Users\adrie\ProjetWeb\Projet_WebBDD_B2\resources\views/header.blade.php ENDPATH**/ ?>