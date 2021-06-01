<?php

use App\Models\Correo;
use Illuminate\Database\Seeder;

class emailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Correo::class, 20)->create();
    }
}
