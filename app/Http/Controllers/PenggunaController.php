<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = DB::table('users')->get();
        return view('backend/pengguna.index', compact('users'));
    }

    public function create()
    {
        $users = null;
        $admin_lecturer = "Menambahkan";
        return view('backend/pengguna.create', compact('users', 'admin_lecturer'));
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route('admin.pengguna.index')
            ->with('success', 'Data Pendidikan berhasil ditambahkan.');
    }

    public function edit(User $users, $id)
    {
        $user = User::where('id', $id)->first();
        $admin_lecturer = "Mengubah";
        // dd($users);
        return view('backend/pengguna.create', compact('user', 'admin_lecturer'));
    }

    public function update(Request $request, $id)
    {
        $user_update = User::where('id', $request->id)->first();

        $user_update->update([
            'role' => $request->role
        ]);
        return redirect()->route('admin.pengguna.index')
            ->with('success', 'Data Pendidikan berhasil diperbaharui.');
    }

    public function destroy(User $pengguna)
    {
        $pengguna->delete();
        return redirect()->route('admin.pengguna.index')
            ->with('success', 'Data Pendidikan berhasil dihapus.');
    }
}
