<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Detail_data;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Detail_data64Controller extends Controller
{
    // view
    public function detailData64()
    {
        if (Auth::check()) {
            $role = Auth::user()->role;
            $foto = Auth::user()->foto;
        } else {
            $role = null;
            $foto = null;
        }

        return view('user.detailData', [
            'role'=>$role,
            'foto'=>$foto,
        ]);
    }

    public function detailDataUser64($id)
    {
        if (Auth::check()) {
            $role = Auth::user()->role;
            $foto = Auth::user()->foto;
        } else {
            $role = null;
            $foto = null;
        }

        $user = User::find($id);

        return view('user.detailDataUser', [
            'role'=>$role,
            'foto'=>$foto,
            'user'=>$user
        ]);
    }

    // createData
    public function createData64()
    {
        if(!Auth::user()->is_aktif){
            return redirect('/profile64');
        }
        return view('user.createData', [
            'agamas'=>Agama::all()
        ]);
    }

    public function createDataProses64(Request $request)
    {
        $detail_data=Detail_data::create([
            'id_user'=>Auth::user()->id,
            'alamat'=>$request->alamat,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'id_agama'=>$request->id_agama,
            'foto_ktp'=>$request->foto_ktp,
            'umur'=>$request->umur,
        ]);

        if ($request->hasFile('foto_ktp')) {
            $request->file('foto_ktp')->move('img/', $request->file('foto_ktp')->getClientOriginalName());
            $detail_data->foto_ktp=$request->file('foto_ktp')->getClientOriginalName();
            $detail_data->save();
        }

        return redirect('/detailData64')->with('success', 'Berhasil melengkapi data');
    }

    // update data
    public function updateData64()
    {
        return view('user.updateData', [
            'agamas'=>Agama::all()
        ]);
    }

    public function updateDataProses64(Request $request)
    {
        $detail_data = Detail_data::find(Auth::user()->detail_data->id);

        $detail_data->alamat=$request->alamat;
        $detail_data->tempat_lahir=$request->tempat_lahir;
        $detail_data->tanggal_lahir=$request->tanggal_lahir;
        $detail_data->id_agama=$request->id_agama;
        $detail_data->umur=$request->umur;

        $detail_data->save();

        return redirect('/detailData64')->with('success','Update data success');
    }
}
