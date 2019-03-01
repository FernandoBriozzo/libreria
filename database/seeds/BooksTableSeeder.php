<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<3; $i++) {
            DB::table('books')->insert([
                'name' => str_random(10),
                'description' => str_random(20),
            ]);
        }
    }
}
