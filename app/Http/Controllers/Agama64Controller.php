<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class Agama64Controller extends Controller
{
    public function agama64()
    {
        if (Auth::check()) {
            $role = Auth::user()->role;
            $foto = Auth::user()->foto;
        } else {
            $role = null;
            $foto = null;
        }

        return view('agama.agama', [
            'agamas'=>Agama::all(),
            'no'=>1,
            'role'=>$role,
            'foto'=>$foto,
        ]);
    }

    public function createAgama64()
    {
        if (Auth::check()) {
            $role = Auth::user()->role;
            $foto = Auth::user()->foto;
        } else {
            $role = null;
            $foto = null;
        }

        return view('agama.tambahAgama', [
            'role'=>$role,
            'foto'=>$foto,
        ]);
    }

    public function createAgama64Proses(Request $request)
    {
        Agama::create([
            'nama_agama' => $request->nama_agama,
        ]);

        return redirect('/agama64')->with('success', 'Agama berhasil ditambahkan');
    }

    public function deleteAgama64Proses($id)
    {
        Agama::find($id)->delete();

        return redirect('/agama64')->with('success','Agama berhasil dihapus');
    }

    public function updateAgama64($id)
    {
        if (Auth::check()) {
            $role = Auth::user()->role;
            $foto = Auth::user()->foto;
        } else {
            $role = null;
            $foto = null;
        }

        return view('agama.updateAgama', [
            'agama'=>Agama::find($id),
            'role'=>$role,
            'foto'=>$foto,
        ]);
    }

    public function updateAgama64Proses(Request $request, $id)
    {
        $agama = Agama::find($id);
        $agama->nama_agama = $request->nama_agama;
        $agama->save();
        return redirect('/agama64')->with('success', 'Agama berhasil diupdate');
    }
}
