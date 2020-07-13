<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(BooksTableSeeder::class);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('5ps6bT38'),
            'editor' => true
        ]);
    }
}
