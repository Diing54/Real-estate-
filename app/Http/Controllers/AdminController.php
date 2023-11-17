<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function profile(){

        $id = Auth::user()->id;

        $profileData = User::find($id);

        return view('admin.admin_view_profile',compact('profileData'));

    }

    public function updateProfile(Request $request){

        $id = Auth::user()->id;

        $data = User::find($id);

        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->phone = $request->phone;

        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/'.$data->photo));
            $filename = date('YmdHi').$file -> getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();
        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }


    /**
     * Destroy an authenticated session.
     */
    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
