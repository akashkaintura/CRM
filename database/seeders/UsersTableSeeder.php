<?php

namespace Database\Seeders;


use App\Models\User;
use Hash;
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
        User::updateOrCreate(['id' => 1],
            ['name'      => 'Akash',
            'email'     => 'akash@gmail.com',
            'password'  => Hash::make('test'),
            ]);
    }
}
