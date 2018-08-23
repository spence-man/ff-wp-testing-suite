<?php
// $ codecept run functional RWA:AddPostAsAdminCept

$I = new FunctionalTester($scenario);
$I->wantTo("Add a post as an admin");
$I->loginAsAdmin();
$I->amOnPage('/wp-admin/edit.php');
$I->click('Add New');
$I->fillField('#title','Title of Post');
$I->fillField('#content','Sample Text inside body element');
$I->amGoingTo('submit a post as a admin');
$I->click( 'Publish' );
?>
