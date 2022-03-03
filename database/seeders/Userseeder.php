<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(['id' => 1,'name' => 'Admin','email' => 'admin@gmail.com', 'password' =>'$2y$10$eMni1Y/TMPbvwkQ4IaNn.OFoR6BmXxMqWt/JqlYpqyVA0xL.ek5G2','rol_user'=>'admin']);
        User::firstOrCreate(['id' => 2,'name' => 'Usuario','email' => 'user@gmail.com',  'password' =>'$2y$10$pcmk51dNLQ4bxkcOiFi1Y.uQpD5M2Cz.Y3cFBQIr79q7ZNLo1XTcG', 'rol_user'=>'user']);
    }
}
