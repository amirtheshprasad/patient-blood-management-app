<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserTest extends TestCase
{
    

    /**
     * A basic unit test example.
     *
     * @return void
     */
    
       
    public function test_basic_test()
    {
        $response = $this->get('/');

        $response->dumpHeaders();

        $response->dumpSession();

        $response->dump();
        $this->assertTrue(true);
    }

    public function test_login_form(){
       
        $response = $this->get('/login');
        $response -> assertStatus(200);
    }
    public function test_register_form(){
     
        $response = $this->get('/register');
        $response -> assertStatus(200);
    }
    public function test_login_form_loggedin(){
        $user = User::factory()->create();

        $response = $this->actingAs($user);
        
        $response = $this->get('/login');
        $response -> assertStatus(302);

    }
    public function test_loggedin_dashboard(){
        $user = User::factory()->create();

        $response = $this->actingAs($user);
        
        $response = $this->get('/db');
        $response -> assertStatus(200);

    }
    public function test_loggedin_newpatient(){
        $user = User::factory()->create();

        $response = $this->actingAs($user);
       
        $response = $this->get('/createpatient');
        $response -> assertStatus(200);
        
    }
    public function test_loggedin_addbp(){
        $user = User::factory()->create();

        $response = $this->actingAs($user);
   
        $response = $this->get('/recordbp');
        $response -> assertStatus(200);
        
    }
    public function test_loggedin_getcsv(){
        $user = User::factory()->create();

        $response = $this->actingAs($user);
       
        $response = $this->get('/getpatientcsv');
        $response -> assertStatus(200);
        
    }
    public function test_guest_user(){
        $this->assertGuest($guard = null);
    }
    public function test_authenticated_user(){
        $user = User::factory()->create();
        $response = $this->actingAs($user);
        $this->assertAuthenticated($guard = null);

    }
    public function test_authenticated_specific_user(){
        $user = User::factory()->create();
        $response = $this->actingAs($user);
        $this->assertAuthenticatedAs($user, $guard = null);

    }
    public function test_see_submit(){
        $user = User::factory()->create();
        $response = $this->actingAs($user);
        $response = $this->get('/recordbp');
        // dd($response);
        $response->assertSee('submit', $escaped = true);
    }
    public function test_see_in_order_enter_submit(){
        $user = User::factory()->create();
        $response = $this->actingAs($user);
        $response = $this->get('/recordbp');
        // dd($response);
        $response->assertSeeTextInOrder(['Enter', 'Data'], $escaped = false);
    }

    
   
  




}