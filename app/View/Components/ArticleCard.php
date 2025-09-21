<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArticleCard extends Component
{
    public $titre;
    public $auteur;

    public function __construct($titre, $auteur)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
    }

    public function render(): View|Closure|string
    {
        return view('components.article-card');
    }
}