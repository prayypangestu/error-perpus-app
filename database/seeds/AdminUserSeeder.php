<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin Perpus',
            'email' => 'admin@perpus.com',
            'password' => bcrypt(12345678),
            'email_verified_at' => now(),
        ]);

        $user->assignRole('admin');
    }
}
