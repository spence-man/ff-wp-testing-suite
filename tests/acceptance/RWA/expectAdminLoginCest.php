<?php
// $ codecept run acceptance RWA:expectAdminLoginCest

class expectAdminLoginCest
{

    public function _before(AcceptanceTester $I)
    {
    }
    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function expectsAdminToLogin(AcceptanceTester $I) {
        $I->wantTo('log in as an Admin');
        $I->amGoingTo('log in as Admin');
        $I->loginAsAdmin();
        $I->amOnPage("/wp-admin");
        $I->see("Welcome to WordPress");
        $I->seeInCurrentUrl('/wp-admin');
    }
}
