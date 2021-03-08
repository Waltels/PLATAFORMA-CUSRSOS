<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Walter Laura Soto',
            'email' => 'waltels2019@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        User::factory(99)->create();
    }
}
