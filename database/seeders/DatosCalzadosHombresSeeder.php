<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatosCalzadosHombresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calzado')->insert([
            'marca' => 'Nike',
            'precio' => 250.00,      
            'tipo' => 'hombre',
            'estado' => 'Normal', 
            'detalle' => 'Cafe 24',
            'imagen' => 'cafenike.jpg',
        ]);
        DB::table('calzado')->insert([
            'marca' => 'Fila',
            'precio' => 300.00,      
            'tipo' => 'hombre',
            'estado' => 'Normal', 
            'detalle' => 'black modern',
            'imagen' => 'filablack_.jpg',
        ]);
        DB::table('calzado')->insert([
            'marca' => 'Fila',
            'precio' => 340.00,      
            'tipo' => 'hombre',
            'estado' => 'Normal', 
            'detalle' => 'Red classic',
            'imagen' => 'filared.jpg',
        ]);
        DB::table('calzado')->insert([
            'marca' => 'Nike',
            'precio' => 290.00,      
            'tipo' => 'hombre',
            'estado' => 'Normal', 
            'detalle' => 'Black classic',
            'imagen' => 'nikesss.jpg',
        ]);
        DB::table('calzado')->insert([
            'marca' => 'Puma',
            'precio' => 360.00,      
            'tipo' => 'hombre',
            'estado' => 'Normal', 
            'detalle' => 'dark white',
            'imagen' => 'pumablack.jpg',
        ]);
        DB::table('calzado')->insert([
            'marca' => 'Puma',
            'precio' => 280.00,      
            'tipo' => 'hombre',
            'estado' => 'Normal', 
            'detalle' => 'cream classic',
            'imagen' => 'pumita.jpg',
        ]);
        DB::table('calzado')->insert([
            'marca' => 'Adidas',
            'precio' => 300.00,      
            'tipo' => 'hombre',
            'estado' => 'Normal', 
            'detalle' => 'coffee color',
            'imagen' => 'sambaadidas.jpg',
        ]);
        DB::table('calzado')->insert([
            'marca' => 'Funcional',
            'precio' => 350.00,      
            'tipo' => 'hombre',
            'estado' => 'Normal', 
            'detalle' => 'modern classic',
            'imagen' => 'z2.jpg',
        ]);
        DB::table('calzado')->insert([
            'marca' => 'Voran',
            'precio' => 400.00,      
            'tipo' => 'hombre',
            'estado' => 'Normal', 
            'detalle' => 'dark classic',
            'imagen' => 'z4.jpg',
        ]);
        DB::table('calzado')->insert([
            'marca' => 'C/Moran',
            'precio' => 450.00,      
            'tipo' => 'hombre',
            'estado' => 'Normal', 
            'detalle' => 'Orange',
            'imagen' => 'z5.jpg',
        ]);
        DB::table('calzado')->insert([
            'marca' => 'Funcional',
            'precio' => 290.00,      
            'tipo' => 'hombre',
            'estado' => 'Normal', 
            'detalle' => 'coffe classic',
            'imagen' => 'z1.jpg',
        ]);
        DB::table('calzado')->insert([
            'marca' => 'Adidas',
            'precio' => 450.00,      
            'tipo' => 'kidman',
            'estado' => 'Normal', 
            'detalle' => 'Negro y blanco',
            'imagen' => 'adidaskid.jpg',
        ]);
        DB::table('calzado')->insert([
            'marca' => 'McQueen',
            'precio' => 480.00,      
            'tipo' => 'kidman',
            'estado' => 'Normal', 
            'detalle' =>' white black',
            'imagen' => 'mcqueen.jpg',
        ]);
        DB::table('calzado')->insert([
            'marca' => 'McQueen',
            'precio' => 480.00,      
            'tipo' => 'kidman',
            'estado' => 'Normal', 
            'detalle' =>' white y red',
            'imagen' => 'mcred.jpg',
        ]);
        DB::table('calzado')->insert([
            'marca' => 'Nike',
            'precio' => 280.00,      
            'tipo' => 'kidman',
            'estado' => 'Normal', 
            'detalle' =>' Plomo y celeste',
            'imagen' => 'nikeblack.jpg',
        ]);
        DB::table('calzado')->insert([
            'marca' => 'Nike',
            'precio' => 320.00,      
            'tipo' => 'kidman',
            'estado' => 'Normal', 
            'detalle' =>'white clean',
            'imagen' => 'nikekid.jpg',
        ]);
        DB::table('calzado')->insert([
            'marca' => 'Nike',
            'precio' => 330.00,      
            'tipo' => 'kidman',
            'estado' => 'Normal', 
            'detalle' =>'kids colors',
            'imagen' => 'niketri.jpg',
        ]);
       /* DB::table('calzado')->insert([
            'marca' => 'Puma',
            'precio' => 240.00,      
            'tipo' => 'kidman',
            'estado' => 'Normal', 
            'detalle' =>'black classic',
            'imagen' => 'PumaToddler.jpg',
        ]);*/
        DB::table('calzado')->insert([
            'marca' => 'McQueen',
            'precio' => 600.00,      
            'tipo' => 'kidman',
            'estado' => 'Normal', 
            'detalle' =>'Negro moderno',
            'imagen' => 'Tenis-alexander-mcqueen.jpg',
        ]);
        DB::table('calzado')->insert([
            'marca' => 'Puma',
            'precio' => 350.00,      
            'tipo' => 'kidman',
            'estado' => 'Normal', 
            'detalle' =>'Negro dark',
            'imagen' => 'tenis-puma-negro.jpg',
        ]);
        DB::table('calzado')->insert([
            'marca' => 'Adidas',
            'precio' => 290.00,      
            'tipo' => 'kidman',
            'estado' => 'Normal', 
            'detalle' =>'Orange with black',
            'imagen' => 'zapatos-de-baloncesto-adidas.jpg',
        ]);
        DB::table('calzado')->insert([
            'marca' => 'Puma',
            'precio' => 240.00,      
            'tipo' => 'kidman',
            'estado' => 'Normal', 
            'detalle' =>'black classic',
            'imagen' => 'Puma-Suede-Toddler-Shoes.jpg',
        ]);
        DB::table('calzado')->insert([
            'marca' => 'Adidas',
            'precio' => 300.00,      
            'tipo' => 'kidman',
            'estado' => 'Normal', 
            'detalle' =>'white y black',
            'imagen' => 'adidasblanco_ (5).jpg',
        ]);
    }
}
