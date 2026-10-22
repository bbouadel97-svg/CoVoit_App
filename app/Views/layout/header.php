<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titre, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></title>
    <link rel="stylesheet" href="public/assets/css/style.css">
</head>
<body>
    <nav class="navigation" aria-label="Navigation des requêtes">
        <div class="navigation-inner">
            <a class="brand" href="requete1.php">Covoiturage</a>
            <div class="navigation-links">
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <a href="requete<?= $i ?>.php"<?= $numero === $i ? ' class="active" aria-current="page"' : '' ?>>
                        Requête <?= $i ?>
                    </a>
                <?php endfor; ?>
            </div>
        </div>
    </nav>
    <main class="container">
