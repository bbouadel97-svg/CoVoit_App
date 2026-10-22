<?php require __DIR__ . '/../layout/header.php'; ?>

<section class="page-heading">
    <h1><?= htmlspecialchars($titre, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></h1>
    <p class="enonce"><strong>Énoncé :</strong> <?= htmlspecialchars($enonce, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></p>
</section>

<div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <?php foreach ($colonnes as $colonne): ?>
                    <th scope="col"><?= htmlspecialchars($colonne, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php if ($donnees === []): ?>
                <tr>
                    <td class="empty-result" colspan="<?= max(1, count($colonnes)) ?>">Aucun résultat trouvé</td>
                </tr>
            <?php else: ?>
                <?php foreach ($donnees as $ligne): ?>
                    <tr>
                        <?php foreach ($ligne as $valeur): ?>
                            <td><?= htmlspecialchars((string) ($valeur ?? ''), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php require __DIR__ . '/../layout/footer.php'; ?>
