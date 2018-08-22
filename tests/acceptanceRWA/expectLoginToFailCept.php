<?php
// $ codecept run acceptance expectLoginToFailCept.php --steps

$I = new AcceptanceTester($scenario);
$I->wantTo('attempt to login with an invalid username and password');
$I->amOnPage('/wp-login.php');

$I->amGoingTo('fill in field with an invalid username');
$I->fillField('#user_login', 'davert');

$I->amGoingTo('fill in field with an invalid password');
$I->fillField('#user_pass', 'qwerty');

$I->amGoingTo('click the log in button');
$I->click('Log In');
$I->see('ERROR: Invalid username.', '#login_error');
