<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Http\Controllers\API\RegisterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});






Route::group(['middleware' => ['api','changeLanguage'], 'namespace' => 'Api'], function () {
    Route::group(['prefix' => 'buyers'],function (){
        Route::post('remove-acount', 'HomeController@removeAcount');
        Route::post('login', 'HomeController@login');

        Route::post('register', 'HomeController@register');

        Route::post('change_password', 'HomeController@change_password');

        Route::post('forgetpassword', 'HomeController@forgetPassword');

        Route::get('buyer-data', 'HomeController@getBuyerData');
        Route::post('buyer_update', 'HomeController@buyerDataUpdate');
        Route::post('send-order', 'BuyerController@sendOrder');
        Route::get('get-buyer-order', 'BuyerController@getBuyerOrder');
        Route::post('order-status','BuyerController@orderStatus');

        Route::get('get-vendor-order', 'BuyerController@getVendorOrder');


        Route::get('categotries', 'BuyerController@categotries');
        Route::get('products', 'BuyerController@allproduct');
        Route::get('alloffers', 'BuyerController@allOffers');
        Route::get('products/search', 'BuyerController@productSearch');
        Route::get('product/wishlists', 'BuyerController@allProductWishLists');
        Route::get('product/carts', 'BuyerController@ProductCarts');
        Route::post('product/remove-from-cart', 'BuyerController@removeFromCart');


        Route::get('product-details', 'BuyerController@productDetails');

        Route::post('addtocart', 'BuyerController@addtoCart');
        Route::post('addto/wishlists', 'BuyerController@addtoWishlists');
        Route::post('sendhelp', 'BuyerController@sendHelp');
        Route::post('add-review', 'BuyerController@addReview');
        Route::post('add-adress', 'BuyerController@addAdress');
        Route::post('delete-adress', 'BuyerController@deleteAdress');
        Route::get('all-reviews', 'BuyerController@getReview');

        Route::get('addresses', 'BuyerController@allBuyerAddresses');

        Route::get('shops', 'BuyerController@allshops');
        Route::get('banners', 'BuyerController@banners');
        Route::get('contactinfo', 'BuyerController@contactInfo');
        Route::get('countries', 'BuyerController@Countries');
        Route::get('cities', 'BuyerController@Cities');

    });
    });
