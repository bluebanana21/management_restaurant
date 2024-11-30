<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    //Category stuff
    public function storeCategory(Request $request)
    {

        // dd($request);

        $validatedData = $request->validate([
            'category_name' => ['required', 'unique:categories'],
            'created_by' => ['required'],
        ]);

        Category::create($validatedData);

        return to_route('get.category');
    }

    public function showCategory(Request $request)
    {
        // return Category::all();
        return view('dashboard.category', [
            'categories' => Category::all(),
        ]);
    }

    public function delete(Category $category)
    {

        Category::destroy($category->id);
        return view('dashboard.category', [
            'categories' => Category::all()
        ]);

    }


}
