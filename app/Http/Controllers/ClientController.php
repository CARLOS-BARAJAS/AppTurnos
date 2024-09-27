<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function index():View
    { 
        $clients = Client::all();
        return view('client.index', compact('clients'));
    }
    public function menu():View
    {
        return view('welcome');
    }

    public function create():View
    { 
        return view('client.create');
    }

    public function store(Request $request):RedirectResponse
    {
        Client::create($request->all());
        return redirect()->route('client.index');  
    }

    public function edit(Client $client):View
    {
        return view('client.edit', compact('client'));
    }

    public function update(Request $request, Client $client):RedirectResponse
    {
        $client->update($request->all());
        return redirect()->route('client.index');
    }

    public function show(Client $client):View
    {
        return view('client.show', compact('client'));
    }

    public function destroy(Request $request, Client $client):RedirectResponse
    {
        $client->delete();
        return redirect()->route('client.index');
    }
}
