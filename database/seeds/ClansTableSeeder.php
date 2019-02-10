<?php

use Illuminate\Database\Seeder;

class ClansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clans')->insert([
            [
                'id' => 1,
                'name' => 'Uzumaki',
                'logo' => 'https://image.spreadshirtmedia.com/image-server/v1/compositions/1012514397/views/2,width=650,height=650,appearanceId=95,version=1538991834/this-shirt-is-for-all-the-naruto-fans-out-thereuzumaki-t-shirtthis-logo-is-well-known-for-showing-on-narutos-back-its-the-logo-of-the-uzumaki-clanlong-ago-the-uzumaki-clan-was-a-prominent-clan-since-its-disbandment-most-of-its-known-members-reside-in-konohagakure-with-the-tsunade-and-naruto-being-direct-descendants-of-the-clan.jpg',
                'force' => 95,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Uchiha',
                'logo' => 'https://ih1.redbubble.net/image.532498022.5084/flat,550x550,075,f.u1.jpg',
                'force' => 98,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Sarutobi',
                'logo' => 'http://sieuimba.com/wp-content/uploads/2015/03/51.jpg',
                'force' => 92,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Akatsuki',
                'logo' => 'http://cdn.shopify.com/s/files/1/1134/0364/products/Naruto_Akatsuki_Red_Cloud_Symbol_Alloy_Pendant_Unique_Necklace_3_1024x1024.jpg?v=1546908871',
                'force' => 94,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
