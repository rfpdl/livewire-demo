<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        factory(User::class, 1)->create([
            'email' => 'roy@test.com'
        ]);

        factory(User::class, 49)->create();
    }
}
