<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index($id)
    {
        $user_id = Auth::user()->id;

        $checkout = Checkout::where('transaction_id', $id)->first();
        $transaction = Transaction::where('id', $id)->get();

        $transaction_total = Transaction::where('id', $id)->first();

        return view('frontend.checkout', compact('checkout', 'transaction', 'transaction_total'));
    }

    public function update(Request $request, $id)
    {
        $update = Checkout::where('id', $id)->first();
        //store foto
        if (!$request->hasFile('bukti_pembayaran')) {
            $update->bukti_pembayaran = $update->bukti_pembayaran;
        } else {
            if (file_exists($update->bukti_pembayaran)) {
                unlink($update->bukti_pembayaran);
            }
            $image = $request->bukti_pembayaran;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('bukti_pembayaran/', $imageName);
            $imagePath = 'bukti_pembayaran/' . $imageName;
            $update->update([
                'bukti_pembayaran' => $imageName,
                'status' => 'success'
            ]);
        }

        if ($update) {
            # code...
            return redirect()->route('user.home')->with('message', 'Pesanan anda berhasil dibayar mohon ditungu :)');
        }
    }
}
