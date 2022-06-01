<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Kerusakan;
use Illuminate\Http\Request;

class KerusakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kerusakan = Kerusakan::all();

        return view('backend.kerusakan.index', compact('kerusakan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.kerusakan.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id'       => 'required',
            'jenis_kerusakan'   => 'required',
            'harga'             => 'required',
        ]);

        //save to DB
        $kerusakan = Kerusakan::create([
            'category_id'   => $request->category_id,
            'jenis_kerusakan' => $request->jenis_kerusakan,
            'harga'         => $request->harga,
        ]);

        if ($kerusakan) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.kerusakan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.kerusakan.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
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
        $kerusakan = Kerusakan::where('id', $id)->first();
        $categories = Category::all();
        return view('backend.kerusakan.create', compact('kerusakan', 'categories'));
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
        $kerusakan = Kerusakan::find($request->id);
        //update data
        $kerusakan->update([
            'category_id'   => $request->category_id,
            'jenis_kerusakan' => $request->jenis_kerusakan,
            'harga'         => $request->harga,
        ]);

        if ($kerusakan) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.kerusakan.index')->with(['success' => 'Data Berhasil Diperbarui!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.kerusakan.index')->with(['error' => 'Data Gagal Diperbarui!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kerusakan $kerusakan)
    {
        $kerusakan->delete();
        return redirect()->route('admin.kerusakan.index')
            ->with('success', 'Data Barang berhasil dihapus.');
    }
}
