<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

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
}
