<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        $this->call([
            ApplicationTableSeeder::class,
            ProfileTableSeeder::class,
            HeaderRuleTableSeeder::class,
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
