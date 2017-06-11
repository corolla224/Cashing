<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cash;

class CashController extends Controller
{
    public function index()
    {
       $cashes = cash::paginate(10);
       
       return view('cash.index', compact('cashes') );
    }
    
    public function create()
    {
      return view('cash.create');
    }

    public function store(Request $request)
    {

      cash::create([
              'method'=>$request->method,
              'fromBank'=>$request->fromBank,
              'fromAccountNumber'=>$request->fromAccountNumber,
              'fromAccountName'=>$request->fromAccountName,
              'transferDate'=>$request->transferDate,
              'transferTime'=>$request->transferTime,
              'toBank'=>$request->toBank,
              'toAccountNumber'=>$request->toAccountNumber,
              'toAccountName'=>$request->toAccountName,
              'amount'=>$request->amount,
              'transferStatus'=>$request->transferStatus          

      ]);

      return redirect('cash');
    }
}
