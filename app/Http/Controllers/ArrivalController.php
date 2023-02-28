<?php

namespace App\Http\Controllers;
use App\Models\Arrival;

use Illuminate\Http\Request;

class ArrivalController extends Controller
{
    //add Arrival
    function addArrival(Request $request){

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

        $addArrival = new Arrival();
        $addArrival->l_primary = $request->l_primary;
        $addArrival->l_sell = $request->l_sell;
        $addArrival->p_image = $final_db_upload;
        $addArrival->p_gender = $request->p_gender ;
        $addArrival->p_item = $request->p_item;
        $addArrival->p_title = $request->p_title;
        $addArrival->p_price = $request->p_price;
        $addArrival->p_n_price = $request->p_n_price;
        $addArrival->p_o_price = $request->p_o_price;
        $addArrival->p_rating_number = $request->p_rating_number;
        $addArrival->save();
        return redirect()->route('newArrival')->with('success', 'Arrival Added Successfully');
    }

    // editArrival
    function editArrival($id){
        $arrival = Arrival::find($id);
        return view('backend.arrival.editArrival',compact('arrival'));
    }

    function updateArrival(Request $request, $id){
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

            $addArrival = Arrival::find($id);
            $addArrival->l_primary = $request->l_primary;
            $addArrival->l_sell = $request->l_sell;
            $addArrival->p_image = $final_db_upload;
            $addArrival->p_gender = $request->p_gender ;
            $addArrival->p_item = $request->p_item;
            $addArrival->p_title = $request->p_title;
            $addArrival->p_price = $request->p_price;
            $addArrival->p_n_price = $request->p_n_price;
            $addArrival->p_o_price = $request->p_o_price;
            $addArrival->p_rating_number = $request->p_rating_number;
            $addArrival->update();
            return redirect()->route('newArrival')->with('success', 'Arrival Updated Successfully');
        }

        $addArrival = Arrival::find($id);
        $addArrival->l_primary = $request->l_primary;
        $addArrival->l_sell = $request->l_sell;
        $addArrival->p_gender = $request->p_gender ;
        $addArrival->p_item = $request->p_item;
        $addArrival->p_title = $request->p_title;
        $addArrival->p_price = $request->p_price;
        $addArrival->p_n_price = $request->p_n_price;
        $addArrival->p_o_price = $request->p_o_price;
        $addArrival->p_rating_number = $request->p_rating_number;
        $addArrival->update();
        return redirect()->route('newArrival')->with('success', 'Arrival Updated Successfully');
    }

    function deleteArrival($id){
        $deleteArrival = Arrival::find($id);
        $image = $deleteArrival->p_image;
        if($image){
            unlink($image);
        }
        $deleteArrival->delete();
        return redirect()->route('newArrival')->with('success', 'Arrival Deleted Successfully');
    }
}
