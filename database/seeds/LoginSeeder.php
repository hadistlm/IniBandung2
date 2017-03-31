<?php

use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user = new \App\User;
        $user->nama_usr = 'Fikri Mujaddid S';
        $user->email = 'fik@ri.id';
        $user->username = 'Fikri';
        $user->password = bcrypt('Fikri');
        $user->save();


    }
}
