<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.Login');
    }

    public function login(HttpRequest $request)
    {
        if (url()->previous() == route('admin.login')) {
            $rules = [
                'email' => ['required', 'string'],
                'password' => ['required', 'string', 'min:5'],
            ];
            $messages = [
                'passowrd.min' => ':attribute harus diisi minimal :min karakter.',
                'required' => ':attribute wajib diisi.',
            ];
            $cutomAttribute = [
                'email' => 'email',
                'password' => 'Kata sandi',
            ];
            $validator = Validator::make($request->all(), $rules, $messages, $cutomAttribute);
        }

        if (url()->previous() == route('user.login')) {
            $rules = [
                'nisn' => ['required', 'numeric'],
                'password' => ['required', 'string', 'min:5'],
            ];
            $messages = [
                'nisn.numeric' => 'NSIN harus angka ordinal.',
                'password.min' => ':attribute harus diisi minimal :min karakter.',
                'required' => ':attribute wajib diisi.',
            ];
            $cutomAttribute = [
                'nisn' => 'NSIN',
                'password' => 'Kata sandi',
            ];
            $validator = Validator::make($request->all(), $rules, $messages, $cutomAttribute);
        }

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $credentials = $validator->validated();
        $guards = ['admin', 'teacher', 'student', 'user'];

        foreach ($guards as $guard) {
            try
            {
                if (Auth::guard($guard)->attempt($credentials)) {
                    // Login berhasil untuk guard yang sesuai
                    if (Auth::guard($guard)->check()) {
                        $request->session()->regenerate();
                        return redirect()->intended('/admin');
                    }
                }
            } catch (\Exception $e) {
                // Tangkap dan tangani pengecualian
                continue; // Lanjut ke guard berikutnya
            }
        }
        return back()->with('failed', 'Gagal Masuk');
    }

    public function logout(HttpRequest $request)
    {
        $getCurrentGuard = Auth::getDefaultDriver();
        Auth::guard($getCurrentGuard)->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
