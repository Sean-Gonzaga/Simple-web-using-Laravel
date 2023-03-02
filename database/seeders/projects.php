<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class projects extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
                'proj_type'      =>  'Banana Plantation',
                'proj_desc'      =>  'Banana plantations play a significant role in the economy of many tropical countries and provide a source of employment for thousands of people.
                                The bananas are grown in rows on large plots of land and require regular irrigation, fertilization, and pest management to ensure healthy growth and maximum yield.',
                'proj_img'       =>  'assets/img/banana.jpg'
        ]);

        DB::table('projects')->insert([
                'proj_type'      =>  'Potato Plantation',
                'proj_desc'      =>  'Potato plantations can be found in various regions of the world with suitable soil and climate conditions, and typically require well-drained soil and adequate moisture. 
                                Potatoes are usually grown from seed potatoes, which are planted in rows using specialized machinery.',
                'proj_img'       =>  'assets/img/potato.jpg'
        ]);

        DB::table('projects')->insert([
                'proj_type'      =>  'Kamote Plantation',
                'proj_desc'      =>  'A kamote plantation, also known as a sweet potato plantation, is a large-scale agricultural operation that specializes in the cultivation and harvesting of sweet potatoes for commercial purposes. 
                                Kamote plantations can be found in tropical and subtropical regions of the world with well-drained soil and warm temperatures. ',
                'proj_img'       =>  'assets/img/kamote.jpg'
        ]);
    }
}
