<?php

use App\Http\Controllers\countryAddController;
use App\Http\Controllers\arrivalController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\TopSellingController;
use App\Http\Controllers\TotalProductController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogpostController;
use App\Http\Controllers\ElementController;
use App\Http\Controllers\FootermiddlefullController;
use App\Http\Controllers\FutterController;
use App\Http\Controllers\MainMenuController;
use App\Http\Controllers\MenublogController;
use App\Http\Controllers\MenuproductController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SliderController;
use App\Models\Footermiddlefull;
use App\Models\Futter;

use App\Models\Element;
use App\Models\Menublog;
use App\Models\Page;
use App\Models\Menuproduct;
use App\Models\MainMenu;
use App\Models\Offer;
use App\Models\Banner;
use App\Models\Advertisement;
use App\Models\TotalProduct;
use App\Models\Arrival;
use App\Models\Blogpost;
use App\Models\Shop;
use App\Models\TopSelling;

//////////


use Illuminate\Support\Facades\Route;

use App\Models\Country;
use App\Models\Topbar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// backend start
Route::get('/admin', function () {
    // return view('welcome');
    // return view('backend/index');
    $country = Country::all();
    return view('backend/topBar/country', compact('country'));
});

// country add area topbar page
// Route::get('/country', function () {
//     // return view('welcome');
//     $country = Country::all();
//     $topbars = Topbar::all();
//     return view('backend/topBar/topbar', compact('country','topbars'));
// })->name('country');

Route::get('/country', function () {
    $country = Country::all();
    return view('backend/topBar/country', compact('country'));
})->name('country');

Route::get('/addCountryPage', function () {
    return view('backend/topBar/addCountry');
})->name('addCountryPage');

// country add controller
Route::post('/addCountry',[countryAddController::class, 'addCountry'])->name('addCountry');

// country edit controller
Route::get('/editCountry/{id}',[countryAddController::class, 'editCountry'])->name('editCountry');

// country update controller
Route::post('/updateCountry/{id}',[countryAddController::class, 'updateCountry'])->name('updateCountry');

// Country delete controller
Route::get('deleteCountry/{id}',[countryAddController::class, 'deleteCountry']);


// TopMenuPage
Route::get('/topMenuPage', function(){
    $topbars = Topbar::all();
    return view('backend.topBar.topMenu', compact('topbars'));
})->name('topMenuPage');

// addTopMenuPage
Route::get('/addTopMenuPage', function(){
    return view('backend.topBar.addTopMenu');
})->name('addTopMenuPage');

// TopMenu Update controller
Route::post('/updateTopMenu/{id}',[countryAddController::class, 'updateTopbar'])->name('updateTopMenu');

// TopMenu delete controller
Route::get('deleteTopMenu/{id}',[countryAddController::class, 'deleteTopbar']);

// TopMenu edit controller
Route::get('/editTopMenu/{id}',[countryAddController::class, 'editTopbar'])->name('editTopbar');

// topbar menu add
Route::post('/addTopMenu',[countryAddController::class, 'addTopMenu'])->name('addTopMenu');

//slider
Route::prefix('sliders')->group(function()
{

    Route::get('/index',[sliderController::class, 'index'])->name('slider.index');
    Route::get('/create',[sliderController::class, 'create'])->name('slider.create');
    Route::post('/store',[sliderController::class, 'store'])->name('slider.store');
    Route::get('/{id}/edit',[sliderController::class, 'edit'])->name('slider.edit');
    Route::patch('/{id}/update',[sliderController::class, 'update'])->name('slider.update');
    Route::delete('/{id}/destroy',[sliderController::class, 'destroy'])->name('slider.destroy');
});

// arrival page show
Route::get('/arrival', function(){
    $arrivals = Arrival::all();
    return view('backend.arrival.newArrival', compact('arrivals'));
})->name('newArrival');

// Add arrival page show
Route::get('/addArrivalPage', function(){
    return view('backend.arrival.addNewArrival');
})->name('addNewArrivalPage');

// add Arrival
Route::post('/addArrival',[arrivalController::class, 'addArrival'])->name('addArrival');

// editArrival
Route::get('/editArrival/{id}',[arrivalController::class, 'editArrival'])->name('editArrival');

// updateArrival
Route::post('/updateArrival/{id}',[arrivalController::class, 'updateArrival'])->name('updateArrival');

// deleteArrival
Route::get('/deleteArrival/{id}',[arrivalController::class, 'deleteArrival'])->name('deleteArrival');


// Top Seller page show
Route::get('/topSelling', function(){
    $topSelling = TopSelling::all();
    return view('backend.topSelling.topSelling', compact('topSelling'));
})->name('topSelling');

// Top Seller page show
Route::get('/addTopSellingPage', function(){
    return view('backend.topSelling.addTopSelling');
})->name('addTopSellingPage');

// Top Selling add
Route::post('/addTopSelling',[TopSellingController::class, 'addTopSelling'])->name('addTopSelling');

// edittopSelling
Route::get('/editTopSelling/{id}',[TopSellingController::class, 'editTopSelling'])->name('editTopSelling');

// updateTopSelling
Route::post('/updateTopSelling/{id}',[TopSellingController::class, 'updateTopSelling'])->name('updateTopSelling');

// // deleteTopSelling
Route::get('/deleteTopSelling/{id}',[TopSellingController::class, 'deleteTopSelling'])->name('deleteTopSelling');


// Total Product page show
Route::get('/totalProduct', function(){
    $totalProducts = TotalProduct::all();
    return view('backend.totalProduct.totalProduct', compact('totalProducts'));
})->name('totalProduct');

// Total Product page show
Route::get('/addTotalProductPage', function(){
    return view('backend.totalProduct.addTotalProduct');
})->name('addTotalProductPage');

// addTotalProduct
Route::post('/addTotalProduct',[TotalProductController::class, 'addTotalProduct'])->name('addTotalProduct');

// editTotalProduct
Route::get('/editTotalProduct/{id}',[TotalProductController::class, 'editTotalProduct'])->name('editTotalProduct');

// updateTotalProduct
Route::post('/updateTotalProduct/{id}',[TotalProductController::class, 'updateTotalProduct'])->name('updateTotalProduct');

// // deleteTotalProduct
Route::get('/deleteTotalProduct/{id}',[TotalProductController::class, 'deleteTotalProduct'])->name('deleteTotalProduct');


// Bottom advertisement page show
Route::get('/advertisements', function(){
    $bottomAdvertisements = Advertisement::all();
    return view('backend.advertisements.advertisements', compact('bottomAdvertisements'));
})->name('advertisements');

// Add Bottom advertisement page show
Route::get('/addAdvertisementPage', function(){
    return view('backend.advertisements.addBottomAdvertisement');
})->name('addAdvertisementPage');

// addBottomAdvertisement
Route::post('/add/bottomAdvertisement',[AdvertisementController::class, 'addBottomAdvertisement'])->name('addBottomAdvertisement');

// editBottomAdvertisement
Route::get('/editBottomAdvertisement/{id}',[AdvertisementController::class, 'editBottomAdvertisement'])->name('editBottomAdvertisement');

// updateBottomAdvertisement
Route::post('/updateBottomAdvertisement/{id}',[AdvertisementController::class, 'updateBottomAdvertisement'])->name('updateBottomAdvertisement');

// // deleteBottomAdvertisement
Route::get('/deleteBottomAdvertisement/{id}',[AdvertisementController::class, 'deleteBottomAdvertisement'])->name('deleteBottomAdvertisement');


// Banner page show
Route::get('/banners', function(){
    $banners = Banner::all();
    return view('backend.banners.banners', compact('banners'));
})->name('banners');

// Add Banner page show
Route::get('/addBannersPage', function(){
    return view('backend.banners.addBanner');
})->name('addBannersPage');

// addBanner
Route::post('/AddBanner',[BannerController::class, 'addBanner'])->name('addBanner');

// editBanner
Route::get('/editBanner/{id}',[BannerController::class, 'editBanner'])->name('editBanner');

// updateBanner
Route::post('/updateBanner/{id}',[BannerController::class, 'updateBanner'])->name('updateBanner');

// // deletebanner
Route::get('/deleteBanner/{id}',[BannerController::class, 'deleteBanner'])->name('deleteBanner');


// offer page show
Route::get('/offers', function(){
    $offers = Offer::all();
    return view('backend.offers.offers', compact('offers'));
})->name('offers');

// Add offer page show
Route::get('/addOffersPage', function(){
    return view('backend.offers.addOffer');
})->name('addOffersPage');

// addOffer
Route::post('/addOffer',[OfferController::class, 'addOffer'])->name('addOffer');

// editOffer
Route::get('/editOffer/{id}',[OfferController::class, 'editOffer'])->name('editOffer');

// updateOffer
Route::post('/updateOffer/{id}',[OfferController::class, 'updateOffer'])->name('updateOffer');

// deleteOffer
Route::get('/deleteOffer/{id}',[OfferController::class, 'deleteOffer'])->name('deleteOffer');


// Menu bar page show
Route::get('/mainMenu', function(){
    $mainMenus = MainMenu::all();
    return view('backend.menu.mainMenu', compact('mainMenus'));
})->name('mainMenu');

// addMainMenu
Route::post('/add/addMainMenu',[MainMenuController::class, 'addMainMenu'])->name('addMainMenu');

// editMainMenu
Route::get('/editMainMenu/{id}',[MainMenuController::class, 'editMainMenu'])->name('editMainMenu');

// updateMainMenu
Route::post('/updateMainMenu/{id}',[MainMenuController::class, 'updateMainMenu'])->name('updateMainMenu');

// deleteMainMenu
Route::get('/deleteMainMenu/{id}',[MainMenuController::class, 'deleteMainMenu'])->name('deleteMainMenu');


// sub menu shop
//menushop
Route::get('/shop', function () {
    $shop = Shop::all();
    return view('backend/menu/submenu/shop', compact('shop'));
})->name('shop');
Route::post('/add/shop',[ShopController::class, 'addshop'])->name('addshop');
Route::get('/edit/shop/{id}',[ShopController::class, 'editshop'])->name('editshop');
Route::post('/update/shop/{id}',[ShopController::class, 'updateshop'])->name('updateshop');
Route::get('deleteshop/{id}',[ShopController::class, 'deleteshop']);

//menuproduct
Route::get('/menuproduct', function () {
    // return view('welcome');
    $menuproduct = Menuproduct::all();
    return view('backend/menu/submenu/product', compact('menuproduct'));
})->name('menuproduct');
Route::post('/add/menuproduct',[MenuproductController::class, 'addmenuproduct'])->name('addmenuproduct');
Route::get('/edit/menuproduct/{id}',[MenuproductController::class, 'editmenuproduct'])->name('editmenuproduct');
Route::post('/update/menuproduct/{id}',[MenuproductController::class, 'updatemenuproduct'])->name('updatemenuproduct');
Route::get('deleteproduct/{id}',[MenuproductController::class, 'deletemenuproduct']);

//menu pages
Route::get('/page', function () {
    // return view('welcome');
    $page = Page::all();
    return view('backend/menu/submenu/page', compact('page'));
})->name('page');
Route::post('/add/page',[PageController::class, 'addpage'])->name('addpage');
Route::get('/edit/page/{id}',[PageController::class, 'editpage'])->name('editpage');
Route::post('/update/page/{id}',[PageController::class, 'updatepage'])->name('updatepage');
Route::get('deletepage/{id}',[PageController::class, 'deletepage']);

//menu blog
Route::get('/menublog', function () {
    // return view('welcome');
    $menublog = Menublog::all();
    return view('backend/menu/submenu/blog', compact('menublog'));
})->name('menublog');
Route::post('/add/menublog',[MenublogController::class, 'addmenublog'])->name('addmenublog');
Route::get('/edit/menublog/{id}',[MenublogController::class, 'editmenublog'])->name('editmenublog');
Route::post('/update/menublog/{id}',[MenublogController::class, 'updatemenublog'])->name('updatemenublog');
Route::get('deletemenublog/{id}',[MenublogController::class, 'deletemenublog']);

//menubar element
Route::get('/element', function () {
    // return view('welcome');
    $element = Element::all();
    return view('backend/menu/submenu/element', compact('element'));
})->name('element');
Route::post('/add/element',[ElementController::class, 'addelement'])->name('addelement');
Route::get('/edit/element/{id}',[ElementController::class, 'editelement'])->name('editelement');
Route::post('/update/element/{id}',[ElementController::class, 'updateelement'])->name('updateelement');
Route::get('deleteelement/{id}',[ElementController::class, 'deleteelement']);


//blog
Route::prefix('blogposts')->group(function()
{
Route::get('/index',[BlogpostController::class, 'index'])->name('blog.index');

Route::get('/create',[BlogpostController::class, 'create'])->name('blog.create');

    Route::post('/store',[BlogpostController::class, 'store'])->name('blog.store');
    Route::get('/{id}/edit',[BlogpostController::class, 'edit'])->name('blog.edit');
    Route::patch('/{id}/update',[BlogpostController::class, 'update'])->name('blog.update');
    Route::delete('/{id}/destroy',[BlogpostController::class, 'destroy'])->name('blog.destroy');
});

//footer-middle
Route::prefix('footermiddlefulls')->group(function()
{
    Route::get('/index',[FootermiddlefullController::class, 'index'])->name('footer-middle.index');
    Route::get('/create',[FootermiddlefullController::class, 'create'])->name('footer-middle.create');
    Route::post('/store',[FootermiddlefullController::class, 'store'])->name('footer-middle.store');
    Route::get('/{id}/edit',[FootermiddlefullController::class, 'edit'])->name('footer-middle.edit');
    Route::patch('/{id}/update',[FootermiddlefullController::class, 'update'])->name('footer-middle.update');
    Route::delete('/{id}/destroy',[FootermiddlefullController::class, 'destroy'])->name('footer-middle.destroy');
});


//footer-bottom
Route::prefix('futters')->group(function()
{
    Route::get('/index',[FutterController::class, 'index'])->name('footer_bottom.index');
    Route::get('/create',[FutterController::class, 'create'])->name('footer_bottom.create');
    Route::post('/store',[FutterController::class, 'store'])->name('footer_bottom.store');
    Route::get('/{id}/edit',[FutterController::class, 'edit'])->name('footer_bottom.edit');
    Route::patch('/{id}/update',[FutterController::class, 'update'])->name('footer_bottom.update');
    Route::delete('/{id}/destroy',[FutterController::class, 'destroy'])->name('footer_bottom.destroy');
});


// index page show controller
Route::get('/',[indexController::class, 'index']);
// backend end


// Route::get('/', function () {
//     // return view('welcome');
//     return view('index');
// });

Route::get('/product', function () {
    $country = Country::all();
    $topbar = Topbar::all();
    $MainMenus = MainMenu::all();

    $Shops = Shop::all();
    $Menuproducts = Menuproduct::all();
    $Pages = Page::all();
    $Menublogs = Menublog::all();
    $Elements = Element::all();

    $Arrivals = Arrival::all();

    $footer_m = Footermiddlefull::all();
    $futterbottom = Futter::all();

    return view('product', compact('country','topbar','MainMenus','Shops','Menuproducts','Pages','Menublogs','Elements','Arrivals', 'footer_m', 'futterbottom'));
})->name('product');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/single', function () {
    $country = Country::all();
    $topbar = Topbar::all();
    $MainMenus = MainMenu::all();

    $Shops = Shop::all();
    $Menuproducts = Menuproduct::all();
    $Pages = Page::all();
    $Menublogs = Menublog::all();
    $Elements = Element::all();

    $Arrivals = Arrival::all();

    $footer_m = Footermiddlefull::all();
    $futterbottom = Futter::all();

    $blog = Blogpost::all();

    return view('single', compact('country','topbar','MainMenus','Shops','Menuproducts','Pages','Menublogs','Elements','Arrivals', 'footer_m', 'futterbottom', 'blog'));
})->name('single');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');