<?php

namespace App\Http\Controllers;

use App\Models\Futter;

use Illuminate\Http\Request;

class FutterController extends Controller
{
    public function index()
    {
        $futter =  Futter::all();
        return view('backend.footer-bottom.index', compact('futter'));
    }

    public function create()
    {
        return view('backend.footer-bottom.create');
    }

    public function store(Request $request)
    {

        $requestData = [
            'footer_bottom_img'  => $this ->uploadImage ($request->file('footer_bottom_img')),           
            'footer_bottom_text' => $request->footer_bottom_text,
            'link' => $request->link,
        ];

        Futter::create($requestData);

        return redirect()
            ->route('footer_bottom.index')
            ->withMessage('Successfully Created');
    }

    public function edit($id)
    {
        $futter = Futter::find($id);
        return view('backend.footer-bottom.edit', compact('futter'));
    }
        
    public function update(Request $request, $id)
    {
        $futter = Futter::find($id);
        $requestData = [
            'footer_bottom_img'  => $this ->uploadImage ($request->file('footer_bottom_img')),           
            'footer_bottom_text' => $request->footer_bottom_text,
            'link' => $request->link,
        ];

        $futter->update($requestData);
        return redirect()->route('footer_bottom.index')->with(['message'=> 'Successfully Updated!']);
    }
        
    public function destroy($id)
    {
    $futter = Futter::find($id);
        $futter->delete();
        return redirect()->route('futter_bottom.index')->with(['message'=> 'Successfully deleted!!']);
    }
    public function uploadImage($image)
    {
        $originalName = $image->getClientOriginalName();
        $fileName = date('Y-m-d') . time() . $originalName;

        $image->move(storage_path('/app/public/footer'), $fileName);

        return $fileName;
    }
}
