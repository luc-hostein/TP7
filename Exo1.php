<?php

final class formulaire{

    final function __construct($url)
    {
        echo "<form action='$url' method='post'>";
    }

    function ajouterzonetexte($text,$name){
        echo $text;
        echo "<input type='text' name='$name'>";
    }

    function ajouterbouton($value){
        echo "<input type='submit' value='$value'>";
    }

    function getform(){
        echo "</form>";
    }
}

class form2 extends formulaire{

    function __construct($url,$text1,$text2,$name1,$name2,$value)
    {
        parent::__construct($url);
        parent::ajouterzonetexte($text1,$name1);
        echo "<br>";
        parent::ajouterzonetexte($text2,$name2);
        echo "<br>";
        parent::ajouterbouton($value);

        echo "<br>Homme<input type='radio' name='sex' value='Homme'><br>Femme<input type='radio' name='sex' value='Femme'>
                <br>Tennis<input type='checkbox' value='tennis'><br>Equitation<input type='checkbox' value='equitation'>";
        parent::getform();
    }
}


$form = new form2("Exo1.php","Votre nom :","Votre code :","nom","code","Envoyer");




?>