<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Amenities;
use App\Models\PropertyState;
use App\Models\PropertyStore;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    
///////////////////////////// Property type ///////////////////////////////////

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
    public function updateType(Request $request)
    {

        $pid = $request -> id;
        
        PropertyType::findOrFail($pid)->update([
            'type_name' => $request -> type_name,
            'type_icon' => $request -> type_icon
        ]);

       
            $notification = array(
                'message' => 'Property Type Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.type')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteType($id)
    {
        PropertyType::findOrFail($id) -> delete();

        $notification = array(
            'message' => 'Property Type Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    ////////////////////////////////// Property State/////////////////////////////////////////////

    public function allState()
    {
        $states = PropertyState::latest()->get();
        return view('backend.state.all_state',compact('states'));
    }

    public function addState()
    {
        return view('backend.state.add_state');
    }

    public function storeState(Request $request)
    {
        $request->validate([
        'state_name' => 'required|unique:property_states|max:200',
        'state_description' => 'required'
        ]);

        PropertyState::insert([
        'state_name' => $request -> state_name,
        'state_description' => $request -> state_description
        ]);

        $notification = array(
            'message' => 'Property State Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.state')->with($notification);
    }

    public function editState($id)
    {
        $states = PropertyState::findOrFail($id);
        
        return view('backend.state.edit_state', compact('states'));
    }

    public function updateState(Request $request)
    {

        $sid = $request -> id;
        
        PropertyState::findOrFail($sid)->update([
            'state_name' => $request -> state_name,
            'state_description' => $request -> state_description
        ]);

       
            $notification = array(
                'message' => 'Property State Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.state')->with($notification);
    }

    public function deleteState($id)
    {
        PropertyState::findOrFail($id) -> delete();

        $notification = array(
            'message' => 'Property State Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    //////////////////////////////////Amenities//////////////////////////////////////////////////

    public function allAmenity()
    {
        $amenity = Amenities::latest()->get();
        return view('backend.amenity.all_amenity',compact('amenity'));
    }

    public function addAmenity()
    {
        return view('backend.amenity.add_amenity');
    }

        /**
     * Store a newly created property type in storage.
     */
    public function storeAmenity(Request $request)
    {
          $request->validate([
            'amenity_name' => 'required|unique:amenities|max:200',
         ]);

        Amenities::insert([
            'amenity_name' => $request -> amenity_name,
         ]);

       
            $notification = array(
                'message' => 'Amenity Added Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.amenities')->with($notification);
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function editAmenity($id)
    {
        $amenities = Amenities::findOrFail($id);

        return view('backend.amenity.edit_amenity', compact('amenities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateAmenity(Request $request)
    {

        $aid = $request -> id;
        
        Amenities::findOrFail($aid)->update([
            'amenity_name' => $request -> amenity_name,
         ]);

       
            $notification = array(
                'message' => 'Amenity Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.amenities')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteAmenity($id)
    {
        Amenities::findOrFail($id) -> delete();

        $notification = array(
            'message' => 'Amenity Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

}
