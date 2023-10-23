<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandsController extends Controller
{
    //

    Public function list()
    {
        return view('brands.list', [
            'brands' => Brand::all()
        ]);        
    }

    Public function delete(Brand $brand)
    {
       $brand->delete();  

       return redirect('/console/types/list');
    }
}
