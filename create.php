<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">


<?php
require 'class/personnage.php';

$perso1 = new personnage($_GET['nom0'], $_GET['vie0'], $_GET['forceMagique0'], $_GET['forceBrute0'], $_GET['armure0'], $_GET['soin0']);
$perso2 = new personnage($_GET['nom1'], $_GET['vie1'], $_GET['forceMagique1'], $_GET['forceBrute1'], $_GET['armure1'], $_GET['soin1']);
if (rand(0, 1)) {
    while ($perso1->estVivant() && $perso2->estVivant()) {
        $perso1->hasard($perso2);
        if ($perso1->estVivant() && $perso2->estVivant()) {
            $perso2->hasard($perso1);
        }
    }
} else {
    while ($perso1->estVivant() && $perso2->estVivant()) {
        $perso2->hasard($perso1);
        if ($perso1->estVivant() && $perso2->estVivant()) {
            $perso1->hasard($perso2);
        }
    }
}

        ?>