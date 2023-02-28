<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;

use App\Models\Topbar;

class countryAddController extends Controller
{
    //addCountry
    function addCountry(Request $request){
        $request->validate([
            'country_name' => ['required'],
        ]);

        $country = new Country();
        $country->country_name = $request->country_name;
        $country->save();
        return redirect()->back()->with('success', 'Country Added Successfully');

        // [
        // 'cat_name.required' => 'please fill the form',
        // 'cat_name.min' => 'at-least 5 character',
        // ]
    }

    // edit Country
    function editCountry($id){
        $editCountry = Country::find($id);
        return view('backend.topBar.editCountry', compact('editCountry'));
    }

    // update Country
    function updateCountry(Request $request, $id){
        $country = Country::find($id);
        $country->country_name = $request->country_name;
        $country->save();
        return redirect()->route('country')->with('success', 'Country Updated Successfully');
    }

    // delete country
    function deleteCountry($id){
        $countryDelete = Country::find($id);
        $countryDelete->delete();
        return redirect()->back()->with('success', 'Country Deleted Successfully');
    }

    // edit TopMenu
    function editTopbar($id){
        $tops = Topbar::find($id);
        return view('backend.topBar.editTopMenu', compact('tops'));
    }

    // delete TopMenu
    function deleteTopbar($id){
        $topsDelete = Topbar::find($id);
        $topsDelete->delete();
        return redirect()->back()->with('success', 'Top Menu Deleted Successfully');
    }

    // update TopMenu
    function updateTopbar(Request $request, $id){
        $update = Topbar::find($id);
        $update->phone = $request->phone;
        $update->wishlist = $request->wishlist;
        $update->about = $request->about;
        $update->contact = $request->contact;
        $update->login = $request->login;
        $update->save();
        return redirect()->route('topMenuPage')->with('success', 'Top Menu Updated Successfully');
    }

    // add TopMenu
    function addTopMenu(Request $request){
        $topbar = new Topbar();
        $topbar->phone = $request->phone;
        $topbar->wishlist = $request->wishlist;
        $topbar->about = $request->about;
        $topbar->contact = $request->contact;
        $topbar->login = $request->login;
        $topbar->save();
        return redirect()->back()->with('success', 'Top Menu Added Successfully');
    }

    function showCountry(){
        // eloquent orm
        // $country = Country::all();
        // $category = Category::latest()->get();
        // $category = Category::latest()->paginate(3);
        // $category = Category::orderBy('id', 'desc')->get();
        // $category = Category::orderBy('id', 'desc')->paginate(3);
        // query builder
        // $category = DB::table('categories')->orderBy('id', 'desc')->get();
        // $category = DB::table('categories')->orderBy('id', 'desc')->paginate(2);

        // join with query builder

        // $category = DB::table('categories')
        //             ->join('users', 'categories.user_id', 'users.id')
        //             ->select('categories.*', 'users.name')
        //             ->orderBy('id', 'desc')
        //             ->paginate(3);

        // $trash = Category::onlyTrashed()->latest()->paginate(3);
        // print_r($country);

    }
}
