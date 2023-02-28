<?php

namespace App\Http\Controllers;

use App\Models\Menublog;

use Illuminate\Http\Request;

class MenublogController extends Controller
{
        //addCountry
        function addmenublog(Request $request){
            $request->validate([
                'blog_list' => ['required'],
            ]);

            $menublog = new Menublog();
            $menublog->blog_list = $request->blog_list;
            $menublog->link = $request->link;
            $menublog->save();
            return redirect()->back()->with('success', 'blog Added Successfully');


        }

        // edit Country
        function editmenublog($id){
            $editmenublog = Menublog::find($id);
            $menublog = Menublog::all();
            return view('backend.menu.submenu.blog', compact('menublog','editmenublog'));
        }

        // update element
        function updatemenublog(Request $request, $id){
            $menublog = Menublog::find($id);
            $menublog->blog_list = $request->blog_list;
            $menublog->link = $request->link;
            $menublog->save();
            return redirect()->back()->with('success', 'element Updated Successfully');
        }

        // delete country
        function deletemenublog($id){
            $menublogDelete = Menublog::find($id);
            $menublogDelete->delete();
            return redirect()->back()->with('success', 'element Deleted Successfully');
        }
}
