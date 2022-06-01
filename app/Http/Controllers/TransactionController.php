<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Checkout;
use App\Models\Kerusakan;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $transaction = Transaction::all();

        $transaction = Transaction::Join(
            'checkouts',
            'transactions.id',
            '=',
            'checkouts.transaction_id'
        )->get(['transactions.*', 'checkouts.status', 'checkouts.bukti_pembayaran']);

        // dd($transaction);
        return view('backend.transaction.index', compact('transaction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('admin.transaction.index')
            ->with('success', 'Data Barang berhasil dihapus.');
    }

    public function serviceHp()
    {
        # code...
        $category = Category::where('name', 'Smartphone')->first();
        $kerusakan = Kerusakan::where('category_id', $category->id)->get();

        return view('frontend.service-smartphone', compact('category', 'kerusakan'));
    }

    public function serviceLaptop()
    {
        # code...
        $category = Category::where('name', 'Laptop')->first();
        $kerusakan = Kerusakan::where('category_id', $category->id)->get();

        return view('frontend.service-laptop', compact('category', 'kerusakan'));
    }

    public function servicePrinter()
    {
        # code...
        $category = Category::where('name', 'Printer')->first();
        $kerusakan = Kerusakan::where('category_id', $category->id)->get();

        return view('frontend.service-printer', compact('category', 'kerusakan'));
    }

    public function transactionHp(Request $request)
    {
        # code...
        /**
         * algorithm create no invoice
         */
        $length = 10;
        $random = '';
        for ($i = 0; $i < $length; $i++) {
            $random .= rand(0, 1) ? rand(0, 9) : chr(rand(ord('a'), ord('z')));
        }
        $no_invoice = 'YOVIS-' . Str::upper($random);

        $user_id = Auth::user()->id;

        $category_id = $request->category_id;

        //save to DB
        $transaction = Transaction::create([
            'invoice' => $no_invoice,
            'category_id'   => $category_id,
            'user_id'   => $user_id,
            'merk' => $request->merk,
            'type'         => $request->type,
            // 'kerusakan_id' => implode(",", $request['kerusakan']),
            'kerusakan_id'         => $request->kerusakan,
            'tanggal'         => $request->tanggal,
            'waktu'         => $request->waktu,
            'alamat'         => $request->alamat,
            'promo'         => null,
            'total'         => $request->total,

        ]);

        if ($transaction) {
            //redirect dengan pesan sukses

            $transaction_id = $transaction->id;

            $checkout_create = Checkout::create([
                'transaction_id' => $transaction_id,
                'status' => 'pending',
                'bukti_pembayaran' => 'default.png'
            ]);

            if ($checkout_create) {
                return redirect()->route('checkout.index', $checkout_create->id)->with(['success' => 'Data berhasil disimpan!']);
            } else {
                return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
            }
        } else {
            //redirect dengan pesan error
            return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function transactionLaptop(Request $request)
    {
        # code...
        /**
         * algorithm create no invoice
         */
        $length = 10;
        $random = '';
        for ($i = 0; $i < $length; $i++) {
            $random .= rand(0, 1) ? rand(0, 9) : chr(rand(ord('a'), ord('z')));
        }
        $no_invoice = 'YOVIS-' . Str::upper($random);

        $user_id = Auth::user()->id;

        $category_id = $request->category_id;

        //save to DB
        $transaction = Transaction::create([
            'invoice' => $no_invoice,
            'category_id'   => $category_id,
            'user_id'   => $user_id,
            'merk' => $request->merk,
            'type'         => $request->type,
            // 'kerusakan_id' => implode(",", $request['kerusakan']),
            'kerusakan_id'         => $request->kerusakan,
            'tanggal'         => $request->tanggal,
            'waktu'         => $request->waktu,
            'alamat'         => $request->alamat,
            'promo'         => null,
            'total'         => $request->total,

        ]);

        if ($transaction) {
            //redirect dengan pesan sukses

            $transaction_id = $transaction->id;

            $checkout_create = Checkout::create([
                'transaction_id' => $transaction_id,
                'status' => 'pending',
                'bukti_pembayaran' => 'default.png'
            ]);

            if ($checkout_create) {
                return redirect()->route('checkout.index', $checkout_create->id)->with(['success' => 'Data berhasil disimpan!']);
            } else {
                return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
            }
        } else {
            //redirect dengan pesan error
            return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function transactionPrinter(Request $request)
    {
        # code...
        /**
         * algorithm create no invoice
         */
        $length = 10;
        $random = '';
        for ($i = 0; $i < $length; $i++) {
            $random .= rand(0, 1) ? rand(0, 9) : chr(rand(ord('a'), ord('z')));
        }
        $no_invoice = 'YOVIS-' . Str::upper($random);

        $user_id = Auth::user()->id;

        $category_id = $request->category_id;

        //save to DB
        $transaction = Transaction::create([
            'invoice' => $no_invoice,
            'category_id'   => $category_id,
            'user_id'   => $user_id,
            'merk' => $request->merk,
            'type'         => $request->type,
            // 'kerusakan_id' => implode(",", $request['kerusakan']),
            'kerusakan_id'         => $request->kerusakan,
            'tanggal'         => $request->tanggal,
            'waktu'         => $request->waktu,
            'alamat'         => $request->alamat,
            'promo'         => null,
            'total'         => $request->total,

        ]);

        if ($transaction) {
            //redirect dengan pesan sukses

            $transaction_id = $transaction->id;

            $checkout_create = Checkout::create([
                'transaction_id' => $transaction_id,
                'status' => 'pending',
                'bukti_pembayaran' => 'default.png'
            ]);

            if ($checkout_create) {
                return redirect()->route('checkout.index', $checkout_create->id)->with(['success' => 'Data berhasil disimpan!']);
            } else {
                return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
            }
        } else {
            //redirect dengan pesan error
            return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function keranjang()
    {
        $user_id = Auth::user()->id;

        $transaction = Transaction::Join(
            'checkouts',
            'transactions.id',
            '=',
            'checkouts.transaction_id'
        )->where('user_id', $user_id)->get(['transactions.*', 'checkouts.status']);

        // dd($transaction);

        return view('frontend.keranjang', compact('transaction'));
    }
}
