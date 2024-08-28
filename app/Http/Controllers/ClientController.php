<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\View\ViewName;

class ClientController extends Controller
{
    public function index(){
        
        $clients = Client::all();
        return view('client.index', compact('clients'));

    }

    public function create(){
        
        return view('client.create');

    }

    public function store(Request $request){

        Client::create($request->all());
        return redirect()->route('client.index');
            
    }

    public function edit(Client $client){
        
        return view('client.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $client->update($request->all());
        return redirect()->route('client.index');
    }

    public function show(Client $client)
    {
        return view('client.show', compact('client'));
    }
}
