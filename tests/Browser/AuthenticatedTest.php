<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class AuthenticatedTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function ($browser) {
            $browser->loginAs(User::find(10))
                ->visit('/recordbp')
                ->type('patientid', '1')
                ->type('sbp', '40')
                ->type('dbp', '70')
                ->click('@recordbp-button')
                ->pause(4000)
                ->assertPathIs('/recordbp');

        });
    }
}
