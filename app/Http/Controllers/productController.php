<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class productController extends Controller
{
    function index(){
        $data =  Product::all();
        return view("product",["products" => $data]);
    }

    function detail($id){
        $data = Product::find($id);
        return view("detail",["productData" => $data]);
    }

    function search(Request $req){
        $data = Product::where("name","like" ,"%".$req->input("query")."%")->get();
        return view("search",["productsData" => $data]);
    }

    function addToCart(Request $req){

        if($req->session()->has("user")){
            $newCart = new cart();
            $newCart->product_id = $req->input("product_id");
            $newCart->user_id = $req->session()->get("user")->id;
            $newCart->save();
            return redirect("/");
        }
        else{
            return redirect("/login");
        }
    }

    static function cartItem(){
        $userId = Session::get("user")->id;
        return cart::where("user_id",$userId)->count();
    }

    function cart(){
        $userId = Session::get("user")->id;
        $cartItems = cart::where("user_id",$userId)->get();
        $resultArray = [];
        foreach($cartItems as $item){
            $fetchProduct = Product::find($item->product_id);
            array_push($resultArray,$fetchProduct);
        }
        return view("cart",["cartProducts" => $resultArray]);
    }

    function logout(){
        Session::forget("user");
        return redirect("../login");
    }

    function removeFromCart($id){
        $userId = Session::get("user")->id;
        $items = cart::where("user_id",$userId)->where("product_id",$id)->delete();
        return redirect("/");
    }
}
