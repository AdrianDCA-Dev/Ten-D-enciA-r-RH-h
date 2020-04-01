<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrativo = new \App\User();
        $administrativo->name = "Administrador";
        $administrativo->nombres = "Adrian";
        $administrativo->apellidos = "Choque Alvarado";
        $administrativo->categoria = "Consultor en linea";
        $administrativo->estado = 1;
        $administrativo->email = "admin@admin.com";
        $administrativo->tipo_user_id = 1;

        $administrativo->password = bcrypt('123456789');
        $administrativo->save();
    }
}
