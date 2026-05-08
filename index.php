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
        <div id="liste-oeuvres">
        <?php
        include 'oeuvres.php';
        foreach ($oeuvre as $tableau) : ?>
            <article class="oeuvre">
                <a href="oeuvre.php?id=<?php echo $tableau['id']; ?>">
                <img src="<?php echo $tableau['image']; ?>" alt="<?php echo $tableau['titre']; ?>">
                <h2><?php echo $tableau['titre']?></h2>
                <p class="description"><?php echo $tableau['description']; ?></p>
            </article>
        <?php endforeach; ?>
        </div>
    </main>

    <?php require_once(__DIR__ . '/footer.php'); ?>

</body>
</html>