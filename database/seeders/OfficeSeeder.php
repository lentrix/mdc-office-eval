<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offices = [
            [
                'name' => 'Human Resources',
                'office_head' => 'Dr. Josefina J. Pangan',
            ],
            [
                'name' => 'Finance',
                'office_head' => 'Mr. Artemio M. Gulilat',
            ],
            [
                'name' => 'Book Store',
                'office_head' => 'Ms. Cymae Joy L. Josol',
            ],
            [
                'name' => 'IT Support',
                'office_head' => 'Mr. Benjie B. Lenteria',
            ],
            [
                'name' => 'OSADS',
                'office_head' => 'Ms. Josephine D. Aplacador',
            ],
            [
                'name' => 'Registrar',
                'office_head' => 'Mr. Jose Ruel B. Alampayan',
            ],
            [
                'name' => 'Library',
                'office_head' => 'Ms. Edna D. Coscos',
            ],
            [
                'name' => 'Student Services',
                'office_head' => 'Dr. Angelica T. Lanoy',
            ],
            [
                'name' => 'Guidance & Counseling',
                'office_head' => 'Ma. Raym Kayleigh T. Negro',
            ],
            [
                'name' => 'Security Services',
                'office_head' => 'Mr. Roseller James Elludar'
            ],
            [
                'name' => 'CAST Department',
                'office_head' => 'Dr. Josefina J. Pangan'
            ],
            [
                'name' => 'Business Department',
                'office_head' => 'Ms. Maria Angelica B. Calunsag'
            ],
            [
                'name' => 'Hospitality Department',
                'office_head' => 'Ms. Sheila Monte de Ramos'
            ],
            [
                'name' => 'Nursing Department',
                'office_head' => 'Ms. Rosario Poligrates'
            ],
            [
                'name' => 'Education Department',
                'office_head' => 'Dr. De Marvy B. Agas'
            ],
            [
                'name' => 'Criminology Department',
                'office_head' => 'Mr. Avelino Lofranco'
            ],
            [
                'name' => 'School of Graduate Studies',
                'office_head' => 'Dr. Ceferina H. Ranario'
            ],
            [
                'name' => 'Elementary Department',
                'office_head' => 'Ms. Vivien C. Mascariñas'
            ],
            [
                'name' => 'Junior High School Department',
                'office_head' => 'Ms. Maria Anna Reserva'
            ],
            [
                'name' => 'Senior High School Department',
                'office_head' => 'Dr. Jasmin M. Sumipo'
            ]
        ];

        foreach ($offices as $office) {
            \App\Models\Office::create($office);
        }
    }
}
