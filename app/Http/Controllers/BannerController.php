<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //addBanner
    function addBanner(Request $request){
        $banner_image = $request->file('banner_image');
        if($banner_image){
            $img_ext = $banner_image->getClientOriginalExtension();
            $img_or_name = $banner_image->getClientOriginalName();
            $divide_name = current(explode('.',$img_or_name));
            $nameGen = preg_replace('/[^A-Za-z0-9\-]/', '_' ,$divide_name);
            $date_img_name = date('d_m_y_h_i_sa_');
            $up_location = "frontend/assets/images/demos/demo-10/banners/";
            $image_name = $date_img_name . $nameGen . '.' . $img_ext;
            // $final_db_upload = $up_location . $date_img_name . $nameGen . '.' . $img_ext;
            $final_db_upload = $up_location . $image_name;
            $banner_image->move($up_location, $image_name);

            $addBanner = new Banner();
            $addBanner->banner_subtitle = $request->banner_subtitle;
            $addBanner->banner_title = $request->banner_title;
            $addBanner->banner_percentage = $request->banner_percentage;
            $addBanner->banner_type = $request->banner_type;
            $addBanner->banner_image = $final_db_upload;
            $addBanner->save();
            return redirect()->back()->with('success', 'Banner Added Successfully');
        } else {
            $addBanner = new Banner();
            $addBanner->banner_subtitle = $request->banner_subtitle;
            $addBanner->banner_title = $request->banner_title;
            $addBanner->banner_percentage = $request->banner_percentage;
            $addBanner->banner_type = $request->banner_type;
            $addBanner->save();
            return redirect()->back()->with('success', 'Banner Added Successfully');
        }

    }

    // updateBanner
    function updateBanner(Request $request, $id){
        $banner_image = $request->file('banner_image');

        if($banner_image){

            $old_image = $request->old_image;
            if($old_image){
                unlink($old_image);
            }
            $img_ext = $banner_image->getClientOriginalExtension();
            $img_or_name = $banner_image->getClientOriginalName();
            $divide_name = current(explode('.',$img_or_name));
            $nameGen = preg_replace('/[^A-Za-z0-9\-]/', '_' ,$divide_name);
            $date_img_name = date('d_m_y_h_i_sa_');
            $up_location = "frontend/assets/images/demos/demo-10/banners/";
            $image_name = $date_img_name . $nameGen . '.' . $img_ext;
            $final_db_upload = $up_location . $image_name;
            $banner_image->move($up_location, $image_name);

            $updateBanner = Banner::find($id);
            $updateBanner->banner_subtitle = $request->banner_subtitle;
            $updateBanner->banner_title = $request->banner_title;
            $updateBanner->banner_percentage = $request->banner_percentage;
            $updateBanner->banner_type = $request->banner_type;
            $updateBanner->banner_image = $final_db_upload;
            $updateBanner->update();

            return redirect()->route('banners')->with('success', 'Banner Advertisement Updated Successfully');

        } else {
            $updateBanner = Banner::find($id);
            $updateBanner->banner_subtitle = $request->banner_subtitle;
            $updateBanner->banner_title = $request->banner_title;
            $updateBanner->banner_percentage = $request->banner_percentage;
            $updateBanner->banner_type = $request->banner_type;
            $updateBanner->update();
            return redirect()->route('banners')->with('success', 'Banner Advertisement Updated Successfully');
        }

    }

    // editBanner
    function editBanner($id){
        $banner = Banner::find($id);
        return view('backend.Banners.editBanner',compact('banner'));
    }

    // deleteBanner
    function deleteBanner($id){
        $deleteBanner = Banner::find($id);
        $image = $deleteBanner->banner_image;
        if($image){
            unlink($image);
        }
        $deleteBanner->delete();
        return redirect()->route('banners')->with('success', 'Banners Deleted Successfully');
    }
}
