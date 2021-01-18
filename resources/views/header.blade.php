<header class="page-header">
    <h1><a href="">eGames</a></h1>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">

            </div>
        </div>
        <form class="form-inline">
            @if(!auth()->check())
                <ul>
                    <button class="btn btn-outline-success" type="button"><a href="">Inscription</a></button>

                    <button class="btn btn-outline-success" type="button"><a href="">Connexion</a></button>

                </ul>
            @else
                <ul>
                    <button class="btn btn-outline-success" type="button"><a href="">Profil</a></button>

                    <!--@if(admin)     Si l'utilisateur est un admin...
                        <button class="btn btn-outline-success" type="button"><a href="">Dashboard</a></button>

                        <button class="btn btn-outline-success" type="button"><a href="">Membres</a></button>

                        <button class="btn btn-outline-success" type="button"><a href="">Jeux</a></button>
                        
                    @endif-->
                    <button class="btn btn-outline-success" type="button"><a href="">Panier</a></button>

                    <button class="btn btn-outline-success" type="button"><a href="">Sign out</a></button>

                </ul>
            @endif
        </form>
    </nav>

</header>