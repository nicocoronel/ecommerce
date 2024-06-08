<?php

use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::get('https://randomuser.me/api/?results=10');
        $usuarios = $response->json()['results'];

        foreach ($usuarios as $usuario) {
            Usuario::create([
                'name' => $usuario['name']['first'] . ' ' . $usuario['name']['last'],
                'email' => $usuario['email'],
                'password' => Hash::make('password'),
            ]);
        }
    }
}
