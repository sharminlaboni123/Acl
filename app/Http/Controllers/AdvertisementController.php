<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;

use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    // Add Advertisement
    function addBottomAdvertisement(Request $request){
        $cta_image = $request->file('cta_image');
        if($cta_image){
            $img_ext = $cta_image->getClientOriginalExtension();
            $img_or_name = $cta_image->getClientOriginalName();
            $divide_name = current(explode('.',$img_or_name));
            $nameGen = preg_replace('/[^A-Za-z0-9\-]/', '_' ,$divide_name);
            $date_img_name = date('d_m_y_h_i_sa_');
            $up_location = "frontend/assets/images/demos/demo-10/bottomAdvertisement/";
            $image_name = $date_img_name . $nameGen . '.' . $img_ext;
            // $final_db_upload = $up_location . $date_img_name . $nameGen . '.' . $img_ext;
            $final_db_upload = $up_location . $image_name;
            $cta_image->move($up_location, $image_name);

            $addAdvertisement = new Advertisement();
            $addAdvertisement->cta_title = $request->cta_title;
            $addAdvertisement->cta_desc = $request->cta_desc;
            $addAdvertisement->cta_cart_price = $request->cta_cart_price;
            $addAdvertisement->cta_image = $final_db_upload;
            $addAdvertisement->save();
            return redirect()->back()->with('success', 'Bottom Advertisement Added Successfully');
        } else {
            $addAdvertisement = new Advertisement();
            $addAdvertisement->cta_title = $request->cta_title;
            $addAdvertisement->cta_desc = $request->cta_desc;
            $addAdvertisement->cta_cart_price = $request->cta_cart_price;
            $addAdvertisement->save();
            return redirect()->back()->with('success', 'Bottom Advertisement Added Successfully');
        }

    }

    // editBottomAdvertisement
    function editBottomAdvertisement($id){
        $advertisement = Advertisement::find($id);
        return view('backend.advertisements.editBottomAdvertisement',compact('advertisement'));
    }

    //  updateBottomAdvertisement
    function updateBottomAdvertisement(Request $request, $id){
        $cta_image = $request->file('cta_image');

        if($cta_image){

            $old_image = $request->old_image;
            if($old_image){
                unlink($old_image);
            }

            $img_ext = $cta_image->getClientOriginalExtension();
            $img_or_name = $cta_image->getClientOriginalName();
            $divide_name = current(explode('.',$img_or_name));
            $nameGen = preg_replace('/[^A-Za-z0-9\-]/', '_' ,$divide_name);
            $date_img_name = date('d_m_y_h_i_sa_');
            $up_location = "frontend/assets/images/demos/demo-10/bottomAdvertisement/";
            $image_name = $date_img_name . $nameGen . '.' . $img_ext;
            $final_db_upload = $up_location . $image_name;
            $cta_image->move($up_location, $image_name);

            $updatedAdvertisement = Advertisement::find($id);
            $updatedAdvertisement->cta_title = $request->cta_title;
            $updatedAdvertisement->cta_desc = $request->cta_desc;
            $updatedAdvertisement->cta_cart_price = $request->cta_cart_price;
            $updatedAdvertisement->cta_image = $final_db_upload;
            $updatedAdvertisement->update();
            return redirect()->route('advertisements')->with('success', 'Bottom Advertisement Updated Successfully');

        } else {
            $updatedAdvertisement = Advertisement::find($id);
            $updatedAdvertisement->cta_title = $request->cta_title;
            $updatedAdvertisement->cta_desc = $request->cta_desc;
            $updatedAdvertisement->cta_cart_price = $request->cta_cart_price;
            $updatedAdvertisement->update();
            return redirect()->route('advertisements')->with('success', 'Bottom Advertisement Updated Successfully');
        }

    }

    // deleteBottomAdvertisement
    function deleteBottomAdvertisement($id){
        $deleteBottomAdvertisement = Advertisement::find($id);
        $image = $deleteBottomAdvertisement->cta_image;
        if($image){
            unlink($image);
        }
        $deleteBottomAdvertisement->delete();
        return redirect()->route('advertisements')->with('success', 'Advertisements Deleted Successfully');
    }
}
