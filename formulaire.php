<?php 
$parfums = [
    'Fraise' => 4,
    'Chocolat' => 5,
    'Vanille' => 3
];
$cornets = [
    'cornet' => 2,
    'pot' => 1
];
$supplements = [
    'pepites' => 2,
    'chantilly' => 0.5
];

$title = 'Composer votre glace';
require('elements/header.php') ?>


<h1>Composer votre glace</h1>
<form target="_blank" action="/recherche.php" method='GET' class="m-5">
    <div class="form-group">
        <input type="text" name="search" id="search" placeholder="Recherche">
    </div>
    <button type="submit">Submit</button>
</form>


<h2>$_GET</h2>
<pre>
<?php echo var_dump($_GET) ?>
</pre>