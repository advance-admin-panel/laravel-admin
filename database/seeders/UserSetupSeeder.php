<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
                'name' => 'Administrator',
                'slug' => 'administrator',
                'active' => 1,
            ]);

        $user = User::create([
            'uuid' => Str::uuid()->toString(),
            'username' => "jhonedue49",
            'first_name' => "Jhone",
            'last_name' => "Due",
            'is_admin' => 1,
            'password' => Hash::make(12345678),
            'email' => "administrator@example.com",
        ]);

        $user->roles()->attach(Role::ADMIN_ID);
    }
}
