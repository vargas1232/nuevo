<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    public function index()
    {
        $matriz = [
            ['nombre' => 'Argentina', 'bandera' => 'argentina.png', 'descripcion' => 'País sudamericano conocido por el tango y sus paisajes variados.'],
            ['nombre' => 'Brasil', 'bandera' => 'brasil.png', 'descripcion' => 'País famoso por el carnaval de Río y el Amazonas.'],
            ['nombre' => 'Canadá', 'bandera' => 'canada.png', 'descripcion' => 'País en América del Norte con vastos paisajes y ciudades modernas.'],
            ['nombre' => 'China', 'bandera' => 'china.png', 'descripcion' => 'Nación asiática con una de las historias más antiguas y ricas.'],
            ['nombre' => 'España', 'bandera' => 'españa.png', 'descripcion' => 'País europeo conocido por su arquitectura y tradiciones.'],
            ['nombre' => 'Francia', 'bandera' => 'francia.png', 'descripcion' => 'Famosa por su gastronomía y la Torre Eiffel en París.'],
            ['nombre' => 'Alemania', 'bandera' => 'alemania.png', 'descripcion' => 'País con una fuerte economía y rica historia cultural.'],
            ['nombre' => 'Colombia', 'bandera' => 'colombia.png', 'descripcion' => 'Conocido por su café, su biodiversidad y su vibrante cultura, incluyendo la cumbia y el vallenato.'],
            ['nombre' => 'Italia', 'bandera' => 'italia.png', 'descripcion' => 'Famoso por su comida, arte y monumentos históricos.'],
            ['nombre' => 'Japón', 'bandera' => 'japon.png', 'descripcion' => 'Isla asiática famosa por su tecnología y cultura tradicional.'],
            ['nombre' => 'México', 'bandera' => 'mexico.png', 'descripcion' => 'Famoso por su cultura y comida única, y sus playas hermosas.'],
            ['nombre' => 'Nigeria', 'bandera' => 'nigeria.png', 'descripcion' => 'País africano con una rica diversidad cultural y de recursos.'],
            ['nombre' => 'Perú', 'bandera' => 'peru.png', 'descripcion' => 'Hogar de Machu Picchu y una rica historia incaica.'],
            ['nombre' => 'Rusia', 'bandera' => 'rusia.png', 'descripcion' => 'El país más grande del mundo, conocido por su historia y arquitectura.'],
            ['nombre' => 'Sudáfrica', 'bandera' => 'sudafrica.png', 'descripcion' => 'Conocido por su biodiversidad y el Parque Nacional Kruger.'],
            ['nombre' => 'Corea del Sur', 'bandera' => 'corea_del_sur.png', 'descripcion' => 'Conocida por su cultura pop y avances tecnológicos.'],
            ['nombre' => 'Reino Unido', 'bandera' => 'reino-unido.png', 'descripcion' => 'Famoso por su monarquía y monumentos históricos.'],
            ['nombre' => 'Estados Unidos', 'bandera' => 'estados-unidos.png', 'descripcion' => 'Potencia mundial con gran influencia cultural y económica.'],
            ['nombre' => 'Australia', 'bandera' => 'austria.png', 'descripcion' => 'País oceánico conocido por su fauna única y la Gran Barrera de Coral.'],
            ['nombre' => 'Egipto', 'bandera' => 'egipto.png', 'descripcion' => 'Famoso por sus antiguas pirámides y el río Nilo.'],
            ['nombre' => 'venezuela', 'bandera' => 'venezuela.png', 'descripcion' => 'Famoso por sus antiguas pirámides y el río Nilo.'],
        ];

        // Retornar la matriz a la vista
        return view('/dashboard', compact('matriz'));
    }
}
