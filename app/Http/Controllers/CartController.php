<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $Ncart = [];
        $cart = session('cart');
        $total = 0;

        if ($cart != null) {
            foreach ($cart as $cartItem) {
                $total += $cartItem['quantity'] * (isset($cartItem['price']) ? $cartItem['price'] : 0);
            }
        }




        // if (auth()->user()) {
        //     $iduser = auth()->user()->id;
        //     $cart = Carts::where('customerId', $iduser)->with('product')->get();

        //     foreach ($cart as $item) {
        //         array_push($Ncart, $item->productId);
        //     }

        //     $items = count($Ncart);
        // } else {
        //     $cart = session('cart');
        // }











        $delivery = 40;

        return view('pages.cart', compact('cart', 'total', 'delivery'));
    }

    public function store(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();
        $sessioncart = session()->get('cart', []);

        if (isset($sessioncart[$id])) {
            $sessioncart[$id]['quantity'] += isset($request->quantity) ? $request->quantity : 1;
        } else {
            $sessioncart[$id] = [
                'id' => $id,
                'productId' => $product->id,
                'productname' => $product->name,
                'shortdes' => $product->shortDescription,
                'quantity' => isset($request->quantity) ? $request->quantity : 1,
                'image' => $product->image1,
                'price' => $product->price,
            ];
        }

        session()->put('cart', $sessioncart);

        return redirect()->route('cart');
    }

    public function destroy(Request $request, $id)
    {
        if (!session()->has('cart.'.$id)) {
            return redirect()->back()->with('error', 'Item not found in cart.');
        }

        $sessioncart = session()->get('cart');
        unset($sessioncart[$id]);
        session()->put('cart', $sessioncart);

        return redirect()->back();
    }
}
