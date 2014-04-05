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



Route::get("books", function() {
	return "all the books";
});

Route::get("book", function() {
	return "show the create book form";
});

Route::post("book", function() {
	return "craete the book record, and redirect";
});


Route::get("api", function() {
	return Response::json([
		"foo" => "bar"
	]);
});

Route::filter('auth', function()
{
	if (Session::get("email") == null) {
		return Redirect::route("user.login");
	}
});

Route::get("filtered1", ["before" => "foo", function() {
	return "this is filtered";
}]);

Route::group(["before" => "auth"], function() {
	Route::get("filtered1", function() {
		return "this is filtered";
	});

	Route::get("filtered2", function() {
		return "this is filtered";
	});

	Route::get("filtered3", function() {
		return "this is filtered";
	});
});


Route::get("foo", [
	"as"   => "foo",
	"uses" => "PostsController@create"
]);
