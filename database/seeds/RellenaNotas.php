<?php

use Illuminate\Database\Seeder;

class RellenaNotas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i <=40 ; $i++) { 
            # code...
            DB::table('notes')->insert(array(
                'title'=>'Mi nota '.$i,
                'description'=>'La descripcion de la nota '.$i
            ));
        }
        $this->command->info('Tabla de notas rellenadas correctamente');
    }
}
