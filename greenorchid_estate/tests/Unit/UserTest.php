<?php

namespace Tests\Unit;

use App\Models\Post;
use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PhpParser\Node\Stmt\Use_;
use Tests\TestCase;
use Tests\Unit\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');
      
        $response->assertStatus(200);
       
      
    }
   
}
