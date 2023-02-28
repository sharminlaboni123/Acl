<?php

namespace App\Http\Controllers;

use App\Models\MainMenu;

use Illuminate\Http\Request;

class MainMenuController extends Controller
{
    // addMainMenu
    function addMainMenu(Request $request){
        $addMenu = new MainMenu();
        $addMenu->name = $request->name;
        $addMenu->type = $request->type;
        $addMenu->save();
        return redirect()->back()->with('success', 'Menu Added Successfully');
    }

    // editMainMenu
    function editMainMenu($id){
        $menu = MainMenu::find($id);
        return view('backend.menu.editMainMenu',compact('menu'));
    }

    // updateMainMenu
    function updateMainMenu(Request $request, $id){
        $updateMainMenu = MainMenu::find($id);
        $updateMainMenu->name = $request->name;
        $updateMainMenu->type = $request->type;
        $updateMainMenu->update();
        return redirect()->route('mainMenu')->with('success', 'Menu Added Successfully');
    }

    // deleteMainMenu
    function deleteMainMenu($id){
        $deleteMainMenu = MainMenu::find($id);
        $deleteMainMenu->delete();
        return redirect()->route('mainMenu')->with('success', 'Menu Deleted Successfully');
    }
}
