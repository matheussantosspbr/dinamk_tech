<?php

namespace Database\Seeders;

use App\Models\ClientModel;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public static function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@dinamktech.com',
            'password' => Hash::make('admin123'),
        ]);

        // Insere o relacionamento na tabela model_has_roles
        DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => 'App\Models\User',
            'model_id' => $user->id, // Pega o ID do usuário recém-criado
        ]);
    }
}
