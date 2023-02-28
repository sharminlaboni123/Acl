<?php

namespace App\Http\Controllers;

use App\Models\TotalProduct;
use Illuminate\Http\Request;

class TotalProductController extends Controller
{
    // addTotalProduct
    function addTotalProduct(Request $request){
        $tp_image = $request->file('tp_image');
        if($tp_image){
            $img_ext = $tp_image->getClientOriginalExtension();
            $img_or_name = $tp_image->getClientOriginalName();
            $divide_name = current(explode('.',$img_or_name));
            $nameGen = preg_replace('/[^A-Za-z0-9\-]/', '_' ,$divide_name);
            $date_img_name = date('d_m_y_h_i_sa_');
            $up_location = "frontend/assets/images/demos/demo-10/banners/";
            $image_name = $date_img_name . $nameGen . '.' . $img_ext;
            // $final_db_upload = $up_location . $date_img_name . $nameGen . '.' . $img_ext;
            $final_db_upload = $up_location . $image_name;
            $tp_image->move($up_location, $image_name);

            $addTotalProduct = new TotalProduct();
            $addTotalProduct->title = $request->title;
            $addTotalProduct->people = $request->people;
            $addTotalProduct->total_product = $request->total_product ;
            $addTotalProduct->tp_image = $final_db_upload;
            $addTotalProduct->save();
            return redirect()->back()->with('success', 'Total Product Added Successfully');
        } else {
            $addTotalProduct = new TotalProduct();
            $addTotalProduct->title = $request->title;
            $addTotalProduct->people = $request->people;
            $addTotalProduct->total_product = $request->total_product ;
            $addTotalProduct->save();
            return redirect()->back()->with('success', 'Total Product Added Successfully');
        }

    }

    //  editTotalProduct

    function editTotalProduct($id){
        $totalProduct = TotalProduct::find($id);
        return view('backend.totalProduct.editTotalProduct',compact('totalProduct'));
    }

    //  updateTotalProduct
    function updateTotalProduct(Request $request, $id){
        $tp_image = $request->file('tp_image');

        if($tp_image){

            $old_image = $request->old_image;
            if($old_image){
                unlink($old_image);
            }

            $img_ext = $tp_image->getClientOriginalExtension();
            $img_or_name = $tp_image->getClientOriginalName();
            $divide_name = current(explode('.',$img_or_name));
            $nameGen = preg_replace('/[^A-Za-z0-9\-]/', '_' ,$divide_name);
            $date_img_name = date('d_m_y_h_i_sa_');
            $up_location = "frontend/assets/images/demos/demo-10/banners/";
            $image_name = $date_img_name . $nameGen . '.' . $img_ext;
            $final_db_upload = $up_location . $image_name;
            $tp_image->move($up_location, $image_name);

            $updateTotalProduct = TotalProduct::find($id);
            $updateTotalProduct->title = $request->title;
            $updateTotalProduct->people = $request->people;
            $updateTotalProduct->total_product = $request->total_product ;
            $updateTotalProduct->tp_image = $final_db_upload;
            $updateTotalProduct->update();
            return redirect()->route('totalProduct')->with('success', 'Total Product Updated Successfully');

        } else {
            $updateTotalProduct = TotalProduct::find($id);
            $updateTotalProduct->title = $request->title;
            $updateTotalProduct->people = $request->people;
            $updateTotalProduct->total_product = $request->total_product ;
            $updateTotalProduct->update();
            return redirect()->route('totalProduct')->with('success', 'Total Product Updated Successfully');
        }

    }

    function deleteTotalProduct($id){
        $deleteTotalProduct = TotalProduct::find($id);
        $image = $deleteTotalProduct->tp_image;
        if($image){
            unlink($image);
        }
        $deleteTotalProduct->delete();
        return redirect()->route('totalProduct')->with('success', 'Total Product Deleted Successfully');
    }
}
