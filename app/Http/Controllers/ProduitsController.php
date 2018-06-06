<?php

namespace App\Http\Controllers;

use App\Tartes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Tartes::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            return view('products.store');
        } else
            return redirect('/')->with('status', 'Accès refusé');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tartes::create([
            'title' => $request->prodname,
            'bio' => $request->isbio,
            'sale_sucre' => $request->taste,
            'color' => $request->color,
            'link_img' => $request->imgpath,
            'description' => $request->proddescription,
            'tarteornot' => $request->tarteornot
        ]);
        return redirect('/produits')->with('status', 'Nouveau produit ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produits = Tartes::find($id);
        return view('products.show', compact('produits'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::check()) {
        $produits = Tartes::find($id);

        return view('products.edit', compact('produits'));
    }else {
        return redirect('/welcome')->with('status', 'Accès refusé');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Tartes::find($id)->update([
            'title' => $request->tireprod,
            'img_link' => $request->imgprod,
            'description' => $request->prod,
            'price' => $request->productPrice
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
