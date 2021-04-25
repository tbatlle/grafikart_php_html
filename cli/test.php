<?php
$fichier = __DIR__ . DIRECTORY_SEPARATOR .'demo.txt';
$size = file_put_contents($fichier,'Salut le monde');
if ($size === false) {
    echo('Impossible d\'écrire le fichier');
} else {
    echo('Ecriture réussie');
}

echo (file_get_contents($fichier));