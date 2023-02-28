<?php

namespace App\Http\Controllers;

use App\Models\Shop;

use Illuminate\Http\Request;

class ShopController extends Controller
{
     //addCountry
     function addshop(Request $request){
        $request->validate([
            'shop_list' => ['required'],
        ]);

        $shop = new Shop();
        $shop->shop_list = $request->shop_list;
        $shop->link = $request->link;
        $shop->save();
        return redirect()->back()->with('success', 'shop Added Successfully');

    }

    // edit Country
    function editshop($id){
        $editshop = Shop::find($id);
        $shop = Shop::all();
        return view('backend.menu.submenu.shop', compact('shop','editshop'));
    }

    // update element

    function updateshop(Request $request, $id){

        $shop = Shop::find($id);
        $shop->shop_list = $request->shop_list;
        $shop->link = $request->link;
        $shop->save();
        return redirect()->back()->with('success', 'shop Updated Successfully');
    }

    // delete country
    function deleteshop($id){
        $shopDelete = Shop::find($id);
        $shopDelete->delete();
        return redirect()->back()->with('success', 'shop Deleted Successfully');
    }
}
