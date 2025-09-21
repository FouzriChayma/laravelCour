<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Articles</title>
    @vite('resources/css/app.css')  <!-- Include compiled CSS -->
</head>
<body>
    <!-- Step 6: Alerts at top -->
    <x-alert type="success">Message de succès!</x-alert>
    <x-alert type="error">Message d'erreur!</x-alert>
    <x-alert type="info">Message d'info!</x-alert>

    <h1>Liste des Articles</h1>
    @foreach ($articles as $article)
        <x-article-card :titre="$article['titre']" :auteur="$article['auteur']">
            {{ $article['contenu'] }}  <!-- Passed via slot -->
        </x-article-card>
    @endforeach
</body>
</html>