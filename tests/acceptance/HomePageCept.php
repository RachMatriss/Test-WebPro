<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo(' verify the home Page ! ');

$I->amOnPage('/');
$I->see('Without your support and donations the trail cannot exist.','h5');