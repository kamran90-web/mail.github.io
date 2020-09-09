<?php

namespace App\Http\Controllers;

use App\Item;
use App\User ;
use App\Order;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RestaurantController extends Controller
{
    

    public function create_restro() {
        return view('auth/restro');
    }
    
    public function store_restro(Request $request) 
    {
       $restro = new User;
        $restro->name = $request->name;
        $restro->email = $request->email;
        $restro->password = Hash::make($request['password']);
        $restro->user_type = 'Restaurant';
        $restro->save();
        
        return view('auth/login');
    }
    
    

    public function index()
    {
        
        $items =  DB::table('items')->where('user_id', Auth::user()->id)->orderBy('id', 'ASC')->get();
        $users = User::all();
        return view('Restaurant/index', compact('items', 'users'));
    }
   
   public function create()
    {
        return view('Restaurant/create');
    }

    public function store(Request $request) {
        $items = new Item;
        $items->name = $request->name;
        $items->qty = $request->qty;
        $items->price = $request->price;
        $items->category = $request->category;
        $items->user_id = Auth::user()->id;
        $items->save();
        return redirect('index');
    }

    public function edit($id) {
        
        $items = DB::table('items')->where('user_id', $id)->get();
        return view('Restaurant/items', compact('items'));
    }
    
    public function edit_order($id) {
        if (Auth::check()) {
            if (Auth::user()->user_type == 'Customer') {
                $items = Item::find($id);
                return view('Restaurant/order')->withItems($items);
            } else {
                abort(404);
            }
        }
        return redirect('login');
    }
    public function order_store(Request $request) {
        //dd($request);
        $order = new Order;
        $order->restaurant_id = $request->restaurant_id;
        $order->item_id = $request->item_id;
        $order->customer_id = Auth::user()->id;
        $order->save();
        return redirect('index');
    }

    public function orderlist() {
        $orders = DB::table('orders')
                 ->join('items', 'orders.item_id', '=', 'items.id')
                 ->join('users', 'orders.customer_id', '=', 'users.id')
                 ->select('items.name', 'users.name as user_name')->where('restaurant_id', Auth::user()->id)->get();
                return view('Restaurant/orderlist', compact('orders'));
    }
   
}