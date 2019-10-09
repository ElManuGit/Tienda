<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = Address::paginate();

        return view ('addresses.index', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('addresses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addresses = Address::create($request->all());

        return redirect()->route('addresses.edit', $addresses->id)
            ->with('info', 'Dirección guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Address  $addresses
     * @return \Illuminate\Http\Response
     */
    public function show(Address $addresses)
    {
        return view ('addresses.show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Address  $addresses
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $addresses)
    {
        return view ('addresses.edit', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Address  $addresses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $addresses)
    {
        $addresses->update($request->all());

        return redirect()->route('addresses.edit', $addresses->id)
            ->with('info', 'Dirección actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Address  $addresses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $addresses)
    {
        $addresses->delete();

        return back()->with('info', 'Eliminada correctamente');
    }
}
