<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear 20 usuarios ficticios
      //  User::factory()->count(50)->create();
         // Crea un usuario administrador por defecto
         User::create([
            'name' => 'Admin',
            'email' => 'admin@admin',
            'password' => Hash::make('admin2024'), // Contraseña hasheada
        ]);
    }
}
