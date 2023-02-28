<?php

namespace App\Http\Controllers;

use App\Models\Element;

use Illuminate\Http\Request;

class ElementController extends Controller
{
    //addCountry
    function addelement(Request $request){
        $request->validate([
            'element_list' => ['required'],
        ]);

        $element = new Element();
        $element->element_list = $request->element_list;
        $element->link = $request->link;
        $element->save();
        return redirect()->back()->with('success', 'element Added Successfully');
    }

    // edit Country
    function editelement($id){
        $editelement = Element::find($id);
        $element = Element::all();
        return view('backend.menu.submenu.element', compact('element','editelement'));
    }

    // update element
    function updateelement(Request $request, $id){
        $element = Element::find($id);
        $element->element_list = $request->element_list;
        $element->save();
        return redirect()->back()->with('success', 'element Updated Successfully');
    }

    // delete country
    function deleteelement($id){
        $elementDelete = Element::find($id);
        $elementDelete->delete();
        return redirect()->back()->with('success', 'element Deleted Successfully');
    }

}
