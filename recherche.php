<?php 
require_once('functions.php');
$title = "Resultat de la recherche";
require('elements/header.php');
?>

<?= my_search($_GET['search']); ?>

<? require('elements/footer.php'); ?>