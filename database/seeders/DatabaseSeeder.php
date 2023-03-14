<?php

namespace Database\Seeders;

use Database\Seeders\RoleSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CompanySlideSeeder;
use Database\Seeders\FreelanceSlideSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([

            RoleSeeder::class,
            UserSeeder::class,
            CompanySlideSeeder::class,
            FreelanceSlideSeeder::class

        ]);    }
}
