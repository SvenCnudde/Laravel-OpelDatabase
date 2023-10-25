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

       return redirect('/console/brands/list')
        ->with('message', 'Brand has been delete');
    }
   
    Public function addForm(Brand $brand)
    {
        return view('brands.add');        
    }    

    Public function add()
    {
        $attributes = request()->validate([
            'name' => 'required',            
        ]);

        $brand = new Brand();
        $brand->name = $attributes['name'];
        $brand->imageURL = 'defaultURL'; //TODO:needs to have url to brand image implemented.
        $brand->save();

        return redirect('/console/brands/list')
            ->with('message', 'Brand has been added');
    }

    Public function editForm(Brand $brand)
    {
        return view('brands.edit', [
            'brand' => $brand
        ]);        
    }    

    Public function edit(Brand $brand)
    {
        $attributes = request()->validate([
            'name' => 'required',            
        ]);

        $brand->name = $attributes['name'];
        $brand->imageURL = 'defaultURL'; //TODO:needs to have url to brand image implemented.
        $brand->save();

        return redirect('/console/brands/list')
            ->with('message', 'Brand has been edited');
    }


}
