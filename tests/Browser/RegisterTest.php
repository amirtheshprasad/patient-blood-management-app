<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
       

        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->type('name', 'Amirthesh Prasad')
                    ->type('email', 'amirtheshprasad@gmail.com')
                    ->type('password', '1234abcd')
                    ->type('passwordc', '1234abcd')
                    ->click('@register-button')
                    ->pause(3000)
                    ->assertPathIs('/login');
        });
    }
}
