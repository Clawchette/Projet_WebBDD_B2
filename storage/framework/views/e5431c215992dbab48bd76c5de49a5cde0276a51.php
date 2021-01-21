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
                    <button class="btn btn-info" type="button"><a href="" class="no-link-style-white">Inscription</a></button>

                    <button class="btn btn-info" type="button"><a href="" class="no-link-style-white">Connexion</a></button>

                </ul>
            <?php else: ?>
                <ul>
                    <button class="btn btn-info" type="button"><a href="" class="no-link-style-white">Profil</a></button>

                    <!--<?php if(admin): ?>     Si l'utilisateur est un admin...
                        <button class="btn btn-info" type="button"><a href="" class="no-link-style-white">Dashboard</a></button>

                        <button class="btn btn-info" type="button"><a href="" class="no-link-style-white">Membres</a></button>

                        <button class="btn btn-info" type="button"><a href="" class="no-link-style-white">Jeux</a></button>
                        
                    <?php endif; ?>-->
                    <button class="btn btn-info" type="button"><a href="" class="no-link-style-white">Panier</a></button>

                    <button class="btn btn-info" type="button"><a href="" class="no-link-style-white">Sign out</a></button>

                </ul>
            <?php endif; ?>
        </form>
    </nav>

</header><?php /**PATH C:\Users\Clawc\Documents\B2-informatique\Projet_Web\Projet_WebBDD_B2\resources\views/header.blade.php ENDPATH**/ ?>