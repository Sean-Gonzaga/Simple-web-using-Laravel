<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Projects;


class MainController extends Controller
{
    public function home()
    {
        return view('main.index');

    }

    // public function banana_plantation()
    // {
    //     return view('banana-plantation');

    // }

    public function contact()
    {
        return view('main.contact');

    }

    public function about_us()
    {
        return view('main.about-us');

    }
   
    public function projects()
    {
     
        return view('main.projects',
            [
                'project_info'   => Projects::all()
            ]
        );

    }

    public function products()
    {
        return view('main.products',
            [
                'product_info'   => Products::all()
            ]
        );

    }

}
