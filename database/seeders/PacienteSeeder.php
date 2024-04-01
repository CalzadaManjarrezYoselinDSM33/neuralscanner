<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Paciente;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        Paciente::insert([


        [
                'id_paciente'      => 1,
                'nombre'         => 'Omar',
                'ap_paciente'    => 'Alcantara',
                'am_paciente'    => 'Hernandez',
                'edad'           => '72'

        ],
        [
            'id_paciente'      => 2,
            'nombre'         => 'Alicia',
            'ap_paciente'    => 'Alcon',
            'am_paciente'    => 'Henra',
            'edad'           => '20'

    ],
    [
        'id_paciente'      => 3,
        'nombre'         => 'Ortencio',
        'ap_paciente'    => 'Alcantara',
        'am_paciente'    => 'Hernandez',
        'edad'           => '30'

],
    ]);
    }
}
