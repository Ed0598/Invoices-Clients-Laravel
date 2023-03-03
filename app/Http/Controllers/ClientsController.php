<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequestClients;
use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('clients.index',['clients'=>Clients::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequestClients $request)
    {


        Clients::create([
            'société'=>$request['société'],
            'téléphone'=>$request['téléphone'],
            'email'=>$request['email'],
            'adresse'=>$request['adresse'],
            'TVA'=>$request['TVA'],
            'facture'=>$request['facture'],
            'Description'=>$request['Description'],
        ]);
        return redirect('/clients');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Clients $client)
    {
        return view('clients.show',['clients'=>$client]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clients $client)
    {
        return view('clients.edit',['clients'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreatePostRequestClients $request, $id)
    {
        $client= Clients::find($id);
        $client->société=$request['société'];
        $client->téléphone=$request['téléphone'];
        $client->email=$request['email'];
        $client->adresse=$request['adresse'];
        $client->TVA=$request['TVA'];
        $client->facture=$request['facture'];
        $client->Description=$request['Description'];
        $client->save();
        return redirect('/clients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Clients::destroy($id);
        return redirect('/clients');
    }
}
