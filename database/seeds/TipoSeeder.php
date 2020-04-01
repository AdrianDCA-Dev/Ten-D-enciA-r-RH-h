<?php

use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo = new \App\Model\Intendencia\Tipo_user();
        $tipo->nombre = "Encargado de RRHH";
        $tipo->descripcion = "Encargado de Recursos Humanos";

        $tipo->save();

    }
}
