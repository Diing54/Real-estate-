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
        //
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
    public function editPermission(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatePermission(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deletePermission(string $id)
    {
        //
    }
}
