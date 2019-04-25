<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="Contenu/style1.css" />
        <title><?= $titre ?></title>
    </head>
    <body>
        <div id="global">
            
            <header>
                <a href="index.php"><h1 id="titreBlog">PUBLICATIONS</h1></a>
                <p>nous souhaitons la bienvenue sur notre page de publications.</p>
            </header>
            <div id="contenu">
                <?= $contenu ?>
            </div> <!-- #contenu -->
            <footer id="piedBlog">
                bonne lecture !!!!
            </footer>
        </div> <!-- #global -->
    </body>
</html>