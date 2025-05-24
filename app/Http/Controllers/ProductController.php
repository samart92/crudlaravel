<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        //dd($data->all());
        return view('product.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("product.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //add photo to photo folder
        $photo = $request->file('poto')->store('public/photos');

        Product::create([
            'name' => $request->proName,
            'price' => $request->price,
            'quantity' => $request->quatity,
            'photo' => $photo
        ]);
        return redirect()->route("products.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('product.edit', ['data' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        //for photo
        if ($request->hasFile('photo')) {
            Storage::delete($product->photo);
            $photo = $request->file('photo')->store('public/photos');
        } else {
            $photo = $product->photo;
        }

        // dd($request->all(), $id);

        $product->name = $request->proName;
        $product->price = $request->price;
        $product->quantity = $request->quatity;
        $product->photo = $photo;
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //dd($id);
        $product = Product::find($id);
        $product->delete();
        Storage::delete($product->photo);
        return redirect()->route("products.index");
    }
}
