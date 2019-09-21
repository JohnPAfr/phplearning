<?php
require_once 'functions.php';
$title = 'Nous contacter' ;
require_once 'config.php';
date_default_timezone_set('Europe/Paris');
$heure = (int)date('G');
$today = CRENEAUX[date('N') - 1];
$ouvert = is_open($heure, $today);
require('elements/header.php');
?>

<main>
    <div class="row">
        <div class="col-md-8">
            <h2>Nous contacter</h2>
        </div>
            <div class="col-md-4">
                <h2>Horaires d'ouvertures</h2>
<div class="alert alert-success" <?php if(!$ouvert): ?> style='display: none;' <?php endif; ?>>
                    Magasin ouvert
                </div>
                <div class="alert alert-danger" <?php if($ouvert): ?> style='display: none;' <?php endif; ?>>
                    Magasin fermé
                </div>
                <ul>
                    <?php foreach(JOURS as $id => $jour): ?>
<li <?php if($id +1 === (int)date('N')): ?> style="text-decoration: underline green" <?php endif; ?>>
                        <?= $jour; ?> - <?= creneaux_html(CRENEAUX[$id]) ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
</main>
    
<?php require('elements/footer.php'); ?>
