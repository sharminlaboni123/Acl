<?php

namespace App\Http\Controllers;
use App\Models\Postcategory;
use Illuminate\Http\Request;

class PostcategoryController extends Controller
{
    public function index()
                {
                    $postcategory =  Postcategory::all();
                    return view('backend.postcategory.index', compact('postcategory'));
                }
        
                public function create()
                {
                    return view('backend.postcategory.create');
                }
        
                public function store(Request $request)
                {
        
                    $requestData = [
                       
                       
                        'category_list' => $request->category_list,
                        
                    ];
                    Postcategory::create($requestData);
        
                    return redirect()
                        ->route('postcategory.index')
                        ->withMessage('Successfully Created');
                }
        
        
                
        
                public function edit($id)
            {
                $postcategory = Postcategory::find($id);
                return view('backend.postcategory.edit', compact('postcategory'));
            }
        
            public function update(Request $request, $id)
        
            {
                $postcategory = Postcategory::find($id);
                $requestData = [
                    'category_list' => $request->category_list,
   
                ];
        
                $postcategory->update($requestData);
                return redirect()->route('postcategory.index')->with(['message'=> 'Successfully Updated!']);
            }
        
            public function destroy($id)
              {
                $postcategory = Postcategory::find($id);
                  $postcategory->delete();
                  return redirect()->route('postcategory.index')->with(['message'=> 'Successfully deleted!!']);
              }
                    
            
        
            
           
}
