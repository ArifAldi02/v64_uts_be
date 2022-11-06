<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Detail_data;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class User64Controller extends Controller
{
    public function users64()
    {
        if (Auth::check()) {
            $role = Auth::user()->role;
            $foto = Auth::user()->foto;
        } else {
            $role = null;
            $foto = null;
        }
        $users = collect(User::where('role', 'User')->get());
        return view('user.users', [
            'no'=>1,
            'users'=>$users->sortBy('is_aktif', false),
            'role'=>$role,
            'foto'=>$foto
        ]);
    }

    public function profile64()
    {
        if (Auth::check()) {
            $role = Auth::user()->role;
            $foto = Auth::user()->foto;
        } else {
            $role = null;
            $foto = null;
        }
        return view('user.profile', [
            'role'=>$role,
            'foto'=>$foto,
        ]);
    }

    public function detailUser64($id)
    {
        $detail_data=Detail_data::all();
        $detailUser = false;
        foreach ($detail_data as $detail) {
            if ($detail->id_user == $id) {
                $detailUser = true;
            }
        }
        if (Auth::check()) {
            $role = Auth::user()->role;
            $foto = Auth::user()->foto;
        } else {
            $role = null;
            $foto = null;
        }

        $user = User::find($id);

        return view('user.detailUser', [
            'user'=>$user,
            'role'=>$role,
            'foto'=>$foto,
            'detail'=>$detailUser
        ]);
    }

    // ===aprove user===
    public function approveUser64($id)
    {
        $user=User::find($id);
        $user->is_aktif=true;
        $user->save();

        return redirect('/users64')->with('success','Approve berhasil');
    }

    public function deleteUser64($id)
    {
        User::find($id)->delete();
        return redirect('/users64')->with('success', 'Delete user berhasil');
    }

    public function login64()
    {
        return view('user.login');
    }

    public function loginProses64(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect('/');
        }
        return redirect('/login64')->with('error','Email atau password salah');
    }

    public function logout64(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function register64()
    {
        return view('user.register');
    }

    public function registerProses64(Request $request)
    {
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'remember_token'=>Str::random(60),
            'foto'=>$request->foto
        ]);

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('img/', $request->file('foto')->getClientOriginalName());
            $user->foto=$request->file('foto')->getClientOriginalName();
            $user->save();
        }


        return redirect('/login64')->with('success','Register berhasil');
    }

    public function updatePassword64()
    {
        return view('user.updatePassword');
    }

    public function updatePasswordProses64(Request $request, $id)
    {
        $user = User::find($id);
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/profile64')->with('success','Update password berhasil');
    }

}
