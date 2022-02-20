<?php

<<<<<<< HEAD
=======
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> 66e2b0650966fdc9d50262954a5c4bbf650e6681
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
<<<<<<< HEAD
            'name'    => 'John Smith',
            'email'    => 'john_smith@gmail.com',
            'password'   =>  Hash::make('password'),
            'remember_token' =>  str_random(10),
        ]);
    }
}
=======
            'name'  => 'Jose Sánchez',
            'email'  => 'admin@jsnamte.com',
            'password'  => Hash::make('password'),
            'remember_token'  =>  str_random(10),

        ]);
    }
}

>>>>>>> 66e2b0650966fdc9d50262954a5c4bbf650e6681
