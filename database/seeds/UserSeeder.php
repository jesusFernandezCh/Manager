<?php

use Illuminate\Database\Seeder;
use App\ProfitCenter;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id'                =>1,
                'name'              => 'admin',
                'email'             => 'admin@gmail.com',
                'password'          => bcrypt('123456'),
                'estatus'            => 'active',
                'email_verified_at' => now(),
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
        ]);
    }
}
