<?php

class Animal{

    protected function deplacement(){
        return 'Je me déplace';
    }

    public function manger(){
        return 'Je mange';
    }
}

// ------------


class Elephant extends Animal{

    // Tout le code de Animal est sous-entendu ici !!

    public function quiSuisJe(){
        return 'Je suis un éléphant et ' . $this -> deplacement();
        // Je peux appeler la méthode déplacement avec $this car en tant que méthode protected, elle est accessible dans la classe où elle est déclarée et dans les classes héritières
    }

}

// ------------

class Chat extends Animal{

    public function quiSuisJe(){
        return 'Je suis un chat';
    }

    public function manger(){ // redéfinition de méthode seulement pour la classe Chat.
        return 'Je mange peu !';
    }


}

// ------------

$eleph = new Elephant;
echo $eleph -> quiSuisJe() . '<br>';
echo $eleph -> manger() . '<br>';

echo '<hr>';
$chat = new Chat;
echo $chat -> quiSuisJe() . '<br>';
echo $chat -> manger() . '<br>';


/*
Commentaires :
    L'héritage est l'un des fondements de la programmation orientée objet.
    Lorsqu'une classe hérite d'une autre classe, c'est comme si tout le code était importé. Les éléments non-privés sont donc accessible avec $this.
    
    Redéfinition : Une classe erfant (héritière) peut modifier le comportement global d'une méthode héritée.
    Surcharge : Une classe enfant peut modifier en partie le comportement d'une méthode héritée (Cf chapitre 6 surcharge.php)

    L'interpréteur va d'abord regarder si une méthode existe dans la classe qui l'exécute, et s'il ne la trouve pas, il va ensuite regarder dans la classe mère.



*/