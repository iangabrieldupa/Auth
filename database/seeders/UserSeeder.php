<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Ian Gabriel Dupa',
                'email' => 'iangabrieldupa@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Mark Joseph Dupa',
                'email' => 'markjosephdupa@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Sandra Abigail Dupa',
                'email' => 'sandraabigaildupa@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password')
            ],
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
