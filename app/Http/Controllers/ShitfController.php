<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shitf;
use App\Models\Client;
use Illuminate\View\View;
class ShitfController extends Controller
{

    public function index():View
    {

        $nameClients = Client::pluck('name');

        $shitfs = Shitf::all();
        return view('shitf.index', compact('shitfs', 'nameClients'));

    }


}
