<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Post::factory(50)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /**
         * @var \App\Models\User $adminUser
         */
        $adminUser = User::factory()->create([
            'email' => 'admin@example.com',
            'name' => 'Admin',
            'password' => bcrypt('admin123'),
        ]);

        $adminRole = Role::create([
            'name'=>'admin',
        ]);
        $adminUser->assignRole($adminRole);
    }
}
