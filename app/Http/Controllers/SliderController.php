<?php

namespace App\Http\Controllers;

use App\Models\Slider;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $slider =  Slider::all();
        return view('backend.sliders.index', compact('slider'));
    }

    public function create()
    {
        return view('backend.sliders.create');
    }

    public function store(Request $request)
    {
        $requestData = [

            'slider_img' => $this->uploadImage($request->file('slider_img')),

            'slider_subtitle' => $request->slider_subtitle,
            'slider_title' => $request->slider_title,
            'slider_price' => $request->slider_price,
            'slider_button' => $request->slider_button,
            'slider_link' => $request->slider_link,

        ];
        Slider::create($requestData);

        return redirect()
            ->route('slider.index')
            ->withMessage('Successfully Created');
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('backend.sliders.edit', compact('slider'));
    }

    public function update(Request $request, $id)

    {
        $slider = Slider::find($id);
        $image = $request->file('slider_img');
        if ($image) {
            $requestData = [

                'slider_img' => $this->uploadImage($request->file('slider_img')),
                'slider_subtitle' => $request->slider_subtitle,
                'slider_title' => $request->slider_title,
                'slider_price' => $request->slider_price,
                'slider_button' => $request->slider_button,
                'slider_link' => $request->slider_link,
            ];
            $slider->update($requestData);
        } else {
            $requestData = [
                'slider_subtitle' => $request->slider_subtitle,
                'slider_title' => $request->slider_title,
                'slider_price' => $request->slider_price,
                'slider_button' => $request->slider_button,
                'slider_link' => $request->slider_link,
            ];
            $slider->update($requestData);
        }
        return redirect()->route('slider.index')->with(['message'=> 'Successfully Updated!']);
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->route('slider.index')->with(['message'=> 'Successfully deleted!!']);
    }
    public function uploadImage($image)
    {

        $originalName = $image->getClientOriginalName();
            $fileName = date('Y-m-d') . time() . $originalName;
            $image->move(storage_path('/app/public/slider'), $fileName);
            return $fileName;
    }

}
