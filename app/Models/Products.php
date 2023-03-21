<?php

namespace App\Models;

class Products{
    public static function all(){

        $product_info =[
                [
                    'id'        =>  '1',
                    'flavor'    =>  'Banana Chips',
                    'desc'      =>  'Banana chips are deep-fried or dried, generally crispy slices of bananas. 
                                    They are usually made from firmer, starchier banana varieties like the Saba and Nendran cultivars. 
                                    They can be sweet or savory, and can be covered with sugar, honey, salt, or various spices.'
                ],
                [
                    'id'        =>  '2',
                    'flavor'    =>  'Potato Chips',
                    'desc'      =>  'A potato chip or crisp is a thin slice of potato that has been deep fried, baked, or air fried until crunchy. 
                                    They are commonly served as a snack, side dish, or appetizer.'
                ],
                [
                    'id'        =>  '3',
                    'flavor'    =>  'Kamote Chips',
                    'desc'      =>  'Kamote is highly nutritious, a great source of vitamins, minerals, and fiber. Believed to have cancer-fighting properties, it also supports the immune system, enhances brain function, and promotes gut health. 
                                    CHIP, CHIP, HOORAY Not your ordinary chips, it\'s gourmet.'
                ]
        ];
        return ($product_info);
        
    }
}