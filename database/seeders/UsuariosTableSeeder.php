<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name'    => 'Administrador',
        //     'email'    => 'admin@jsanmate.com',
        //     'password'   =>  Hash::make('password'),
        //     'remember_token' =>  str_random(10),
        // ]);

        \DB::table("users")->insert(
            array(
                'name'    => $faker->firstName("Administrador"),
                'email'     => $faker->email("admin@jsanmate.com"),
                'password'  => $faker->password,
                'remember_token' =>  str_random(10),
            ));
    }
}
