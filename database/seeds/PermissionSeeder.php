<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Permission')->insert([
            [
                'id'                =>1,
                'name'              => 'Create',
                'slug'              => 'create',
                'description'       => 'Hacer nuevos resgistros',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                =>2,
                'name'              => 'Update',
                'slug'              => 'update',
                'description'       => 'Actualizar resgistros',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                =>3,
                'name'              => 'Show',
                'slug'              => 'show',
                'description'       => 'mostrar resgistros',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                =>4,
                'name'              => 'Delete',
                'slug'              => 'delete',
                'description'       => 'Eliminar resgistros',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
        ]);
    }
}
