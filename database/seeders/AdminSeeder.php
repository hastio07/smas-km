<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'role_id' => 1,
                'name' => 'Administrator',
                'username' => 'administrator',
                'email' => 'admin@admin.test',
                'email_verified_at' => now(),
                'password' => bcrypt('admin'),
            ],
        ];
        foreach ($admins as $admin) {
            Admin::create($admin);
        }
    }
}
