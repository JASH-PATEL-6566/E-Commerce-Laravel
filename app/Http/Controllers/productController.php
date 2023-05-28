<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Support\Facades\DB;
use App\Models\orders;
use App\Models\User;
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

    function removeFromCart($id){
        $userId = Session::get("user")->id;
        $items = cart::where("user_id",$userId)->where("product_id",$id)->delete();
        return redirect("/");
    }

    function ordersIndex(){
        return view("orders");
    }

    function orderplace(Request $req){
        $user = Session::get("user")->id;
        $products = cart::where("user_id",$user)->get();
        foreach($products as $item){
            $order = new orders();
            $order->user_id = $user;
            $order->product_id = $item->product_id;
            $order->payment_method = $req->input("payment");
            $order->payment_status = "pending";
            $order->status = "pending";
            $order->address = $req->input("address");
            $order->save();
        }
        cart::where("user_id",$user)->delete();
        return redirect("/");
    }

    function myorders(){
        $user = Session::get("user")->id;
        $data = DB::table('orders')
            ->join("product","orders.product_id","=","product.id")
            ->where('orders.user_id',$user)
            ->get();
        return view("myorders",["orders" => $data]);
    }

    
}
