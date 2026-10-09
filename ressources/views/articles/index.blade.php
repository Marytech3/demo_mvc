<!-- resources/views/articles/index.blade.php.La vue utilise la syntaxe Blade pour boucler sur les données et générer le code HTML proprement. -->
 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Blog - Liste des articles</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f9f9f9; }
        .article { background: white; padding: 20px; margin-bottom: 15px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        h2 { color: #ff2d20; } /* Couleur Laravel */
    </style>
</head>
<body>

    <h1>Bienvenue sur le Blog</h1>
    <p>Voici la liste de nos derniers articles :</p>

    @if(count($articles) > 0)
        <!-- Boucle Blade pour itérer sur le tableau transmis par le contrôleur -->
        @foreach($articles as $article)
            <div class="article">
                <h2>{{ $article['titre'] }}</h2>
                <p>{{ $article['contenu'] }}</p>
            </div>
        @endforeach
    @else
        <p>Aucun article disponible pour le moment.</p>
    @endif

</body>
</html>
