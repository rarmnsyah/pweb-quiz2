<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index (){
        return view('transaksi.index');
    }

    public function create(){
        return view('transaksi.create');
    }
}
