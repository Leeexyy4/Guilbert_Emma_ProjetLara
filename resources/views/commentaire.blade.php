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

            <h2>Présentation des requêtes sur les commentaires de l'API : </h2>

            <div class="card">
                <div class="card-header">
                  Récupérer les commentaires - Index
                </div>
                <div class="card-body">
                    <a href="http://127.0.0.1:8000/api/comments" class="btn btn-primary">Valider</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Récupérer un article par id - Show
                </div>
                <div class="card-body">
                    <form action="{{ url('/api/articles/') }}" method="get">
                        <div class="mb-3">
                            <label for="articleId" class="form-label">ID de l'article</label>
                            <input type="number" class="form-control" id="articleId" name="articleId" min="1" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                  Créer un commentaire - Store
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                  Mettre à jour un commentaire - Update
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                  Supprimer un commentaire - Destroy
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                  Rechercher dans les commentaires - Search
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                  Créer des commentaires aléatoires - Factory
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
