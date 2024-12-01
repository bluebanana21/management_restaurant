<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\Category;

class MenuController extends Controller
{
    public function showCreate()
    {
        return view('dashboard.create.createFood', ['categories' => Category::all()]);
    }
    //Menu stuff
    public function storeMenu(Request $request)
    {

        $requestData = $request->all();
        $fileName = time() . $request->file('imageFile')->getClientOriginalName();
        $path = $request->file('imageFile')->storeAs('images', $fileName, 'public');
        $requestData['imageFile'] = '/storage/' . $path;
        Menu::create($requestData);

        return redirect('/dashboard');
    }

    public function showMenu()
    {

        return view('dashboard.menus', ['menus' => Menu::all()]);
    }

    public function deleteMenu($id)
    {
        $menus = Menu::find($id);
        $menus->delete();
        return to_route('get.menu');

    }
}
