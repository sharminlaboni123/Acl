<?php

namespace App\Http\Controllers;

use App\Models\Offer;

use Illuminate\Http\Request;

class OfferController extends Controller
{
    // addOffer
    function addOffer(Request $request){
        $addOffer = new Offer();
        $addOffer->offer_title = $request->offer_title;
        $addOffer->offer_condition = $request->offer_condition;
        $addOffer->offer_class = $request->offer_class;
        $addOffer->save();
        return redirect()->back()->with('success', 'Offer Added Successfully');
    }

    // editOffer
    function editOffer($id){
        $offer = Offer::find($id);
        return view('backend.offers.editOffer',compact('offer'));
    }

    // updateOffer
    function updateOffer(Request $request, $id){
        $updateOffer = Offer::find($id);
        $updateOffer->offer_title = $request->offer_title;
        $updateOffer->offer_condition = $request->offer_condition;
        $updateOffer->offer_class = $request->offer_class;
        $updateOffer->update();
        return redirect()->route('offers')->with('success', 'Offer Added Successfully');
    }

    // deleteOffer
    function deleteOffer($id){
        $deleteOffer = Offer::find($id);
        $deleteOffer->delete();
        return redirect()->route('Offers')->with('success', 'Offers Deleted Successfully');
    }
}
