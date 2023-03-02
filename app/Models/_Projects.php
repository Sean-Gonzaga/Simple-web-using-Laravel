<?php

namespace App\Models;


class _Projects{
    public static function all(){

        $project_info =[
                [
                    'id'        =>  '1',
                    'type'      =>  'Banana Plantation',
                    'desc'      =>  'Banana plantations play a significant role in the economy of many tropical countries and provide a source of employment for thousands of people.
                                    The bananas are grown in rows on large plots of land and require regular irrigation, fertilization, and pest management to ensure healthy growth and maximum yield.',
                    'img'       =>  'assets/img/banana.jpg'
                ],
                [
                    'id'        =>  '2',
                    'type'      =>  'Potato Plantation',
                    'desc'      =>  'Potato plantations can be found in various regions of the world with suitable soil and climate conditions, and typically require well-drained soil and adequate moisture. 
                                        Potatoes are usually grown from seed potatoes, which are planted in rows using specialized machinery.',
                    'img'       =>  'assets/img/potato.jpg'                
                ],
                [
                    'id'        =>  '3',
                    'type'      =>  'Kamote Plantation',
                    'desc'      =>  'A kamote plantation, also known as a sweet potato plantation, is a large-scale agricultural operation that specializes in the cultivation and harvesting of sweet potatoes for commercial purposes. 
                                    Kamote plantations can be found in tropical and subtropical regions of the world with well-drained soil and warm temperatures. ',
                    'img'       =>  'assets/img/kamote.jpg'
                ]
        ];
        return ($project_info);
        
    }
}
