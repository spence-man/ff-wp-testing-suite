<?php
// $ codecept run acceptance expectUserToFillInFormCept.php

$I = new AcceptanceBrowserTester($scenario);
$I->amOnPage('/rwa');
$I->seeInCurrentUrl('/rwa');
$I->click('Register');

$I->seeInCurrentUrl('/rwa/courses');
$I->scrollTo(['class' => 'course-listing-container']);
$I->waitForElementVisible(['link' => 'Register'], 15);
$I->click(['xpath' => '//*[@id="main"]/section[1]/div[4]/a']); #Register

$I->scrollTo(['link' => 'Reserve your spot']);
$I->click(['link' => 'Reserve your spot']);
$I->fillField('//*[@id="input_13_14"]', 'John');
$I->fillField('//*[@id="input_13_18"]', 'Smith');
$I->fillField('//*[@id="input_13_19"]', 'john@smith.com');
$I->fillField('//*[@id="input_13_20"]', '5555555555');

$I->click("Continue to payment");
// Alternate selector
// $I->click(['xpath' => '//*[@id="gform_submit_button_13"]']);
