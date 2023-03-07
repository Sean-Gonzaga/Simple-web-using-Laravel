<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(5)->create();

        DB::table('products')->insert([

                'type'      =>  'Banana Chips',
                'desc'      =>  'Banana chips are deep-fried or dried, generally crispy slices of bananas. 
                                They are usually made from firmer, starchier banana varieties like the Saba and Nendran cultivars. 
                                They can be sweet or savory, and can be covered with sugar, honey, salt, or various spices.',
                'img'       =>  'assets/img/banana_chips.jpg'
        ]);

        DB::table('products')->insert([

                'type'      =>  'Potato Chips',
                'desc'      =>  'A potato chip or crisp is a thin slice of potato that has been deep fried, baked, or air fried until crunchy. 
                                They are commonly served as a snack, side dish, or appetizer.',
                'img'       =>  'assets/img/potato_chips.jpg'
        ]);

        DB::table('products')->insert([

                'type'      =>  'Kamote Chips',
                'desc'      =>  'Kamote is highly nutritious, a great source of vitamins, minerals, and fiber. Believed to have cancer-fighting properties, it also supports the immune system, enhances brain function, and promotes gut health. 
                                CHIP, CHIP, HOORAY Not your ordinary chips, it\'s gourmet.',
                'img'       =>  'assets/img/kamote_chips.jpg'
        ]);

        DB::table('projects')->insert([
                'type'      =>  'Banana Plantation',
                'desc'      =>  'Banana plantations play a significant role in the economy of many tropical countries and provide a source of employment for thousands of people.
                                The bananas are grown in rows on large plots of land and require regular irrigation, fertilization, and pest management to ensure healthy growth and maximum yield.',
                'img'       =>  '/assets/img/banana.jpg'
        ]);

        DB::table('projects')->insert([
                'type'      =>  'Potato Plantation',
                'desc'      =>  'Potato plantations can be found in various regions of the world with suitable soil and climate conditions, and typically require well-drained soil and adequate moisture. 
                                Potatoes are usually grown from seed potatoes, which are planted in rows using specialized machinery.',
                'img'       =>  '/assets/img/potato.jpg'
        ]);

        DB::table('projects')->insert([
                'type'      =>  'Kamote Plantation',
                'desc'      =>  'A kamote plantation, also known as a sweet potato plantation, is a large-scale agricultural operation that specializes in the cultivation and harvesting of sweet potatoes for commercial purposes. 
                                Kamote plantations can be found in tropical and subtropical regions of the world with well-drained soil and warm temperatures. ',
                'img'       =>  '/assets/img/kamote.jpg'
        ]);
    }
}
