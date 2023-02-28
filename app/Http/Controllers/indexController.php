<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Arrival;
use App\Models\Banner;
use App\Models\Blogpost;
use App\Models\Country;
use App\Models\Element;
use App\Models\MainMenu;
use App\Models\Menublog;
use App\Models\Menuproduct;
use App\Models\Offer;
use App\Models\Page;
use App\Models\Shop;
use App\Models\Slider;
use App\Models\Topbar;
use App\Models\TopSelling;
use App\Models\TotalProduct;
use App\Models\Footermiddlefull;
use App\Models\Futter;
use Illuminate\Http\Request;

class indexController extends Controller
{
    // index page show
    function index(){
        $topbar = Topbar::all();
        $country = Country::all();
        $advertisements = Advertisement::all();
        $banners = Banner::all();
        $offers = Offer::all();
        $TotalProducts = TotalProduct::all();
        $arrivals = Arrival::all();
        $TopSellings = TopSelling::all();
        $MainMenus = MainMenu::all();

        $Shops = Shop::all();
        $Menuproducts = Menuproduct::all();
        $Pages = Page::all();
        $Menublogs = Menublog::all();
        $Elements = Element::all();

        $sliderdata = Slider::all();
        $blog = Blogpost::all();
        $footer_m = Footermiddlefull::all();
        $futterbottom = Futter::all();

        if ($country || $topbar || $advertisements || $offers || $TotalProducts || $arrivals || $TopSellings || $MainMenus || $Shops || $Menuproducts || $Pages || $Menublogs || $Elements || $sliderdata || $blog || $footer_m || $futterbottom) {
            return view('index', compact('country', 'topbar', 'advertisements', 'banners', 'offers', 'TotalProducts', 'arrivals','TopSellings', 'MainMenus', 'Shops','Menuproducts','Pages','Menublogs','Elements', 'sliderdata', 'blog','footer_m', 'futterbottom'));
        } else {
            return view('index');
        }
    }
}
