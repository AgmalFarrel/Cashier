<?php

use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'productId' => 1,
                'name' => 'Jilbab',
                'description' => 'persegi',
                'kind' => 'khimar',
                'price' => 120000,
                'discPercent' => 10,
                'discPotongan' => 10,
                'countSales' => 108000,
                'imageUrl' => 'fsfs.jpg',
                'stock' => 12,
                'isSyncronized' => 1

            ],
            [
                'id' => 2,
                'productId' => 2,
                'name' => 'kerudung',
                'description' => 'segitiga',
                'kind' => 'rawis',
                'price' => 120000,
                'discPercent' => 10,
                'discPotongan' => 10,
                'countSales' => 108000,
                'imageUrl' => 'fsfs.jpg',
                'stock' => 12,
                'isSyncronized' => 1
            ]
        ]);
    }
}
