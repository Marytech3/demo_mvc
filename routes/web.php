<?php
/*
La Route (routes/web.php)

On indique à Laravel que si un utilisateur visite /produits, il doit appeler la méthode index du contrôleur ProduitController.*/
// routes/web.php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

// La route lie l'URL '/articles' à la méthode 'index' de l'ArticleController
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
?>