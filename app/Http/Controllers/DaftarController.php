<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function daftar(Request $request)
    {
        $validasi = $request->validate([
            'nama_lengkap' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $validasi['password'] = Hash::make($request->password);
        User::create($validasi);
        return redirect()->route('login')->with('berhasil','Pendaftaran kamu berhasil, Silahkan masuk.');
    }
}
