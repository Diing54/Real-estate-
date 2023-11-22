<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Exports\PermissionExport;
use Spatie\Permission\Models\Role;
 use App\Imports\PermissionImport;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{

        ////////////////////////////Permission All Method///////////////////////////////////////

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
     * import specified resource.
     */
    public function importPermission()
    {
        return view('backend.pages.permission.import_permission');
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
    public function updatePermission(Request $request)
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

////////////////////////////Export & Import Permissions/////////////////////////////////
//Export
    public function export()
    {
        return Excel::download(new PermissionExport, 'permission.xlsx');
    }
//End Export

//Import
    public function import(Request $request)
    {
        Excel::import(new PermissionImport, $request->file('import_file'));

        $notification = array(
            'message' => 'Permission Imported Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.permissions')->with($notification);
    }
//End Import



    ////////////////////////////Role All Method///////////////////////////////////////

    public function allrole()
    {
        $roles = Role::all();
        return view('backend.pages.role.all_role',compact('roles'));
    }

    public function addRole()
    {
        return view('backend.pages.role.add_role');
    }

    public function storeRole(Request $request)
    {
        $role = Role::create([
            'name' => $request->name,
        ]); 

        $notification = array(
            'message' => 'Role Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.roles')->with($notification);
    }

    public function editRole($id)
    {
        $role = Role::findOrFail($id);
        return view('backend.pages.role.edit_role',compact('role'));
    }

    public function updateRole(Request $request)
    {
        $rid = $request -> id;
        
        Role::findOrFail($rid)->update([
            'name' => $request -> name,
          ]);

       
            $notification = array(
                'message' => 'Role Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.roles')->with($notification);
    }


    public function deleteRole($id)
    {
        Role::findOrFail($id) -> delete();

        $notification = array(
            'message' => 'Role Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    /////////////////////////////////// Add Roles Permissions///////////////////////////////////
    public function addRolesPermission()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        $permission_groups = User::addRolesPermission();
        return view('backend.pages.rolesetup.add_roles_permission',compact('roles','permissions','permission_groups'));
    } 

    public function storeRolePermission(Request $request)
    {
        $data = array();
        $permissions = $request -> permission;

        foreach($permissions as $key => $item){
            $data['role_id'] = $request->role_id;
            $data['permission_id'] = $item;

            DB::table('role_has_permissions')->insert($data);
        }

        $notification = array(
            'message' => 'Role Permission Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.roles.permission')->with($notification);
    }

    public function allRolesPermission()
    {
        $roles = Role::all();
        return view('backend.pages.rolesetup.all_roles_permission',compact('roles'));
    }

    public function editRolePermission($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        $permission_groups = User::addRolesPermission();
        return view('backend.pages.rolesetup.edit_roles_permission',compact('role','permissions','permission_groups'));

    }

    public function updateRolePermission(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $permissions = $request->permission;

        // dd(request()->input('permission'));

          
        if(!empty($permissions))
        {
             $role->syncPermissions($permissions);
        }

        $notification = array(
            'message' => 'Role Permission Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.roles.permission')->with($notification);
    }

    public function deleteRolePermission($id)
    {
        $role = Role::findOrFail($id);

        if(!is_null($role))
        {
            $role->delete();
        }
        $notification = array(
            'message' => 'Role Permission Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


}
