<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function tambahUser()
    {
        $data = [
            'tbl_user'          => DB::table('tbl_user')->get()
        ];
        return view('admin.tambah_user', $data);
    }
    public function tambahUserProses(Request $request)
    {
        $request->validate([
            'nama'          => 'required|min:3',
        ]);
        DB::table('tbl_user')->insert([
            'foto'          => 'default.jpg',
            'nama'          => $request->input('nama'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tempat_lahir'  => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'alamat'        => $request->input('alamat'),
            'no_telp'       => $request->input('no_telp')
        ]);
        return redirect()->route('tambah.user')->with('success', 'Data user berhasil ditambahkan');
    }
    public function hapusUser($id_user)
    {
        DB::table('tbl_user')->where('id_user', $id_user)->delete();
        return redirect()->route('tambah.user')->with('success', 'Data terhapus');
    }
}
