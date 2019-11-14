<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       
        DB::table('empleado')->insert([
            'idempleado' => '75958476',
            'emp_nombre' => 'ERWIN',
            'emp_appaterno' => 'BURGOS',
            'emp_apmaterno' => 'RAMÍREZ',
            'emp_telefono' => '916175758',
            'emp_direccion' => 'JR MARAVILLAS #246',
            'emp_sexo' => 'M',
            //'emp_foto' => '',
            'emp_nacimiento' => '1995-12-21',
            'emp_civil' => 'SOLTERO(A)',
            'emp_estado' => 'ACTIVO',
        ]);
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'Admin@admin.com',
            'password' => bcrypt('123456'),
            'emp_id' => '75958476',
            'tipo'=> 'ADMIN',
        ]);
        DB::table('users')->insert([
            'name' => 'NCCQ',
            'email' => 'cielito1998@hotmail.com',
            'password' => bcrypt('123456'),
            'emp_id' => '71504263',
            'tipo'=> 'USUARIO',
        ]);
        DB::table('empleado')->insert([
            'idempleado' => '71504263',
            'emp_nombre' => 'NOEMI',
            'emp_appaterno' => 'CERVERA',
            'emp_apmaterno' => 'QUIROZ',
            'emp_telefono' => '931822560',
            'emp_direccion' => 'JR 28 D EJULIO',
            'emp_sexo' => 'F',
            //'emp_foto' => '',
            'emp_nacimiento' => '1998-07-12',
            'emp_civil' => 'SOLTERO(A)',
            'emp_estado' => 'ACTIVO',
        ]);
    }
}
