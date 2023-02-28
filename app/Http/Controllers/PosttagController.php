<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posttag;

class PosttagController extends Controller
{
    public function index()
    {
        $posttag =  Posttag::all();
        return view('backend.posttag.index', compact('posttag'));
    }

    public function create()
    {
        return view('backend.posttag.create');
    }

    public function store(Request $request)
    {

        $requestData = [
           
           
            'tag_list' => $request->category_list,
            
        ];
        Posttag::create($requestData);

        return redirect()
            ->route('posttag.index')
            ->withMessage('Successfully Created');
    }


    

    public function edit($id)
{
    $posttag= Posttag::find($id);
    return view('backend.posttag.edit', compact('posttag'));
}

public function update(Request $request, $id)

{
    $posttag = Posttag::find($id);
    $requestData = [
        'tag_list' => $request->category_list,

    ];

    $posttag->update($requestData);
    return redirect()->route('posttag.index')->with(['message'=> 'Successfully Updated!']);
}

public function destroy($id)
  {
    $posttag = Posttag::find($id);
      $posttag->delete();
      return redirect()->route('posttag.index')->with(['message'=> 'Successfully deleted!!']);
  }




}
