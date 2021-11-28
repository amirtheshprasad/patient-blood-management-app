<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class AuthenticatedGetCSVTest extends DuskTestCase
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
                ->visit('/getpatientcsv')
                ->click('@csv-button')
                ->pause(3000)
                ->assertPathIs('/getpatientcsv');

        });
    }
}
