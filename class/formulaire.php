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
        echo '<li>nom du perso '.$this->num.': '.$this->nom.'</li>';
        echo '<li>vie du perso '.$this->num.': '.$this->vie.'</li>';
        echo '<li>force magique du perso '.$this->num.': '.$this->forceMagique.'</li>';
        echo '<li>force brute du perso '.$this->num.': '.$this->forceBrute.'</li>';
        echo '<li>armure du perso '.$this->num.': '.$this->armure.'</li>';
        echo '<li>soin du perso '.$this->num.': '.$this->soin.'</li>';
        echo '</br></br>';
    }
}
