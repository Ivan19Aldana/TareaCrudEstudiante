<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estudiante;
use Illuminate\Support\Facades\DB;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Estudiante')->insert([
            'id'=> '01',
            'nombre' => 'Irma Cabrera',
            'email' => 'Irmamarin@gmail,com',
            'edad' => '49',
            'direccion' => 'Barrio el Estrecho',
        ]);
        DB::table('Estudiante')->insert([
            'id'=> '02',
            'nombre' => 'Douglas Portillo',
            'email' => 'DouglasP@gmail.com',
            'edad' => '35',
            'direccion' => '17 Calle, 10 Avenida',
        ]);
    }
}
