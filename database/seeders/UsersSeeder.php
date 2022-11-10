<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Criando Usuário
        User::create([
            'name' => 'Marcos Silva',
            'email' => 'marcos@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
