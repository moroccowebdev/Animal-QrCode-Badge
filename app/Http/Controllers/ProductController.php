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
        $product = Product::all()->first();
        return view('productPage', compact('product'));
    }

    public function cashOnDelivery(Request $request, $id)
    {
        if (Auth::id()) {
            $request->validate([
                'fullname' => 'required',
                'city' => 'required',
                'phone' => ['required', 'integer'],
                'quantity' => 'required'
            ]);

            $product = Product::find($id);
            $user = Auth::user();

            $totalPrice = $product->price * $request->quantity;

            // $order = new Order();
            Order::create([
                'userId' => $user->id,
                'userName' => $request->fullname,
                'userEmail' => $user->email,
                'userPhone' => $request->phone,
                'productTitle' => $product->title,
                'productId' => $product->id,
                'quantity' => $request->quantity,
                'price' => $totalPrice,
                // for delivery status there are two values 'processing' and 'delivered'
                'deliveryStatus' => 'processing'
            ]);

            return redirect()->route('productPage')->with('success', 'we have received your order, we will get call you soon');
        }
        else {
            return redirect()->route('login');
        }

    }
}
