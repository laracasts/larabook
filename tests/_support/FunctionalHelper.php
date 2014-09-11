<?php namespace Codeception\Module;

use Laracasts\TestDummy\Factory as TestDummy;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class FunctionalHelper extends \Codeception\Module {

    /**
     * Prepare Larabook account, and log in.
     */
    public function signIn()
    {
        $email = 'foo@example.com';
        $username = 'Foobar';
        $password = 'foo';

        $this->haveAnAccount(compact('username', 'email', 'password'));

        $I = $this->getModule('Laravel4');

        $I->amOnPage('/login');
        $I->fillField('email', $email);
        $I->fillField('password', $password);
        $I->click('Sign In');
    }

    /**
     * Fill out the publish status form.
     *
     * @param $body
     */
    public function postAStatus($body)
    {
        $I = $this->getModule('Laravel4');

        $I->fillField('body', $body);
        $I->click('Post Status');
    }

    /**
     * Create a Larabook user account in the database.
     *
     * @param array $overrides
     * @return mixed
     */
    public function haveAnAccount($overrides = [])
    {
        return $this->have('Larabook\Users\User', $overrides);
    }

    /**
     * Insert a dummy record into a database table.
     *
     * @param $model
     * @param array $overrides
     * @return mixed
     */
    public function have($model, $overrides = [])
    {
        return TestDummy::create($model, $overrides);
    }
}