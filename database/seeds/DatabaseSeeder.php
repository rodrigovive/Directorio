<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ManagerOccupationTable::class,
            CategoryDependenceTableSeeder::class,
            NatureDependenceTableSeeder::class,
            UserTableSeeder::class,
        ]);
    }
}
