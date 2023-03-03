<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequestFactures;
use App\Models\Factures;
use Illuminate\Http\Request;

class FacturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('factures.index',['factures'=>Factures::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('factures.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequestFactures $request)
    {
        Factures::create([
            'ref'=>$request['ref'],
            'titre'=>$request['titre'],
            'prix'=>$request['prix'],
            'tva'=>$request['tva'],
            'total' => $request['prix'] + (($request['prix'] / 100) * $request['tva']) ,
            'client'=>$request['client'],
            'description'=>$request['description'],
        ]);
        return redirect('/factures');
    }

    /**
     * Display the specified resource.
     */
    public function show(Factures $facture)
    {
        return view('factures.show',['factures'=>$facture]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Factures $facture)
    {
        return view('factures.edit',['factures'=>$facture]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        
        $facture= Factures::find($id);
        $facture->ref = $request->input('ref');
        $facture->titre = $request->input('titre');
        $facture->prix = $request->input('prix');
        $facture->tva = $request->input('tva');
        $facture->total = $request->input('prix') + (($request->input('prix') / 100) * $request->input('tva'));
        $facture->description = $request->input('description');
        $facture->save();
        return redirect('/factures');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Factures::destroy($id);
        return redirect('/factures');
    }
}
