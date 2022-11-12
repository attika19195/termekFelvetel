<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function home() {
        return view("home", [
            "products" => Product::all(),
            "categories" => Category::all(),
            "manufacturers" => Manufacturer::all()
        ]);
    }

    public function add(Request $request) {
        Product::create([
            "name" => $request->name,
            "price" => $request->price,
            "description" => $request->description,
            "category_id" => $request->category,
            "manufacturer_id" => $request->manufacturer
        ]);
        return redirect()->route("home");
    }


    public function manufacturersOfCategory(Category $category){
        return response()->json([
            "manufacturers" => $category->manufacturers
        ]);
    }


}
