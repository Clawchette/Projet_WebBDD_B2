<header class="page-header">
    

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <h1><a href="" class="no-link-style">eGames</a></h1>
            </div>
        </div>
        <form class="form-inline">
            @if(!auth()->check())
                <ul>
                    <button class="btn btn-info" type="button"><a href="" class="no-link-style-white">Inscription</a></button>

                    <button class="btn btn-info" type="button"><a href="" class="no-link-style-white">Connexion</a></button>

                </ul>
            @else
                <ul>
                    <button class="btn btn-info" type="button"><a href="" class="no-link-style-white">Profil</a></button>

                    <!--@if(admin)     Si l'utilisateur est un admin...
                        <button class="btn btn-info" type="button"><a href="" class="no-link-style-white">Dashboard</a></button>

                        <button class="btn btn-info" type="button"><a href="" class="no-link-style-white">Membres</a></button>

                        <button class="btn btn-info" type="button"><a href="" class="no-link-style-white">Jeux</a></button>
                        
                    @endif-->
                    <button class="btn btn-info" type="button"><a href="" class="no-link-style-white">Panier</a></button>

                    <button class="btn btn-info" type="button"><a href="" class="no-link-style-white">Sign out</a></button>

                </ul>
            @endif
        </form>
    </nav>

</header>