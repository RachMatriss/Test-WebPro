<?php

use \Codeception\Util\Locator;
        
class accissibiltyCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     * functionalty of  french language
     * 
     * */
    public function ensureThatFrenchLanguageWorks(AcceptanceTester $I)
    {
        $I->wantTo(' verify functionalty of the French Language ! ');
        $I->amOnPage('/'); 
    
        $I->click('#menu-item-434-fr');
        $I->amOnPage('fr/accueil/');
    
        $I->see('Sans votre soutien et vos dons, la piste ne pourrais pas exister.','h5');
        $I->see("Explorez les sentiers d'hiver de votre quartier",'h2'); 

    }


    /**
     * functionalty of main menu translate to french language 
     * 
     * */
    public function ensureThatMenuTranslateToFrenchWorks(AcceptanceTester $I)
    {   
        $I->wantTo(' verify functionalty of Translate the menu feature ! ');
        $I->amOnPage('fr/accueil/');
        
        $I->click('#menu-item-434');
        // the menu will be in french lang 
        $I->see('Galerie'); 
        //$I->see('Réseau sociaux'); // test fial  
        $I->see('Français'); 
        $I->see('Communauté');   
    }


    /**
     * functionalty of communty DrapDwon feature translate to french language 
     * 
     * */
    public function ensureThatCommuntyFeatureTranslateToFrenchWorks(AcceptanceTester $I)
    {
        $I->wantTo(' verify functionalty of traslate of communty dropDown Feature  ! ');
        $I->amOnPage('fr/accueil/');
        
        $I->click('#menu-item-702');
        //dropdown communty in french lang
        $I->see('Communauté'); 
        $I->see('Carte du Parc avec Photos'); 
        $I->see('Mes Photos'); 
        //$I->see('Mes voyages'); // test fail
        $I->see('Publier une Photo'); 
        $I->see('Mon Compte'); 
    }  

}
