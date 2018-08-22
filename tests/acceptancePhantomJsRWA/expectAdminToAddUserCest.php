<?php
// $ codecept run acceptance expectAdminToAddUserCest.php

class expectAdminToAddUserCest
{

    public function _before(AcceptancePhantomJsTester $I)
    {
    }

    public function _after(AcceptancePhantomJsTester $I)
    {
    }

    public function expectsAddNewUser(AcceptancePhantomJsTester $I) {
        $I->wantTo('login as an Admin and add a new user');
        $I->amGoingTo('log in as Admin');
        $I->loginAsAdmin();
        $I->amOnPage('/wp-admin/user-new.php');
        $I->fillField('#user_login', 'testuser');
        $I->fillField('#email', 'testuser@default.com');
        $I->amGoingTo('submit form and add new user');
        $I->click('Add New User');
        $I->see('Invitation email sent to new user. A confirmation link must be clicked before their account is created.');
    }
}