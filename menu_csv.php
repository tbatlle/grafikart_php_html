<?php
require_once 'functions.php';
$title = "Notre menu";
$lignes = file(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'menu.csv');
//$lignes = explode(PHP_EOL, $menu);
foreach ($lignes as $k => $ligne) {
    $lignes[$k] = str_getcsv(trim($ligne, " \n\r\t\v\0;"),";");
}

require 'elements/header.php';
?>

<h1>Menu</h1>

<?php foreach($lignes as $ligne) : ?>
    <?php if (count($ligne) === 1) : ?>
        <h2><?= $ligne[0]; ?></h2>
    <?php else: ?>
        <div class="row">
            <div class="col-sm-8">
                <p>
                    <strong><?= $ligne[0]; ?></strong><br>
                    <?= $ligne[1]; ?>
                </p>
            </div>
            <div class="col-sm-4">
                <strong><?= number_format($ligne[2], 2, ',', ' '); ?> €</strong>
            </div>
        </div>
        
    <?php endif; ?>
<?php endforeach; ?>

<?php require 'elements/footer.php'; ?>