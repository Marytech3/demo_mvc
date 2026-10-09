<?php
// app/Http/Controllers/ArticleController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Gère l'affichage de la liste des articles.
     */
    public function index()
    {
        // Simulation de données (En production, on utiliserait un Modèle : Article::all())
        $articles = [
            ['id' => 1, 'titre' => 'Découvrir Laravel', 'contenu' => 'Laravel facilite le développement web.'],
            ['id' => 2, 'titre' => 'Le moteur Blade', 'contenu' => 'Blade est puissant et simple à manipuler.'],
            ['id' => 3, 'titre' => 'Comprendre le MVC', 'contenu' => 'Séparez efficacement votre code en couches.'],
        ];

        // On retourne la vue 'articles.index' en lui passant le tableau d'articles
        return view('articles.index', compact('articles'));
    }
}
?>