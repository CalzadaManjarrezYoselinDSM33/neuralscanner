<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        Doctor::insert([


        [
                'id_doctor'      => 1,
                'nombre'         => 'Omar',
                'ap_pat'         => 'Alcantara',
                'ap_mat'         => 'Hernandez',
                'telefono'       => '7223633',
                'email'          => 'al222110705@gmail.com',
                'password'       => '12345'




        ],
        [
            'id_doctor'      => 2,
            'nombre'         => 'Lucia',
            'ap_pat'         => 'Osorio',
            'ap_mat'         => 'Hernandez',
            'telefono'       => '7747859',
            'email'          => 'al222110706@gmail.com',
            'password'       => '123456'




        ],
        [
            'id_doctor'      => 3,
            'nombre'         => 'Patricia',
            'ap_pat'         => 'Carmona',
            'ap_mat'         => 'Herrera',
            'telefono'       => '778498',
            'email'          => 'al222110707@gmail.com',
            'password'       => 'contraseña'




        ],
    [
        'id_doctor'      => 4,
        'nombre'         => 'Eduardo',
        'ap_pat'         => 'Calzada',
        'ap_mat'         => 'Lopez',
        'telefono'       => '77378844',
        'email'          => 'eduardo5@gmail.com',
        'password'       => '1234567'




]




        ]);
    }
}
