<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    /**
     * All property type
     */
    public function allType()
    {
        $types = PropertyType::latest()->get();
        return view('backend.type.all_type',compact('types'));
    }

    /**
     * Show the form for creating a new property type.
     */
    public function addType()
    {
        return view('backend.type.add_type');
    }

    /**
     * Store a newly created property type in storage.
     */
    public function storeType(Request $request)
    {
          $request->validate([
            'type_name' => 'required|unique:property_types|max:200',
            'type_icon' => 'required'
        ]);

        PropertyType::insert([
            'type_name' => $request -> type_name,
            'type_icon' => $request -> type_icon
        ]);

       
            $notification = array(
                'message' => 'Property Type Added Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.type')->with($notification);
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function editType($id)
    {
        $types = PropertyType::findOrFail($id);

        return view('backend.type.edit_type', compact('types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
