<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Definition;
use App\Models\Word;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            PermissionSeeder::class,
            PermissionRoleSeeder::class,
            WordCategorySeeder::class,
            WordTagSeeder::class,
            DefinitionSeeder::class
        ]);
    }
}
