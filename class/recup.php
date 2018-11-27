<?php

require 'class/personnage.php';

//ma page de traitement//

$perso1 = new personnage($_POST['nom'], intval($_POST['forcemagique']), intval($_POST['forcebrute']), intval($_POST['armure']), intval($_POST['vie']), intval($_POST['soin']));

// class personnage
// {
//     public function __construct()
//     {
//         $this->nom = $_POST['nom'];
//         $this->forceMagique = $_POST['forcemagique'];
//         $this->forceBrute = $_POST['forcebrute'];
//         $this->armure = $_POST['armure'];
//         $this->vie = $_POST['vie'];
//         $this->soin = $_POST['soin'];

//         $this->nom = $_POST['nom2'];
//         $this->forceMagique = $_POST['forcemagique2'];
//         $this->forceBrute = $_POST['forcebrute2'];
//         $this->armure = $_POST['armure2'];
//         $this->vie = $_POST['vie2'];
//         $this->soin = $_POST['soin2'];
//     }
// }

//debug / test

// echo 'votre nom est <strong>'.$_POST['nom'].'</strong> et votre force magique est de '.$_POST['forcemagique'].'</br>';
// echo 'votre adversaire est <strong>'.$_POST['nom2'].'</strong>';
echo 'voici '.$perso1;
