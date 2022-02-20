<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======

use App\User;
>>>>>>> 66e2b0650966fdc9d50262954a5c4bbf650e6681

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        Eloquent::unguard();
        $this->call(UsersTablesSeeder::class);
=======
        App\User::unguard();
        $this->call(UsuariosTableSeeder::class);
>>>>>>> 66e2b0650966fdc9d50262954a5c4bbf650e6681
    }
}
