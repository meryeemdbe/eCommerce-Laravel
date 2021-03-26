<?php

namespace Database\Seeders;

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
        DB::table('products')->insert([
            [
                'name'=> 'Samsung Mobile',
            'price'=> '300',
            'description'=> 'A smartphone with 16Gb ram',
            'category'=> 'Mobile',
            'gallery'=> 'https://www.presse-citron.net/app/uploads/2019/09/Samsung-Galaxy-A10-2.jpg'
            ],
            [
                'name'=> 'Samsung TV',
            'price'=> '500',
            'description'=> 'A Smart tv with more features',
            'category'=> 'tv',
            'gallery'=> 'https://images.samsung.com/is/image/samsung/fr-uhd-tu8505-ue55tu8505uxxc-frontblack-252795245?$720_576_PNG$'
            ],
            [
                'name'=> 'LG tv',
            'price'=> '450',
            'description'=> 'A smarttv with more ',
            'category'=> 'tv',
            'gallery'=> 'https://www.lg.com/ma/images/tvs/md06251824/gallery/N01-new.jpg'
            ],
            [
                'name'=> 'Sonic Fridge',
            'price'=> '700',
            'description'=> 'A fridge  with cold features',
            'category'=> 'fridge',
            'gallery'=> 'https://www.kitchenerappliancerepairs.ca/wp-content/uploads/2016/03/LGfridge-300x225.jpg'
            ]
            
        ]); 
    }
}
