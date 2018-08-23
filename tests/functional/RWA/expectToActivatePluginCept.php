<?php
// $ codecept run functional RWA:expectToActivatePluginCept

$I = new FunctionalTester($scenario);
$I->wantTo('log in as an Admin and activate plugin');
$I->loginAsAdmin();
$I->amOnPluginsPage();
$I->seeInCurrentUrl('/wp-admin/plugins.php');
$I->amGoingTo('activate plugin');
$I->activatePlugin('akismet');
$I->amGoingTo('check if plugin is activated');
$I->seePluginActivated('akismet');
?>
