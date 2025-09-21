<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AdvisorController;

Route::get('/', function () {
    return view('welcome');
});
//nommer une route methode name
Route::get('/test', function () {
    return "test page";
})->name('test');

// Route avec paramètre obligatoire
Route::get('/hello/{nom}', function ($nom) {
    return "Hello ".$nom;
});

// Route avec paramètre optionnel (valeur par défaut = "inconnu")
Route::get('/hi/{nom?}', function ($nom = "inconnu") {
    return "Hi ".$nom;
});

// Route avec contrainte sur le paramètre (nom = uniquement lettres, min 2 caractères)
Route::get('/welcome/{name}', function ($name) {
    return "Welcome ".$name;
})->where('name', '[A-Za-z]{2,}');

// Déclaration de vue (ancienne façon, inutile depuis Laravel 8+)
Route::get('/testview', function () {
    return view('testview');
});

// Déclaration de vue simplifiée (Laravel 8+)
Route::view('/testview2', 'testview');

// Vue avec paramètre passé directement depuis la route
Route::view('/greet/{name}', 'testview', ['name' => 'Guest']);

// Méthode 1 : Définir deux routes distinctes pour un formulaire
// - GET : afficher le formulaire
// - POST : traiter la soumission du formulaire

Route::get('/afficherFormulaire', function () {
    return "aff form";
});
Route::post('/traiterFormulaire', function () {
    return "trait form";
});

// Méthode 2 : Définir une seule route qui accepte à la fois GET et POST
// - GET : afficher le formulaire
// - POST : traiter les données envoyées

Route::match(['get', 'post'], '/formulaire', function () {
    if (request()->isMethod('post')) {
        // Traiter les données du formulaire
        return "Traitement des données du formulaire...";
    }

    // Si GET → afficher le formulaire
    return "Affichage du formulaire...";
});

// Route utilisant un contrôleur
Route::get('/greetWithcontroller/{name}', [WelcomeController::class, 'index']);

//////////////////////////////////////////////
//Annexe Intégration Template 
Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');
/////////////////////////////////////////////
//Atelier 2

Route::get('/advisor/{age?}', [AdvisorController::class, 'show'])->name('advisor.show');


