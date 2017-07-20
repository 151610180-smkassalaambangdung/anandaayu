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
        $this->call(Userseed::class);
         $this->call(pelanggansSeeder::class);
         $this->call(mobillsSeeder::class);
    }
}
