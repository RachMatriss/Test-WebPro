<?php

class accessCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     * functionalty of  community page
     * click comminty page and dispaly page comminty 
     * */
    public function ensureThatCommunitPageWorks(AcceptanceTester $I)
     {  
        $I->wantTo(' verify functionalty of Community page  !');
        $I->amOnPage('/'); 

        $I->click('#menu-item-702');
        $I->expectTo('community page !');
        
        $I->amOnPage('#community');  //community page 
     }

    /**
     * functionalty of  dropDown community
     *  after click community  display dropDown Menu
     * */
    public function ensureThatCommunityMenuWorks(AcceptanceTester $I)
    { 
        $I->wantTo(' verify functionalty of Community dropDown Menu  !');
        $I->amOnPage('/'); 

        $I->click('#menu-item-702');
        $I->expectTo('community dropDon Menu !');
        
        // see dropdown  menu
        $I->see('Community'); 
        $I->see('Park Map with Photos'); 
        $I->see('My Photos'); 
        $I->see('My Journeys');
        $I->see('Upload a Photo'); 
        $I->see('My Account'); 
    }

     /**
     * functionalty  language EN/FR
     * click language and display language french/english 
     * */
    public function ensureThaLanguageFeatureWorks(AcceptanceTester $I)
    {    
        $I->wantTo(' verify functionalty of the language EN/FR ! ');
        $I->amOnPage('/'); 

        // menu-item-434 longuage   
        $I->click('#menu-item-434');
        $I->expectTo('liste of he language');
        $I->amOnPage('#pll_switcher'); //language page 

    }
    /**
     * functionalty dropDown language Feature
     * click language and display list language french/english 
     * */
    public function ensureThatDropDownLanguageFeatureWorks(AcceptanceTester $I)
    {
        $I->wantTo(' verify functionalty of the DropDown language Feature ! ');
        $I->amOnPage('/'); 

        // menu-item-434 longuage 
        $I->click('#menu-item-434');
        $I->expectTo('liste of he language');
        
        // see dropdown list language
        $I->see('English');  
        $I->see('Français');
    }

}
