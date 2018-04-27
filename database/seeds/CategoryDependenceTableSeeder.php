<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CategoryDependenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        {
            DB::table('category_dependences')->insert([
                'name' => 'Facultad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

            ]);
            DB::table('category_dependences')->insert([
                'name' => 'Vicerrectorado',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

            ]);
            DB::table('category_dependences')->insert([
                'name' => 'Centro o Instituto',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

            ]);
            DB::table('category_dependences')->insert([
                'name' => 'Direccion',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

            ]);
            DB::table('category_dependences')->insert([
                'name' => 'Departamento',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

            ]);
            DB::table('category_dependences')->insert([
                'name' => 'Oficina',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

            ]);
        }
    }
}
