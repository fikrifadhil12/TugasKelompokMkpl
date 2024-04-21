<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class loginController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }

    public function login()
    {
        return view("login");
    }

    public function regist()
    {
        return view("register");
    }
    public function RegisterUser(Request $request)
{
    $request->validate([
        'Username' => 'required',
        'Email' => 'required|email|unique:users',
        'Password' => 'required|min:5|max:15'
    ]);

    try {
        $user = new User();
        $user->Username = $request->Username;
        $user->Email = $request->Email;
        $user->Password = Hash::make($request->Password);
        $res = $user->save();

        if ($res) {
            return back()->with('success', 'Registrasi Berhasil');
        } else {
            return back()->with('fail', 'Gagal menyimpan data');
        }
    } catch (\Exception $e) {
        // Tangani kesalahan khusus jika diperlukan
        return back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
    }
}
// public function LoginUser(Request $request)
// {
//     $request->validate([
//         'Email' => 'required|email',
//         'Password' => 'required|min:5|max:15'
//     ]);

//     $user = User::where('Email', '=', $request->Email)->first();

//     if ($user) {
//         if (Hash::check($request->Password, $user->Password)) {
//             session()->put('loginId', $user->id);
//             // Mengarahkan pengguna ke halaman dashboard setelah login berhasil
//             return redirect()->route('dashboard');
//         } else {
//             return back()->with('fail', 'Password salah');
//         }
//     } else {
//         return back()->with('fail', 'Akun tidak ditemukan');
//     }
// }
    // public function dashboard()
    // {
    //     return "welcome";
    // }

    public function LoginUser(Request $request)
{
    $request->validate([
        'Email' => 'required|email',
        'Password' => 'required|min:5|max:15'
    ]);

    $user = User::where('Email', '=', $request->Email)->first();

    if ($user) {
        if (Hash::check($request->Password, $user->Password)) {
            // Menyimpan informasi pengguna dalam sesi
            session()->put('loginId', $user->id);
            session()->put('user_name', $user->Username);
            session()->put('user_email', $user->Email);

            // Mengarahkan pengguna ke halaman dashboard setelah login berhasil
            return redirect()->route('dashboard');
        } else {
            return back()->with('fail', 'Password salah');
        }
    } else {
        return back()->with('fail', 'Akun tidak ditemukan');
    }
}
}
