<?php
// codecept run wpunit TestUser/UserEditorTest.php
namespace TestUser;

class UserEditorTest extends \Codeception\TestCase\WPTestCase
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

    // tests
    public function test_user_with_editor_role_can_edit_others_posts() {
        $user_id = self::factory()->user->create( array(
            'role' => 'editor',
        ) );

        $this->assertTrue( user_can( $user_id, 'edit_others_posts' ) );
    }

}