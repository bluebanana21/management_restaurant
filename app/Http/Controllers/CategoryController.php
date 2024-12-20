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

    public function delete($id)
    {

        $categories = Category::find($id);
        $categories->delete();
        return to_route('get.category');

    }

    public function edit($id)
    {
        $categories = Category::find($id);
        return view('dashboard.edit.editCategory', compact('categories'));
    }

    public function update(Request $request, $id)
    {

        $categories = Category::find($id);
        $categories->category_name = $request->input('category_name');
        $categories->update();
        return to_route('get.category');
    }


}
