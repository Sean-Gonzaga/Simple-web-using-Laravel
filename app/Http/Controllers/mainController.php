<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Projects;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function home()
    {
        return view('index');

    }

    public function banana_plantation()
    {
        return view('banana-plantation');

    }

    public function contact()
    {
        return view('contact');

    }

    public function about_us()
    {
        return view('about-us');

    }
   
    public function projects()
    {
     
        return view('projects',
            [
                'title'          =>  'Projects',
                'info'           =>  'Project_info',
                'project_info'   => Projects::all()
            ]
        );

    }

    public function products()
    {
        return view('products',
            [
                'title'          =>  'Products',
                'info'           =>  'Product_info',
                'product_info'   => Products::all()
            ]
        );

    }

}
