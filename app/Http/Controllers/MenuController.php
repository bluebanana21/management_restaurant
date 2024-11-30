<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    //Menu stuff
    public function storeMenu(Request $request)
    {

        dd($request);

        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'description' => 'required',
            'category_id' => 'required|unique:posts',
            // 'image' => 'required',
        ]);

        Menu::create([

            'name' => $request->input('nama makanan'),
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id,
            // 'image' => $request->imageFile,
        ]);

        return redirect('/dashboard');
    }

    public function showMenu()
    {
        Menu::all();
    }

    public function deleteMenu()
    {
        // Menu::delete();
    }
}
