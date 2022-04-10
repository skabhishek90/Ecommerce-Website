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
        db::table('products')->insert([
            [
                    'name' =>'Mi mobile',
                    'price'=>"1000",
                    "description"=>"This phone comes with gorrila glass and has 8 gb ram with 128 gb internal storage which is extendable upto 516 gb",
                    "category"=>"mobile",
                    "gallery"=>"https://unsplash.com/photos/1t1CBECuqvs"
            ], [
                'name' =>'Redmi Tv',
                'price'=>"5000",
                "description"=>"55-inch smart tv powered by android",
                "category"=>"Television",
                "gallery"=>"https://pixabay.com/illustrations/tv-television-black-screen-monitor-1625228/"
            ],
            [
                'name' =>'Refrigerator',
                'price'=>"10000",
                "description"=>"Refrigerator with latest technology and design with inbuilt voltage stabiliser",
                "category"=>"Refrigerator",
                "gallery"=>"https://www.istockphoto.com/search/2/image?phrase=refrigerator"
            ],
            [
                'name' =>'Oppo Mobile',
                'price'=>"100",
                "description"=>"This phone comes with gorrila glass and has 8 gb ram with 128 gb internal storage which is extendable upto 516 gb",
                "category"=>"mobile",
                "gallery"=>"https://www.oppo.com/in/smartphones/series-find-x/findx2-series/"
            ]
                ]);
    }
}
