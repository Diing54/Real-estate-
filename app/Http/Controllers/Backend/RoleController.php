<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function allPermission()
    {
        $permissions = Permission::all();
        return view('backend.pages.permission.all_permission',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addPermission()
    {
        return view('backend.pages.permission.add_permission');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePermission(Request $request)
    {
        $permission = Permission::create([
            'name' => $request->name,
            'group_name' => $request->group_name,

        ]); 

        $notification = array(
            'message' => 'Permission Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.permissions')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editPermission($id)
    {
        $permission = Permission::findOrFail($id);
        return view('backend.pages.permission.edit_permission',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatePermission(Request $request, string $id)
    {
        $pid = $request -> id;
        
        Permission::findOrFail($pid)->update([
            'name' => $request -> name,
            'group_name' => $request -> group_name
         ]);

       
            $notification = array(
                'message' => 'Permission Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.permissions')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deletePermission(string $id)
    {
        Permission::findOrFail($id) -> delete();

        $notification = array(
            'message' => 'Permission Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
