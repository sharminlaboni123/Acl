<?php

namespace App\Http\Controllers;

use App\Models\Menuproduct;

use Illuminate\Http\Request;

class MenuproductController extends Controller
{
    //addCountry
    function addmenuproduct(Request $request){
        $request->validate([
            'product_list' => ['required'],
        ]);

        $menuproduct = new Menuproduct();
        $menuproduct->product_list = $request->product_list;
        $menuproduct->link = $request->link;
        $menuproduct->save();
        return redirect()->back()->with('success', 'product Added Successfully');
    }

    // edit Country
    function editmenuproduct($id){
        $editmenuproduct = Menuproduct::find($id);
        $menuproduct= Menuproduct::all();
        return view('backend.menu.submenu.product', compact('menuproduct','editmenuproduct'));
    }

    // update element
    function updatemenuproduct(Request $request, $id){
        $menuproduct = Menuproduct::find($id);
        $menuproduct->product_list = $request->product_list;
        $menuproduct->link = $request->link;
        $menuproduct->save();
        return redirect()->back()->with('success', 'menuproduct Updated Successfully');
    }

    // delete country
    function deletemenublog($id){
        $menuproductDelete = Menuproduct::find($id);
        $menuproductDelete->delete();
        return redirect()->back()->with('success', 'menuproduct  Deleted Successfully');
    }
}
