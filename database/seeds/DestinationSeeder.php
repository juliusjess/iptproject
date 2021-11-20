<?php

use Illuminate\Database\Seeder;
class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\DestinationModel::class,5)->create();
    }
}
