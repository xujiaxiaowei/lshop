<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents(__DIR__ . '/../data/provinces.json');
        $data = json_decode($data, true);

        DB::table('provinces')->insert($data);
    }
}
