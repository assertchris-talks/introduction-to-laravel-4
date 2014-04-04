<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get("/", function() {
	return View::make("hello");
});

Route::get("products", function() {
  return "show the products";
});

Route::post("product", function() {
   return "save the product";
});

Route::get("product/{id}", function($id) {
  return "show the product {$id}";
});

Route::get("category/{id?}", function($id = 1) {
   return "save the category {$id}";
});

Route::get("user/{id}", function($id) {
  return "show the user {$id}";
})->where("id", "[a-z]+");

Route::pattern("product_id", "[0-9]+");

Route::get("product/{product_id}", function($product_id) {
  return "show the product {$product_id}";
});

Route::get("product/{product_id}/images", function($product_id) {
  return "show the product images for {$product_id}";
});

Route::get("products", function() {
	$products = [
    ["the red one", 12.99],
    ["the blue one", 13.99],
    ["the black one", 11.99]
  ];

  return View::make("products/index", compact("products"));
});

Route::get("users", [
  "as"   => "users.index",
  "uses" => "UsersController@index"
]);
