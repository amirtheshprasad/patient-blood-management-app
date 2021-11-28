<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;


class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
       

        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'amirtheshprasad@outlook.com')
                    ->type('password', '1234abcd')
                    ->click('@login-button')
                    ->pause(3000)
                    ->assertPathIs('/getpatientcsv');
        });
    }
}
