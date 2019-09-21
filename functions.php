<?php 
require_once('nav.php');

function checkbox(string $name, string $value, array $data): string{
    $attributes = '';

    if (isset($data[$name]) && in_array($value, $data))
            $attributes .= 'checked';

    return <<<html
    <input type="checkbox" name="{$name}[]" value="$value" $attributes>
html;
}

function radio(string $name, string $value, array $data): string{
    $attributes = '';

    if (isset($data[$name]) && $value ===  $data)
            $attributes .= 'checked';

    return <<<html
    <input type="radio" name="{$name}" value="$value" $attributes>
html;
}

function dump($variable) {
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

function creneaux_html(array $creneaux) {
    $phrases = [];
    if (empty($creneaux))
        return 'Fermé';
    foreach ($creneaux as $creneau) {
        $phrases[] = "de <strong>{$creneau[0]}h</strong> à <strong>{$creneau[1]}h</strong>";
    }
    return 'Ouvert ' . implode(' et ', $phrases);
}

function is_open(int $heure, array $creneaux): bool {
    foreach($creneaux as $horaires) {
        if($heure >= $horaires[0] && $heure < $horaires[1])
            return true;
    }
    return false;
}

function my_search(string $search): string {
    $files = ['index.php', 'contact.php', 'formulaire.php', 'somepage.php'];
    $links = [];
    foreach($files as $file) {
        // Get the path to the file we want to read;
        $path = __DIR__ . DIRECTORY_SEPARATOR . $file;
        $ressources = fopen($path, 'r');
        // Parsing the file to found a match from the search result
        while($line = fgets($ressources)) {
            if (strpos($line, $search)) {
                $links[] = [$file, $line];
                break;
            }
        }
    }
    // Now I want to return all my links as a list of anchor tags
    $output = "";
    foreach($links as $link){
        $output .= "<div>
            <h2><a href='$link[0]'>$link[0]</a></h2>
            <p>$link[1]</p>
        </div>";
    }
    return $output;
}