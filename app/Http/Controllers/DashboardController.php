<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        //transaksi

        $transaksi = Transaction::count();

        dd($transaksi);

        return view('beckend.dashboard', compact('transaksi'));
    }
}
