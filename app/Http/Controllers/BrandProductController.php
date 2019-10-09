<?php

namespace App\Http\Controllers;

use App\BrandProduct;
use App\Provider;
use Illuminate\Http\Request;

class BrandProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brandProducts = BrandProduct::paginate();

        return view ('brandProducts.index', compact('brandProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $providers = Provider::all();

        return view ('brandProducts.create')->with('providers',$providers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brandProduct = BrandProduct::create($request->all());

        return redirect()->route('brandProducts.index')
            ->with('info', 'Marca guardada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BrandProduct  $brandProduct
     * @return \Illuminate\Http\Response
     */
    public function show(BrandProduct $brandProduct)
    {
        return view ('brandProducts.show', compact('brandProduct'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BrandProduct  $brandProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(BrandProduct $brandProduct)
    {
        return view ('brandProducts.edit', compact('brandProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BrandProduct  $brandProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BrandProduct $brandProduct)
    {
        $brandProduct->update($request->all());

        return redirect()->route('brandProducts.edit', $brandProduct->id)
            ->with('info', 'Marca actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BrandProduct  $brandProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(BrandProduct $brandProduct)
    {
        $brandProduct->delete();

        return back()->with('info', 'Eliminada correctamente');
    }
}
