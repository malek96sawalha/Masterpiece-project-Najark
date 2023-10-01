<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $projects = Project::all();
$categories = Category::all();

        return view('pages.index')->with('categories', $categories)->with("projects", $projects);
    }
    public function products($id)
    {
        $products = Product::where('categoryId', $id)->get();


        return view('pages.products')->with('products', $products);
    }
    public function productdetail($id)
    {
        $product = Product::where('id', $id)->first();


        return view('pages.productdetail')->with('product', $product);
    }
    public function addcart($id)
    {
        // Ensure the 'cart' session variable is initialized
        if (!session()->has('cart')) {
            session(['cart' => []]);
        }

        // Push the new $id into the 'cart' session array
        session()->push('cart', $id);

        // Retrieve all product IDs from the 'cart' session array


        // Return the view with the products
        return redirect()->route("cart");
    }
    public function checkout()
    {


        return view("pages.checkout");
    }
    public function deletecart($id)
    {
        // Ensure the 'cart' session variable is initialized
         // Get the 'cart' array from the session
         $cart = session('cart', []);

         // Find the first occurrence of the product ID in the 'cart' array
         $key = array_search($id, $cart);

         // If the product ID was found (i.e., $key is not false), remove it
         if ($key !== false) {
             unset($cart[$key]);
         }

         // Update the 'cart' array in the session
         session(['cart' => array_values($cart)]);
        // Retrieve all product IDs from the 'cart' session array


        // Return the view with the products
        return redirect()->route("cart");
    }


    public function cart()
    {
        $productIds = session('cart');

        // Calculate product quantities by counting the occurrences of each product ID
        $productQuantities = array_count_values($productIds);

        // Use the Product model to retrieve data from the database based on the IDs
        $products = Product::whereIn('id', array_keys($productQuantities))->get();

        // Loop through the collection of products and assign their quantities
        foreach ($products as $product) {
            $product->quantity = $productQuantities[$product->id];
        }
        return view("pages.cart")->with("products", $products);
    }
    public function index()
    {

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
