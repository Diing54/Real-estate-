<?php

namespace App\Http\Controllers;

 
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


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

    public function changePassword(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
         return view('admin.admin_change_password',compact('profileData'));
    }

    public function updatePassword(Request $request){
        //Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        ///Check if the old password match
        if(!Hash::check($request -> old_password,auth()->user()->password) ){
 
            $notification = array(
                'message' => 'Old Password Does not Match',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }

    ///Update the password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

    $notification = array(
        'message' => 'Admin Password Updated Successfully',
        'alert-type' => 'success'
    );
    return back()->with($notification);

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


    public function allAdmin()
    {
        $all_admin = User::where('role','admin')->get();
        return view('backend.pages.admin.all_admin',compact('all_admin'));
    }

    public function addAdmin()
    {
        $roles = Role::all();
        return view('backend.pages.admin.add_admin',compact('roles'));
    }

    public function storeAdmin(Request $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = Hash::make($request->username);
        $user->role = 'admin';
        $user->status = 'active';
        $user->save();

        if($request->roles){
            $role = Role::findById($request->roles);
            $user->assignRole($role->name);
            }
        $notification = array(
            'message' => 'New Admin Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.admin')->with($notification);
    }

    public function editAdmin($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('backend.pages.admin.edit_admin',compact('user','roles'));
    }

    public function updateAdmin(Request $request,$id)
    {
        $user = User::findOrFail($id);
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->role = 'admin';
        $user->status = 'active';
        $user->save();

        $user->roles()->detach();
        if($request->roles){
            $role = Role::findById($request->roles);
            $user->assignRole($role->name);
            }
        $notification = array(
            'message' => 'New Admin Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.admin')->with($notification);
    }

    public function deleteAdmin($id)
    {
        $user = User::findOrFail($id);

        if(!is_null($user))
        {
            $user->delete();
        }
        $notification = array(
            'message' => 'New Admin Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
