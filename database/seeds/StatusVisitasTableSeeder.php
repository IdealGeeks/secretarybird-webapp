<?php

use Illuminate\Database\Seeder;

class StatusVisitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('visitas_status_visitas')->insert([
            [
                'status_visitas_id' => '1',
                'visita_id' => '1',
            ],
            [
                'status_visitas_id' => '2',
                'visita_id' => '2',
            ],
            [
                'status_visitas_id' => '1',
                'visita_id' => '3',
            ],
            [
                'status_visitas_id' => '2',
                'visita_id' => '4',
            ],
            [
                'status_visitas_id' => '1',
                'visita_id' => '5',
            ]
        ]);
    }
}
