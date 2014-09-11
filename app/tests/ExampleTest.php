<?php

class ExampleTest extends TestCase {

    public function setUp(){
        parent::setUp();
        Larabook\Users\User::truncate();

    }

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$user = Larabook\Users\User::create([
           'username' => "joe",
            "email" => 'jeff_way@yahoo.com',
            'password' => 'foo'
        ]);

        Auth::login($user);
	}

}
