<?php
// $ codecept run acceptance expectLoginToSucceedCept.php --steps


$I = new AcceptanceTester($scenario);
$I->wantTo('login with a valid username and password');
$I->amOnPage('/wp-login.php');

$I->amGoingTo('fill in field with a valid username');
$I->fillField('#user_login', 'admin');

$I->amGoingTo('fill in field with a valid password');
$I->fillField('#user_pass', 'admin');

$I->amGoingTo('click the log in button');
$I->click('Log In');
$I->see('Welcome to WordPress!', '.welcome-panel-content');
?>