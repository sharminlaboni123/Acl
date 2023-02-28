<?php

namespace App\Http\Controllers;

use App\Models\Footermiddlefull;

use Illuminate\Http\Request;

class FootermiddlefullController extends Controller
{
    
    public function index()
    {
        $footer_m=  Footermiddlefull::all();
        return view('backend.footer-middle.index', compact('footer_m'));
    }

    public function create()
    {
        return view('backend.footer-middle.create');
    }

    public function store(Request $request)
    {

        $requestData = [
            // 'titlelogo' => $this ->uploadImage ($request->file('titlelogo')),            

            'titletext' => $request->titletext,
            'usefullink' => $request->footer_middle_useful_head,
            'about' => $request->footer_middle_useful_about,
            'howtoshop' => $request->footer_middle_useful_shop,
            'FAQ' => $request->footer_middle_useful_FAQ,
            'contactus' => $request->footer_middle_useful_contactus,
            'login' => $request->footer_middle_useful_login,
            'customerservice' => $request->customer_head,
            'paymentmethod' => $request->paymentmethod,
            'moneyback' => $request->moneyback,
            'returns'	 => $request->returns,
            'shipping' => $request->shipping,
            'termcondition' => $request->termcondition,
            'privacypolicy' => $request->privacypolicy,
            'myaccount' => $request->myaccount,
            'signin' => $request->signin,
            'viewcart' =>$request->viewcart,
            'wishlist'	 => $request->wishlist,
            'takeorder' => $request->takeorder,
            'help' => $request->help,
        ];
        Footermiddlefull::create($requestData);

        return redirect()
            ->route('footer-middle.index')
            ->withMessage('Successfully Created');
    }

    public function edit($id)
    {
        $footer_m = Footermiddlefull::find($id);
        return view('backend.footer-middle.edit', compact('footer_m'));
    }

    public function update(Request $request, $id)
    {
        $footer_m = Footermiddlefull::find($id);
        $requestData = [
            
            // 'titlelogo' => $this ->uploadImage ($request->file('titlelogo')),            
            'titletext' => $request->titletext,
            'usefullink' => $request->footer_middle_useful_head,
            'about' => $request->footer_middle_useful_about,
            'howtoshop' => $request->footer_middle_useful_shop,
            'FAQ' => $request->footer_middle_useful_FAQ,
            'contactus' => $request->footer_middle_useful_contactus,
            'login' => $request->footer_middle_useful_login,
            'customerservice' => $request->customer_head,
            'paymentmethod' => $request->paymentmethod,
            'moneyback' => $request->moneyback,
            'returns'	 => $request->returns,
            'shipping' => $request->shipping,
            'termcondition' => $request->termcondition,
            'privacypolicy' => $request->privacypolicy,
            'myaccount' => $request->myaccount,
            'signin' => $request->signin,
            'viewcart' =>$request->viewcart,
            'wishlist'	 => $request->wishlist,
            'takeorder' => $request->takeorder,
            'help' => $request->help,
            ];
        $footer_m->update($requestData);
        return redirect()->route('footer-middle.index')->with(['message'=> 'Successfully Updated!']);
    }

    public function destroy($id)
    {
        $footer_m = Footermiddlefull::find($id);
        $footer_m->delete();
        return redirect()->route('footer-middle.index')->with(['message'=> 'Successfully deleted!!']);
    }
    
    public function uploadImage($image)
    {
        $originalName = $image->getClientOriginalName();
        $fileName = date('Y-m-d') . time() . $originalName;

        $image->move(storage_path('/app/public/about'), $fileName);

        return $fileName;
    }
}
