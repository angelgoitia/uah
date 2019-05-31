<?php

use Illuminate\Database\Seeder;
use App\Producto;
class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $producto = new Producto();
        $producto->name = 'Telefono LG Phoniex 3';
        $producto->stock = 10;
        $producto->precios = 100.00;
        $producto->save();

        $producto = new Producto();
        $producto->name = 'Telefono Motorola e4';
        $producto->stock = 10;
        $producto->precios = 100.00;
        $producto->save();

        $producto = new Producto();
        $producto->name = 'Telefono Samsung S3 mini';
        $producto->stock = 10;
        $producto->precios = 300.00;
        $producto->save();

        $producto = new Producto();
        $producto->name = 'Reloj Inteligente Smartwatch Gt08';
        $producto->stock = 10;
        $producto->precios = 100.00;
        $producto->save();
    }
}
