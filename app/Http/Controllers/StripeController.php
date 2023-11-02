<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\shipment;
use App\Models\Orderdetail;
use App\Models\orderItem;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StripeController extends Controller
{
    public function payment(Request $request)
    {

        // $request->validate([
        //     'name' =>['required', 'max:30', 'regex:/^[a-zA-Z\s]+$/'],
        //     'city' =>['required', 'max:30', 'regex:/^[a-zA-Z\s]+$/'],
        //     'address' => 'required|max:30',
        //     'number' => [
        //         'required',
        //         'min:8',
        //         'regex:/^9627\d{8}$/'
        //     ]
        //     ],[
        //     'number.required' => 'Phone number is required.',
        //     'number.regex' => 'phone number must start with "9627" and be 12 characters long.',
        // ]);

        $user = User::find(Auth::user()->id); // Replace $userId with the user's ID
// dd($user);
        if ($user) {
            $user->number =$request->number ; // Replace with the actual phone number
            $user->name =$request->name ; // Replace with the actual phone number
            $user->save();
        }
        // $user->address()->updateOrCreate([], ['address' => $request->address ]);


        $productIds = session('cart'); // Your array of product IDs


if (is_array($productIds) && count($productIds) > 0) {

    // Use the Product model to retrieve data from the database based on the IDs
    $products = Product::whereIn('id', array_keys($productIds))->get();

    // Define an array to hold the line items for Stripe

$lineItems = [];

// Loop through the collection of products and add them to the line items array
foreach ($products as $product) {
    $lineItems[] = [
        'price_data' => [
            'currency' => 'usd',
            'product_data' => [
                'name' => $product->name, // Use the product name from your database
            ],
            'unit_amount' => $product->price * 100, // Convert the price to cents
        ],
        'quantity' => 1, // Use the quantity you calculated
    ];
}

// Check if the line_items array is empty before creating the Stripe Checkout session
if (empty($lineItems)) {
    // Handle the case when the cart is empty (no line items)
    // You can redirect or display a message to the user
    return redirect()->route('cart');
}

\Stripe\Stripe::setApiKey(config('stripe.stripe_sk'));
$response = \Stripe\Checkout\Session::create([
    'line_items' => $lineItems, // Use the dynamically created line items
    'mode' => 'payment',
    'success_url' => route('home'),
    'cancel_url' => route('stripe_cancel'),
]);
        $iduser = auth()->user()->id;
        $cart = Cart::where('customerId', $iduser)->with('product')->get();
        // $cart = session('cart');

        dd($cart);
        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice += $item->product->price * $item->quantity;
        }

        // dd($request->phone,now()->format('Y-m-d'));
        $shipment = shipment::create([
            'userId' => auth()->user()->id,
            'shipmentDate' => now()->format('Y-m-d'),
            // 'address' => $request->address,
            // 'phone' => $request->phone,
            // 'city' => $request->city,

        ]);

        $order = Orderdetail::create([
            'orderDate' => now()->format('Y-m-d'),
            'customerId' => auth()->user()->id,
            'totalPrice' => $totalPrice,
            'shipmentId' => $shipment->id,

        ]);
        $payment = Payment::create([
            'orderDate' => now()->format('Y-m-d'),
            'userId' => auth()->user()->id,
            'amount' => $totalPrice,
            'shipmentId' => $shipment->id,

        ]);

// dd($item->product);
        foreach ($cart as $item){
            orderItem::create([
                'customerId' => auth()->user()->id,
                'orderId' => $order->id,
                'productId' => 35,
                'quantity' => 70,
                'price' => 1000,
        ]);
        }

        cart::where('customerId', $iduser)->delete();

return redirect()->away($response->url);

} else {
    // Handle the case when the cart is empty (no line items)
    // You can redirect or display a message to the user
    return redirect()->route('home');
}


    }

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
        $payment = Payment::create([
            'orderDate' => now()->format('Y-m-d'),
            'userId' => auth()->user()->id,
            'amount' => $totalPrice,
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



        return redirect()->route('home');
    }

    public function success()
    {

return redirect()->route('home');
    }

    public function cancel()
    {
        return "Payment is cancelled!";
    }
}
