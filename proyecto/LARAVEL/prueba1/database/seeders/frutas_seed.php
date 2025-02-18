<?php
/* este archivo se genero con con comandos en artisan(seed) */
/* IMPORTANTE!!: no poner ningun comentario fuera de la etiqueta <?php?> ya que da un error */
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class frutas_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) {
            /* OJO: el "DB::" se tiene que importar para poder usarlo y acceder a
            bases de datos. */
            DB::table('frutas')->insert([
                'nombre' => 'cerezas' . $i,
                'descripcion' => 'descripcion de la fruta' . $i,
                'precio' => $i,
                /* fecha en formato americano, coge siempre la actual */
                'fecha'=>date('Y-m-d')
            ]);
        }
        // con el $this a secas estamos referenciando a esta clase.
        $this->command->info('La tabla se ha rellenado correctamente');
    }
}
