<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="articleport" content="width=device-width, initial-scale=1">

        <title>Articles et articles - Projet Laravel</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <header>
            <h1>Bienvenue sur le Projet Articles et articles</h1></br>

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
            <h2>Présentation des requêtes sur les articles de l'API : </h2>

            <div class="card">
                <div class="card-header">
                  Récupérer les articles - Index
                </div>
                <div class="card-body">
                    <a href="http://127.0.0.1:8000/api/articles" class="btn btn-primary">Valider</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Récupérer un article par id - Show
                </div>
                <div class="card-body">
                    <input type="number" class="form-control" id="nombre" name="nombre" min="1">
                    <a href="http://127.0.0.1:8000/api/articles/" class="btn btn-primary" onclick="validateArticle()">Valider</a>
                </div>
            </div>

            <script>
                function validateArticle() {
                    var articleId = document.getElementById('nombre').value;
                    window.location.href = "http://127.0.0.1:8000/api/articles/" + articleId;
                }
            </script>


            <script>
                document.getElementById('validerBtn').addEventListener('click', function () {
                    var articleId = document.getElementById('nombre').value;
                    var baseUrl = "http://127.0.0.1:8000/api/articles/";
                    var url = baseUrl + articleId;

                    // Redirect to the constructed URL
                    window.location.href = url;
                });
            </script>


            <div class="card">
                <div class="card-header">
                  Créer un article - Store
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                  Mettre à jour un article - Update
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                  Supprimer un article - Destroy
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                  Rechercher dans les articles - Search
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                  Créer des articles aléatoires - Factory
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-primary">Go somewhere</a>
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
