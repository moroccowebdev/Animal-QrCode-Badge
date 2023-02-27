<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Animal;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminUsers()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function adminAnimals()
    {
        $animals = Animal::all();
        return view('admin.animals.index', compact('animals'));
    }
    
    public function adminOrders()
    {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }

    public function delivered($id){
        $order = Order::where('id','=',$id)->first();
        $order->deliveryStatus = 'delivered';
        $order->save();
        return redirect()->back()->with('success', 'Order delivered');
    }
    public function canceled($id){
        $order = Order::where('id','=',$id)->first();
        $order->deliveryStatus = 'canceled';
        $order->save();
        return redirect()->back()->with('success', 'Order canceled');
    }
}
