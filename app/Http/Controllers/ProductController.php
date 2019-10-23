<?php

namespace App\Http\Controllers;

use Storage;
use App\Product;
use App\Provider;
use App\BrandProduct;
use App\Category;
use App\Country;
use App\Picture;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $providers = Provider::all();
        $categories = Category::all();
        $brandProducts = BrandProduct::all();
        $countries = Country::all();

        return view('products.create')
            ->with('providers', $providers)
            ->with('categories', $categories)
            ->with('countries', $countries)
            ->with('brandProducts', $brandProducts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product($request->all());
        $product->save();


        //Imagen
        if ($request->file('picture')) {
            $file = $request->file('picture');
            $pictureName = 'prod_' . $product->id . '_' . time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('products')->put($pictureName, \File::get($file));
            $imagen = Picture::create([
                'name' => $pictureName,
                'product_id' => $product->id,
            ]);
        }


        $product->categories()->sync($request->get('category_id'));


        return redirect()->route('products.create')
            ->with('info', 'Producto guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return redirect()->route('products.edit', $product->id)
            ->with('info', 'Producto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
