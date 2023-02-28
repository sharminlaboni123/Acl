<?php

namespace App\Http\Controllers;

use App\Models\Page;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //addCountry
    function addpage(Request $request){
        $request->validate([
            'page_list' => ['required'],
        ]);

        $page = new Page();
        $page->page_list = $request->page_list;
        $page->save();
        return redirect()->back()->with('success', 'page Added Successfully');

    }

    // edit Country
    function editpage($id){
        $editpage = Page::find($id);
        $page = Page::all();
        return view('backend.menu.submenu.page', compact('page','editpage'));
    }

    // update element

    function updatepage(Request $request, $id){

        $page = Page::find($id);
        $page->page_list = $request->page_list;
        $page->save();
        return redirect()->back()->with('success', 'page Updated Successfully');
    }

    // delete country
    function deletepage($id){
        $pageDelete = Page::find($id);
        $pageDelete->delete();
        return redirect()->back()->with('success', 'page Deleted Successfully');
    }
}
