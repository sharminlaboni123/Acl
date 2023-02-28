<?php

namespace App\Http\Controllers;

use App\Models\TopSelling;

use Illuminate\Http\Request;

class TopSellingController extends Controller
{
    //addTopSelling
    function addTopSelling(Request $request)
    {
        $p_image = $request->file('p_image');
        $img_ext = $p_image->getClientOriginalExtension();
        $img_or_name = $p_image->getClientOriginalName();
        $divide_name = current(explode('.',$img_or_name));
        $nameGen = preg_replace('/[^A-Za-z0-9\-]/', '_' ,$divide_name);
        $date_img_name = date('d_m_y_h_i_sa_');
        $up_location = "frontend/assets/images/demos/demo-10/products/";
        $image_name = $date_img_name . $nameGen . '.' . $img_ext;
        // $final_db_upload = $up_location . $date_img_name . $nameGen . '.' . $img_ext;
        $final_db_upload = $up_location . $image_name;
        $p_image->move($up_location, $image_name);

        $TopSelling = new TopSelling();
        $TopSelling->l_primary = $request->l_primary;
        $TopSelling->l_sell = $request->l_sell;
        $TopSelling->p_image = $final_db_upload;
        $TopSelling->p_gender = $request->p_gender ;
        $TopSelling->p_item = $request->p_item;
        $TopSelling->p_title = $request->p_title;
        $TopSelling->p_price = $request->p_price;
        $TopSelling->p_n_price = $request->p_n_price;
        $TopSelling->p_o_price = $request->p_o_price;
        $TopSelling->p_rating_number = $request->p_rating_number;
        $TopSelling->save();
        return redirect()->back()->with('success', 'Top Selling Product Added Successfully');
    }

    // editTopSelling

    function editTopSelling($id){
        $editTopSelling = TopSelling::find($id);
        return view('backend.topSelling.editTopSelling',compact('editTopSelling'));
    }

    // updateTopSelling

    function updateTopSelling(Request $request, $id){
        $p_image = $request->file('p_image');

        if($p_image){
            $old_image = $request->old_image;
            if($old_image){
                unlink($old_image);
            }

            $img_ext = $p_image->getClientOriginalExtension();

            $img_or_name = $p_image->getClientOriginalName();
            $divide_name = current(explode('.',$img_or_name));
            $nameGen = preg_replace('/[^A-Za-z0-9\-]/', '_' ,$divide_name);
            $date_img_name = date('d_m_y_h_i_sa_');
            $up_location = "frontend/assets/images/demos/demo-10/products/";
            $image_name = $date_img_name . $nameGen . '.' . $img_ext;
            // $final_db_upload = $up_location . $date_img_name . $nameGen . '.' . $img_ext;
            $final_db_upload = $up_location . $image_name;
            $p_image->move($up_location, $image_name);

            $addTopSelling = TopSelling::find($id);
            $addTopSelling->l_primary = $request->l_primary;
            $addTopSelling->l_sell = $request->l_sell;
            $addTopSelling->p_image = $final_db_upload;
            $addTopSelling->p_gender = $request->p_gender ;
            $addTopSelling->p_item = $request->p_item;
            $addTopSelling->p_title = $request->p_title;
            $addTopSelling->p_price = $request->p_price;
            $addTopSelling->p_n_price = $request->p_n_price;
            $addTopSelling->p_o_price = $request->p_o_price;
            $addTopSelling->p_rating_number = $request->p_rating_number;
            $addTopSelling->update();
            return redirect()->route('topSelling')->with('success', 'Top Selling Updated Successfully');
        }

        $addTopSelling = TopSelling::find($id);
        $addTopSelling->l_primary = $request->l_primary;
        $addTopSelling->l_sell = $request->l_sell;
        $addTopSelling->p_gender = $request->p_gender ;
        $addTopSelling->p_item = $request->p_item;
        $addTopSelling->p_title = $request->p_title;
        $addTopSelling->p_price = $request->p_price;
        $addTopSelling->p_n_price = $request->p_n_price;
        $addTopSelling->p_o_price = $request->p_o_price;
        $addTopSelling->p_rating_number = $request->p_rating_number;
        $addTopSelling->update();
        return redirect()->route('topSelling')->with('success', 'Top Selling Updated Successfully');
    }

    // deleteTopSelling

    function deleteTopSelling($id){
        $deleteTopSelling = TopSelling::find($id);
        $image = $deleteTopSelling->p_image;
        if($image){
            unlink($image);
        }
        $deleteTopSelling->delete();
        return redirect()->route('topSelling')->with('success', 'Top Selling Deleted Successfully');
    }
}
