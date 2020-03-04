<?php

namespace Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use Illuminate\Foundation\Testing\WithFaker;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guest_can_view_page()
    {
        $this->withoutExceptionHandling();

        $this->get('/users')
            ->assertStatus(Response::HTTP_OK)
            ->assertViewIs('users.index');
    }

    /** @test */
    // public function can_view_user()
    // {
    //     @todo - test
    //     $user = factory(User::class, 1)->create();

    //     Livewire::test('users-index');
        
    //     $this->assertTrue(User::whereName($user->name)->exists());
    // }

    /** @test */
    // public function can_create_new_user()
    // {
    //     //validate
    //     //create


    //     Livewire::test('users-create')
    //             ->set('name', 'foo')
    //             ->call('create');

    //     $this->assertTrue(User::whereName('foo')->exists());
    // }
}
