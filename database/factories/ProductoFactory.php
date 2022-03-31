<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ProductoFactory extends Factory
{
    /** 
     * The name of the factory 
     * 
     * @var string
    */
    protected $model = Producto::class;

     /** 
      * 
      *
      *@return array
     */
    public function definition() 
    {
        return [
            
            'nombre' => $this -> faker -> sentence(),	
            'descripcion' => $this -> faker -> paragraph(), 	
            'categoria' => $this ->faker -> randomElement(['Celulares','Computadores','Electrodomesticos']),	
            'marca' => $this -> faker -> randomElement(['Samsung','LG','Xiaomi']),
            'precio' => $this -> faker -> randomNumber()
        ];
    }
}
