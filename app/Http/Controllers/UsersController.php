<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {

        $users = User::all();
        return view('dashboard.users.users', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.adminCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|email|unique:admins,email,',
            'phone' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);

        // Upload and store the image
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/admins'), $imageName);

        // Create a new product with the image filename
        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->input('password')),
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $imageName,
        ]);

        return redirect()->route('admins.index')->with('success', 'Admin Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(User $admin)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(User $admin)
    {
        return view('dashboard.admin.adminUpdate', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $admin)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'phone' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp', // Adjust validation rules as needed
        ]);

        // Upload and store the image
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/admins'), $imageName);


        $admin->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $imageName,
        ]);

        if (!$admin->save()) {
            return redirect()->route('admins.index')->with('error', 'Error updating admin.');
        }

        return redirect()->route('admins.index')->with('success', 'Admin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $admin)
    {
        $admin->delete();
        return redirect()->route('admins.index');
    }
}
