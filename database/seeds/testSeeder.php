<?php

use Illuminate\Database\Seeder;
class testSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Test::class, 10)->create();
    }
}
