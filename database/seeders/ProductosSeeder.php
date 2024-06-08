<?php

use App\Models\Producto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::get('https://fakeapi.platzi.com/');
        $productos = $response->json();

        foreach ($productos as $producto) {
            Producto::create([
                'nombre' => $producto['title'],
                'descripcion' => $producto['description'],
                'precio' => $producto['price'],
                'imagen' => $producto['images'][0],
            ]);
        }
    }
}
