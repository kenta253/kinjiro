<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;

class RegisterControllerTest extends TestCase
{

  use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
     public function testCreate()
     {
         $this->withoutExceptionHandling();

         $testUserName = 'テストユーザー';
         $testEmail = 'test@co.jp';
         $testPassword = 'password123';
         $testPasswordConfirmation = 'password123';

         $response = $this->post(route('register'),
             [
                 'name' => $testUserName,
                 'email' => $testEmail,
                 'password' => $testPassword,
                 'password_confirmation' => $testPasswordConfirmation,
             ]
         );


         // 投稿内容がDBに登録されているかテスト
         $this->assertDatabaseHas('users', [
             'name' => $testUserName,
             'email' => $testEmail,
         ]);

         // DBに登録されているパスワードと、テスト送信したパスワードを比較
         $this->assertTrue(Hash::check($testPassword,
         User::where('name', $testUserName)->first()->password
         ));

         $response->assertRedirect(route('articles.index'));
     }
}
