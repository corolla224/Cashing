<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//ues App\cash;

class CashController extends Controller
{
    public function index()
    {
       //$cashes = cash::paginate(10);
       
       return view('cash.index', compact('cashes') );
    }
    
    public function create()
    {
      return view('cash.create');
    }
}
