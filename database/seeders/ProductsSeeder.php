<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        'name'          => ('PingWing'),
        'image'         => ('dragon1.png'),
        'price'         => 1199,
        'stock'         => 20,
        'details'       => ('All our Products are 100% Fake!!'),
        'created_at'    => now()->format('Y-m-d H:i:s')
        ]);
    
        DB::table('products')->insert([
        'name'          => ('Floppy'),
        'image'         => ('dragon2.png'),
        'price'         => 1250,
        'stock'         => 20,
        'details'       => ('All our Products are 100% Fake!!'),
        'created_at'    => now()->format('Y-m-d H:i:s')
        ]);
    
        DB::table('products')->insert([
        'name'          => ('Snotty'),
        'image'         => ('dragon3.png'),
        'price'         => 1499,
        'stock'         => 20,
        'details'       => ('All our Products are 100% Fake!!'),
        'created_at'    => now()->format('Y-m-d H:i:s')
        ]);
    
        DB::table('products')->insert([
        'name'          => ('Poopoo'),
        'image'         => ('dragon4.png'),
        'price'         => (999),
        'stock'         => (20),
        'details'       => ('All our Products are 100% Fake!!'),
        'created_at'    => now()->format('Y-m-d H:i:s')
        ]);
    
        DB::table('products')->insert([
        'name'          => ('Piet'),
        'image'         => ('dragon5.png'),
        'price'         => 1150,
        'stock'         => 20,
        'details'       => ('All our Products are 100% Fake!!'),
        'created_at'    => now()->format('Y-m-d H:i:s')
        ]);
    
        DB::table('products')->insert([
        'name'          => ('Fluffy'),
        'image'         => ('dragon6.png'),
        'price'         => 1200,
        'stock'         => 20,
        'details'       => ('All our Products are 100% Fake!!'),
        'created_at'    => now()->format('Y-m-d H:i:s')
        ]);
    
        DB::table('products')->insert([
        'name'          => ('Tadaaaa'),
        'image'         => ('dragon7.png'),
        'price'         => 1200,
        'stock'         => 20,
        'details'       => ('All our Products are 100% Fake!!'),
        'created_at'    => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
        'name'          => ('Kiwi & the Slowpoke'),
        'image'         => ('dragon8.png'),
        'price'         => 1100,
        'stock'         => 20,
        'details'       => ('All our Products are 100% Fake!!'),
        'created_at'    => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
        'name'          => ('The Little One'),
        'image'         => ('dragon9.png'),
        'price'         => 1499,
        'stock'         => 20,
        'details'       => ('All our Products are 100% Fake!!'),
        'created_at'    => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
        'name'          => ('Babbel'),
        'image'         => ('dragon10.png'),
        'price'         => 1500,
        'stock'         => 20,
        'details'       => ('All our Products are 100% Fake!!'),
        'created_at'    => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
        'name'          => ('Peaches'),
        'image'         => ('dragon11.png'),
        'price'         => 2999,
        'stock'         => 20,
        'details'       => ('All our Products are 100% Fake!!'),
        'created_at'    => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
        'name'          => ('Mafkees'),
        'image'         => ('dragon12.png'),
        'price'         => 2250,
        'stock'         => 20,
        'details'       => ('All our Products are 100% Fake!!'),
        'created_at'    => now()->format('Y-m-d H:i:s')
        ]);
    
        DB::table('products')->insert([
        'name'          => ('RasPatat'),
        'image'         => ('dragon13.png'),
        'price'         => 4999,
        'stock'         => 20,
        'details'       => ('All our Products are 100% Fake!!'),
        'created_at'    => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
        'name'          => ('Grandpa'),
        'image'         => ('dragon14.png'),
        'price'         => 2999,
        'stock'         => 20,
        'details'       => ('All our Products are 100% Fake!!'),
        'created_at'    => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
        'name'          => ('Huh??'),
        'image'         => ('dragon15.png'),
        'price'         => 3000,
        'stock'         => 20,
        'details'       => ('All our Products are 100% Fake!!'),
        'created_at'    => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
        'name'          => ('LazyAss'),
        'image'         => ('dragon16.png'),
        'price'         => 2099,
        'stock'         => 20,
        'details'       => ('All our Products are 100% Fake!!'),
        'created_at'    => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
        'name'          => ('Peppie & Kokkie'),
        'image'         => ('dragon17.png'),
        'price'         => 1999,
        'stock'         => 20,
        'details'       => ('All our Products are 100% Fake!!'),
        'created_at'    => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
        'name'          => ('Blehhhh'),
        'image'         => ('dragon18.png'),
        'price'         => 4999,
        'stock'         => 20,
        'details'       => ('All our Products are 100% Fake!!'),
        'created_at'    => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
        'name'          => ('Rainbow'),
        'image'         => ('specialdragon.png'),
        'price'         => 6999,
        'stock'         => 20,
        'details'       => ('All our Products are 100% Fake!!'),
        'created_at'    => now()->format('Y-m-d H:i:s')
        ]);
    }
}
