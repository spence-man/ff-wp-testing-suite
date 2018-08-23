<?php
// codecept run wpunit RWA:WordPressFunction

namespace WordPressFunction;

class WordPressFunctionTest extends \Codeception\TestCase\WPTestCase
{

    public function setUp()
    {
        // before
        parent::setUp();

        // your set up methods here
    }

    public function tearDown()
    {
        // your tear down methods here

        // then
        parent::tearDown();
    }

    public function test_trailingslashit_should_add_slash_when_none_is_present()
    {
        # trailingslashit( $string )-  WordPress specific function
        $this->assertSame( 'foo/', trailingslashit( 'foo' ) );
        $this->assertSame( 'rwa/', trailingslashit( 'rwa' ) );
        $this->assertSame( 'retirementtips/', trailingslashit( 'retirementtips' ) );
    }

}