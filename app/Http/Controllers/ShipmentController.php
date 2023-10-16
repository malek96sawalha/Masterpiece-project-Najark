<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use App\Models\Cart;
use App\Models\Orderitem;
use App\Models\Orderdetail;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pages.checkout");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $iduser = auth()->user()->id;
        $cart = Cart::where('customerId', $iduser)->with('product')->get();

        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice += $item->product->price * $item->quantity;
        }

        // dd($request->phone,now()->format('Y-m-d'));
        $shipment = shipment::create([
            'userId' => auth()->user()->id,
            'shipmentDate' => now()->format('Y-m-d'),
            'address' => $request->address,
            'phone' => $request->phone,
            'city' => $request->city,

        ]);

        $order = Orderdetail::create([
            'orderDate' => now()->format('Y-m-d'),
            'customerId' => auth()->user()->id,
            'totalPrice' => $totalPrice,
            'shipmentId' => $shipment->id,

        ]);

// dd($item->product);
        foreach ($cart as $item){
            orderItem::create([
                'customerId' => auth()->user()->id,
                'orderId' => $order->id,
                'productId' => $item->productId,
                'quantity' => $item->quantity,
                'price' => $item->product->price,
        ]);
        }

        cart::where('customerId', $iduser)->delete();



        return redirect()->route('stripe');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function show(Shipment $shipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Shipment $shipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shipment $shipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shipment $shipment)
    {
        //
    }
}
