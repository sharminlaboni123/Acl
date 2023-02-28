<?php

namespace App\Http\Controllers;

use App\Models\Blogpost;
use Illuminate\Http\Request;

class BlogpostController extends Controller
{
    public function index()
    {
        $blog =  Blogpost::all();
       return view('backend.blog.index', compact('blog'));
    }

   public function create()
   {
       return view('backend.blog.create');
   }

   public function store(Request $request)
   {

    $requestData = [

    'blog_img' =>$this ->uploadImage ($request->file('blog_img')),

    'blog_date'=> $request->blog_date,
    'blog_title' => $request->blog_title,
    'blog_detail' => $request->blog_detail,
    'summary'	=>$request->summary,
    'description'	=>$request->description,
    'logo'=> $request->logo,

    'blog_comment'=> $request->blog_comment,
    'link'=> $request->link,

    ];
       Blogpost::create($requestData);

       return redirect()
        ->route('blog.index')
        ->withMessage('Successfully Created');
   }

   public function edit($id)
{
   $blog = Blogpost::find($id);
   return view('backend.blog.edit', compact('blog'));
}

public function update(Request $request, $id)

{
   $blog = Blogpost::find($id);
   $image = $request->file('blog_img');
   if ($image) {
       $requestData = [

                    'blog_img' =>$this ->uploadImage ($request->file('blog_img')),

                    'blog_date'=> $request->blog_date,
                    'blog_title' => $request->blog_title,
                    'blog_detail' => $request->blog_detail,
                    'summary'	=>$request->summary,
                    'description'	=>$request->description,
                    'logo'=> $request->logo,
                    'blog_comment'=> $request->blog_comment,
                    'link'=> $request->link,
                ];

                $blog->update($requestData);
   } else {
            $requestData = [
            'blog_date'=> $request->blog_date,
            'blog_title' => $request->blog_title,
            'blog_detail' => $request->blog_detail,
            'summary'	=>$request->summary,
            'description'	=>$request->description,
            'logo'=> $request->logo,
            'blog_comment'=> $request->blog_comment,
            'link'=> $request->link,
   ];

   $blog->update($requestData);
   }
   return redirect()->route('blog.index')->with(['message'=> 'Successfully Updated!']);
}

public function destroy($id)
 {
   $blog = Blogpost::find($id);
     $blog->delete();
     return redirect()->route('blog.index')->with(['message'=> 'Successfully deleted!!']);
 }

 public function uploadImage($image)
 {
     $originalName = $image->getClientOriginalName();
     $fileName = date('Y-m-d') . time() . $originalName;

     $image->move(storage_path('/app/public/blog'), $fileName);

     return $fileName;
 }

}
