<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {

        $orders = Order::with(['product', 'product.category'])
            ->orderBy('order_date', 'desc')
            ->get();

        return view('admin.orders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::with(['product', 'product.category'])->findOrFail($id);
        return view('admin.orders.show', compact('order'));
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'status' => 'required|in:новый,выполнен',
        ]);

        $order = Order::findOrFail($id);
        $order->update($data);

        return redirect()->route('admin.orders.show', $order->id)
            ->with('success', 'Статус заказа успешно обновлён.');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.orders.index')
            ->with('success', 'Заказ удалён.');
    }
}
