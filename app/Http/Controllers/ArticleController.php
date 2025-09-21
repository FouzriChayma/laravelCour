<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
            ['titre' => 'Intro à Laravel', 'auteur' => 'John Doe', 'contenu' => 'Laravel est génial!'],
            ['titre' => 'Blade Templates', 'auteur' => 'Jane Smith', 'contenu' => 'Apprenez Blade.'],
            // Add more as needed
        ];

        return view('articles', compact('articles'));
    }
}