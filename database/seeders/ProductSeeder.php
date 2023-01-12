<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'HTC Mobile',
                'price' => '32000',
                'category' => 'mobile',
                'image' => 'https://fdn2.gsmarena.com/vv/pics/htc/htc-one-gold.jpg',
                'description' => 'This mobile has 8GB ram with all 6000mh battery'
            ],
            [
                'name' => 'LG Mobile',
                'price' => '11000',
                'category' => 'mobile',
                'image' => 'https://www.91-img.com/gallery_images_uploads/0/e/0e939613f9ea10a4f3ac35c05c52b3fb1f25bddf.jpeg?tr=h-550,w-0,c-at_max',
                'description' => 'This mobile has 3GB ram with all latest features'
            ],
            [
                'name' => 'Samsung TV',
                'price' => '26000',
                'category' => 'TV',
                'image' => 'https://m.media-amazon.com/images/I/51I4vj10a7L._SY300_SX300_QL70_FMwebp_.jpg',
                'description' => 'This tv has all latest features'
            ],
            [
                'name' => 'Samsung Refrigerator',
                'price' => '23000',
                'category' => 'Refrigerator',
                'image' => 'https://thumbs.dreamstime.com/b/refrigerator-8782046.jpg',
                'description' => 'This Refrigerator has all latest features'
            ]
        ]);
    }
}
