<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Articles et commentaires - Projet Laravel</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <header>
            <h1>Bienvenue sur le Projet Articles et Commentaires</h1></br>

            <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active rounded-5" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link rounded-5" href="{{ route('article') }}">Article</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link rounded-5" href="{{ route('comment') }}">Commentaire</a>
                </li>
            </ul>
        </header>

        <div class="container">

            <h2>Présentation des requêtes de l'API</h2>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Index</h5>
                    <p class="card-text">Requête GET pour récupérer une liste d'éléments.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Store</h5>
                    <p class="card-text">Requête POST pour créer un nouvel élément.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Show</h5>
                    <p class="card-text">Requête GET pour récupérer un élément spécifique par son identifiant (ID).</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Update</h5>
                    <p class="card-text">Requête PATCH pour mettre à jour un élément spécifique par son identifiant (ID).</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Destroy</h5>
                    <p class="card-text">Requête DELETE pour supprimer un élément spécifique par son identifiant (ID).</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Search</h5>
                    <p class="card-text">Fonctionnalité de recherche personnalisée, pouvant être implémentée avec un point d'accès spécifique.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Factory</h5>
                    <p class="card-text">Requête pour créer une liste de données aléatoires.</p>
                </div>
            </div>

        </div>


        <footer>
            <p>Réalisé par Emma Guilbert - BUT2APP</p>
        </footer>

        <!-- Scripts Bootstrap et autres scripts nécessaires -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-GLhlTQ8iKt6EAtkDs6KczcZRrL37SY/Ag5NDLGI+9N5V9BYT9NYQ8o6bRdi1Q" crossorigin="anonymous"></script>
    </body>
    </html>
