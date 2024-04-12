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

            <h2></br>Mettre à jour un article</h2>

            <form action="http://127.0.0.1:8000/api/articles" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="id" class="form-label">Id de l'article</label>
                    <input type="number" class="form-control" id="id" name="id" required>
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Titre de l'article</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>

                <div class="mb-3">
                    <label for="image_url" class="form-label">URL de l'image</label>
                    <input type="text" class="form-control" id="image_url" name="image_url" required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Contenu de l'article</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Mettre à jour l'article</button>
            </form>


        </div>


        <footer>
            <p>Réalisé par Emma Guilbert - BUT2APP</p>
        </footer>

        <!-- Scripts Bootstrap et autres scripts nécessaires -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-GLhlTQ8iKt6EAtkDs6KczcZRrL37SY/Ag5NDLGI+9N5V9BYT9NYQ8o6bRdi1Q" crossorigin="anonymous"></script>
    </body>
    </html>
