<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class AdminController extends Controller
{
    public function admin(){
    return view('admin.index');
    }

    public function login(){
        return view('admin.admin_login');
        }

    /**
     * Destroy an authenticated session.
     */
    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
