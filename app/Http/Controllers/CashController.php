<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CashController extends Controller
{
    public function index()
    {
       return view('cash.index');
    }

    public function create()
    {
      return view('cash.create');
    }
}
