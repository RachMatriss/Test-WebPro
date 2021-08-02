<?php

use \Codeception\Util\Locator;

class accissibleCest
{
    public function _before(AcceptanceTester $I)
    {  
           
    }

 /*functionalty of the drop down feature*/
/**
 * click  on drop down feature menu
 * display drop down feature longuage /communty 
 * */
  public function ensureThatDropdownMenuFeatureWorks(AcceptanceTester $I)
    { 
        $I->wantTo(' verify functionalty of the dropDown menu feature ! ');
        $I->amOnPage('/'); 

        // menu-item-434 longuage 
        $I->click('#menu-item-434');
        $I->expectTo('liste of he language');
        // $I->see('');
        
        //menu-item-702  communty 
        $I->click('#menu-item-702');
        $I->expectTo('liste of he communty');
        //$I->see('');
    }


 /*functionalty of the main menu pages*/
/**click the main menu 
  * pages like social media ...
  * 
  * */

    public function ensureThatMenuPagesFeatureWorks(AcceptanceTester $I)
    {
        $I->wantTo(' verify functionalty of the main menu pages ! ');
        $I->amOnPage('/'); 
         
        $I->click('#menu-item-87');
        $I->expectTo('The galory Page');
        $I->amOnPage('/gallery/');
        $I->see('Our Gallery','h2');
        /*----------------------*/
        $I->click('#menu-item-770');
        $I->expectTo('The social media page ');
        $I->amOnPage('/social-media/');
        /*--------------------*/
        $I->click('#menu-item-702');
        $I->expectTo('The communty page !');
        $I->amOnPage('#community');

    }

 /*functionalty of the logo */
/**
 * click on the logo 
 * expect to  see homppage 
 * */
    public function ensureThatLogoisWorks(AcceptanceTester $I)
    {   
        $I->wantTo('verify functionalty of the logo! ');
        $I->amOnPage('/social-media/'); 
        
        $I->expectTo('redirect to the Home Page');
        $I->click(Locator::find('img', ['title' => '200110_BWT_Horizontal']));
        
        $I->amOnPage('/');
        $I->see('Without your support and donations the trail cannot exist.','h5');
    }
}
