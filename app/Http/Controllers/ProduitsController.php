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
            'titre' => $request->prodname,
            'bio' => $request->isbio,
            'sale_sucre' => $request->taste,
            'Conseil_de_prep' => $request->prepadvises,
            'link_img' => $request->imgpath,
            'description' => $request->proddescription,
            'tarteornot' => $request->tarteornot
        ]);
        return redirect('/produits')->with('status', 'Nouveau produit ajouté avec succès !');
    }
    public function indexData()
    {
        $products = ProductBDE::all()->toJson();
        echo $products;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit = Tartes::find($id);
        return view('products.show', compact('produit'));
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
        $product = ProductBDE::find($id);

        return view('products.edit', compact('product'));
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
        //
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
