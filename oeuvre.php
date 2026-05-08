<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>

    <?php require_once(__DIR__ . '/header.php'); ?>

    <main>
        <article id="detail-oeuvre">
            <?php
            include 'oeuvres.php';
            foreach ($oeuvre as $tableau) : ?>
            <div id="img-oeuvre">
                <img src="<?php echo $tableau['image']; ?>" alt="<?php echo $tableau['titre']; ?>">
            </div>
            <div id="contenu-oeuvre">
                <h1><?php echo $tableau['titre']; ?></h1>
                <p class="description"><?php echo $tableau['description']; ?></p>
                <p class="description-complete"><?php echo $tableau['description-complete']; ?></p>
            </div>
            <?php endforeach; ?>
        </article>
    </main>

    <?php require_once(__DIR__ . '/footer.php'); ?>

</body>
</html>