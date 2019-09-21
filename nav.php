<?php
function nav_item(string $page, string $title, string $class = ''): string {
    
    $classes = 'nav_item ';
    if ($_SERVER['SCRIPT_NAME'] === $page) :
        $classes .= 'active';
    endif;
    return <<<html
    <li class="$classes">
        <a class="$class" href="$page">$title<span class="sr-only">(current)</span></a>
    </li>
html;

}

function nav_menu(string $link = ''): string {
    return
        nav_item('/index.php', 'Accueil', $link) . 
        nav_item('/contact.php', 'Contact', $link) .
        nav_item('/formulaire.php', 'Formulaire', $link);
}
?>