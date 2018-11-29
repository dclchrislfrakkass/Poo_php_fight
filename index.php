<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Combat avec formulaire</title>
</head>

<body>
	<main>
		<?php
        require 'class/personnage.php';
        require 'class/formulaire.php';
        function formCreate()
        {
            $formu[0] = new formulaire(0);
            $formu[1] = new formulaire(1);

            $formu[0]->addI();
            $formu[1]->addI();

            return $formu;
        }
        $myForm = formCreate();

        echo '<form action="./create.php" method="get" name="monForm"><ul>';
        echo $myForm[0]->echoForm().$myForm[1]->echoForm().'<li><input id="send" type="submit" value="C\'est partit pour la castagne !"></li></ul></form>';
        ?>
    </main>

</html>




<!--


////////////////////////////////////////////////////////////////////////////////////////////////////
//old work for try
///////////////////////////////////////////////////////////////////////////////////////////////////


// <form action="class/recup.php" method="post">
// Nom du personnage 1 <input type="text" name="nom" placeholder="nom" /><br>
// Force Magique du personnage 1 <input type="number" name="forcemagique" placeholder="forcemagique" /><br>
// Force Brute du personnage 1 <input type="number" name="forcebrute" placeholder="forcebrute" /><br>
// Armure du personnage 1 <input type="number" name="armure" placeholder="armure" /><br>
// Vie du personnage 1 <input type="number" name="vie" placeholder="vie" /><br>
// Soin du personnage 1 <input type="number" name="soin" placeholder="soin" /><br>
// <br>
// Nom du personnage 2 <input type="text" name="nom2" placeholder="nom" /><br>
// Force Magique du personnage 2 <input type="number" name="forcemagique2" placeholder="forcemagique" /><br>
// Force Brute du personnage 2 <input type="number" name="forcebrute2" placeholder="forcebrute" /><br>
// Armure du personnage 2 <input type="number" name="armure2" placeholder="armure" /><br>
// Vie du personnage 2 <input type="number" name="vie2" placeholder="vie" /><br>
// Soin du personnage 2 <input type="number" name="soin2" placeholder="soin" /><br>
// <br>
// <button type="submit">c'est partit !</button>
// </form>


    
    
    
    
    
    
    
    // $georges = new personnage('Georges', 25);
    // $lucas = new personnage('Lucas', 10);
    
    // var_dump($georges);
    // echo '</br>';
    // var_dump($lucas);
    
    // echo '</br>';
    // echo '----------------------------------';
    // echo '</br>';
    // $georges->regenere();
    // var_dump($georges);
    // echo '</br>';
    // echo '-----------------------------------';
    // echo '</br>';
    // var_dump($georges->vie);
    // echo '</br>';
    // echo '--------------------------------------------------------------------';
    // echo '</br>';
    // $georges->decrire();
    // $georges->regenere();  //on veut qu'il ajoute juste 10 pts de vie
    
    // $georges->attaqueMagique($lucas);
    // $lucas->attaqueMagique($georges);
    // $georges->attaqueBrute($lucas);
    // $lucas->attaqueBrute($georges);
    -->