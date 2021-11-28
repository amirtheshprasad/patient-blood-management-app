<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class AuthenticatedNewPatientTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        
        $this->browse(function ($browser) {
            $today = now();
            $browser->loginAs(User::find(10))
                ->visit('/createpatient')
                ->type('name', 'Emily')
                ->type('email', 'emily145@gmail.com')
                ->type('dob', '29-03-1997')
                ->type('details', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, animi possimus impedit')    
                ->click('@createpatient-button')
                ->pause(6000)
                ->assertPathIs('/createpatient');

        });
    }
}
