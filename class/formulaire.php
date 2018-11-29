<?php

class formulaire
{
    public $num = 0;
    public $nom = '<input type="text" value="" placeholder="nom" name="nom';
    public $vie = '<input type="number" value="" placeholder="vie" name="vie';
    public $forceMagique = '<input type="number" value="" placeholder="force magique" name="forceMagique';
    public $forceBrute = '<input type="number" value="" placeholder="force brute" name="forceBrute';
    public $armure = '<input type="number" value="" placeholder="armure" name="armure';
    public $soin = '<input type="number" value="" placeholder="soin" name="soin';

    public function __construct($i)
    {
        $this->num = $i;
    }

    public function addI()
    {
        $this->nom .= $this->num.'">';
        $this->vie .= $this->num.'">';
        $this->forceMagique .= $this->num.'">';
        $this->forceBrute .= $this->num.'">';
        $this->armure .= $this->num.'">';
        $this->soin .= $this->num.'">';
    }

    public function echoForm()
    {
        echo '<li>Nom du perso '.$this->num.': '.$this->nom.'</li>';
        echo '<li>Vie du perso '.$this->num.': '.$this->vie.'</li>';
        echo '<li>Force magique du perso '.$this->num.': '.$this->forceMagique.'</li>';
        echo '<li>Force brute du perso '.$this->num.': '.$this->forceBrute.'</li>';
        echo '<li>Armure du perso '.$this->num.': '.$this->armure.'</li>';
        echo '<li>Soin du perso '.$this->num.': '.$this->soin.'</li>';
        echo '</br></br>';
    }
}
