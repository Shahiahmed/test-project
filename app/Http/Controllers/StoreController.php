<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('store.index', compact('products'));
    }
    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('store.show', compact('product'));
    }

    public function order(Request $request)
    {
        $data = $request->validate([
            'product_id'       => 'required|exists:products,id',
            'customer_name'    => 'required|string|max:255',
            'order_date'       => 'required|date',
            'quantity'         => 'required|integer|min:1',
            'customer_comment' => 'nullable|string',
        ]);

        $data['status'] = 'новый';

        Order::create($data);

        return redirect()->route('products.show', $data['product_id'])
            ->with('success', 'Заказ успешно оформлен!');
    }

    public function orders()
    {

        $orders = Order::with(['product', 'product.category'])
            ->orderBy('order_date', 'desc')
            ->get();

        return view('store.order', compact('orders'));
    }
}
