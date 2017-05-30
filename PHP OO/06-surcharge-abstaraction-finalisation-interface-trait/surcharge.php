<?php

//  Surcharge ou  Overrride : permet de modifier le comportement d'une méthode et d'y apporter des traitements supplémentaires
// surcharge != redéfinition

class A{

    public function calcul(){
        return 10;
    }
}

class B extends A{ // B hérite de A
    
    public function calcul(){

        // return $this -> calcul() + 5; // Ne fonctionne pas car s'appelle soi-même
        // return A::calcul() + 5; // Ne fonctionne pas car calcul() n'est pas static
        return parent::calcul() + 5; // OK ! Permets d'appeler le comportement de la méthode calcul() telle que définie dans la classe parente.

    }
}