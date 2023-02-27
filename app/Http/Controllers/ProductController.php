<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function productPage()
    {
        return view('productPage');
    }

    public function cashOnDelivery(Request $request)
    {
        if (Auth::id()) {
            $request->validate([
                'fullname' => 'required',
                'city' => 'required',
                'phone' => ['required', 'integer'],
                'quantity' => 'required'
            ]);

            $user = Auth::user();
            $productTitle = 'The smart ID Tag ';
            $totalPrice = 180 * $request->quantity;

            // $order = new Order();
            Order::create([
                'userId' => $user->id,
                'userName' => $request->fullname,
                'userEmail' => $user->email,
                'userPhone' => $request->phone,
                'productTitle' => $productTitle,
                'quantity' => $request->quantity,
                'price' => $totalPrice,
                // for delivery status there are two values 'processing' and 'delivered'
                'deliveryStatus' => 'processing'
            ]);

            return to_route('productPage')->with('success', 'we have received your order, we will get call you soon');
        }
        else {
            return redirect()->route('login');
        }

    }
}
