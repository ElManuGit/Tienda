<?php

namespace App\Http\Controllers;

use App\ProviderOrder;
use Illuminate\Http\Request;

class ProviderOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providerOrders = ProviderOrder::paginate();

        return view ('providerOrders.index', compact('providerOrders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('providerOrders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $providerOrder = ProviderOrder::create($request->all());

        return redirect()->route('providerOrders.edit', $providerOrder->id)
            ->with('info', 'Orden a proveedor guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProviderOrder  $providerOrder
     * @return \Illuminate\Http\Response
     */
    public function show(ProviderOrder $providerOrder)
    {
        return view ('providerOrders.show', compact('providerOrder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProviderOrder  $providerOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(ProviderOrder $providerOrder)
    {
        return view ('providerOrders.edit', compact('providerOrder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProviderOrder  $providerOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProviderOrder $providerOrder)
    {
        $providerOrder->update($request->all());

        return redirect()->route('providerOrders.edit', $providerOrder->id)
            ->with('info', 'Orden a proveedor actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProviderOrder  $providerOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProviderOrder $providerOrder)
    {
        $providerOrder->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
