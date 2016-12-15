<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Chuck Norris',
            'username' => 'chuck.norris',
            'email' => 'alejandro.seisdedos@gft.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);

        factory(User::class, 49)->create();
    }
}
