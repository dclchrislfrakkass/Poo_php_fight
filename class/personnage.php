
<?php


class personnage
{
    public $nom;
    public $vie = 100;
    public $forceMagique = 20;
    public $forceBrute = 25;
    public $armure = 15;
    public $soin = 20;

    public function __construct($nom, $vie, $forceMagique, $forceBrute, $armure, $soin)
    {
        $this->nom = $nom;
        $this->vie = $vie;
        $this->forceMagique = $forceMagique;
        $this->forceBrute = $forceBrute;
        $this->armure = $armure;
        $this->soin = $soin;
    }

    public function regenere($bonusVie = 0) // 20 valeur par defaut
    {
        if ($bonusVie == 0) {
            $bonusVie = $this->soin;
        }
        $this->vie += $bonusVie; // ou $this->vie = $this->vie + $bonusVie;
        echo '<i class="fas fa-briefcase-medical"></i><strong>'.$this->nom.' </strong>régénère de '.$bonusVie.' points de vie </br>';
        echo 'il dispose de '.$this->vie.' points de vie';
        echo '</br>';
        echo '<hr>';
    }

    // public function decrire()
    // {
    //     echo 'personnage : <strong>'.$this->nom.'</strong></br>';
    //     echo 'Dispose de '.$this->forceMagique.' points de force magique </br>';
    //     echo 'Il a '.$this->vie.' points de vie';
    //     echo '</br>';
    //     echo '<hr>';
    // }

    public function attaqueMagique(personnage $defenseur)
    {
        echo '<i class="fas fa-hat-wizard"></i><strong>'.$this->nom.' </strong>fait une attaque magique sur '.$defenseur->nom.'</br>';
        echo 'il lui enlève '.$this->forceMagique.' points de vie </br>';
        $defenseur->vie -= $this->forceMagique;
        echo 'il reste à <strong>'.$defenseur->nom.' </strong>'.$defenseur->vie.' points de vie';
        echo '</br>';
        echo '</br>';
        // $this->estVivant();
        // $defenseur->estVivant();

        echo '<hr>';
    }

    public function attaqueBrute(personnage $defenseur)
    {
        echo '<i class="fas fa-fist-raised"></i><strong>'.$this->nom.' </strong>attaque brutalement <strong>'.$defenseur->nom.'</strong></br>';
        $attaqueSubie = $this->forceBrute - $defenseur->armure;
        $defenseur->vie -= $attaqueSubie;
        echo 'il frappe avec '.$this->forceBrute.' points de dégats mais <strong>'.$defenseur->nom.' </strong>a une armure de '.$defenseur->armure.'</br>';
        echo 'il lui enlève donc '.$attaqueSubie.' points de vie </br>';
        echo 'il reste à <strong>'.$defenseur->nom.'</strong> '.$defenseur->vie.' points de vie';
        echo '</br>';
        echo '</br>';
        // $this->estVivant();
        // $defenseur->estVivant();
        echo '<hr>';
    }

    public function estVivant()
    {
        if ($this->vie > 0) {
            echo ' <strong>'.$this->nom.'</strong> est toujours vivant avec '.$this->vie.' points de vie </br>';

            return true;
        } else {
            echo ' <strong>'.$this->nom.'</strong> est mort !!  <i class="fas fa-skull-crossbones"></i></br>';

            return false;
        }
    }

    public function hasard($defenseur)
    {
        $whatNow = rand(0, 2);
        if (!$whatNow) {
            $this->regenere();
        } elseif ($whatNow == 1) {
            $this->attaqueMagique($defenseur);
        } else {
            $this->attaqueBrute($defenseur);
        }
    }
}
