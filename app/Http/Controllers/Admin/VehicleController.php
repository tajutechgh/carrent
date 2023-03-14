<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Vehicle;

class VehicleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $vehicles = Vehicle::latest()->get();

        return view('admin.vehicle.index',compact('vehicles'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request,[

            'car_vendor' => 'required',
            'car_model' => 'required',
            'car_number' => 'required',
            'fuel_type' => 'required',
            'doors_number' => 'required',
            'seats_number' => 'required',
            'quantity' => 'required',
            'image' => 'required',

        ]);

        if ($request->hasFile('image')) {

            $imageName = $request->image->getClientOriginalName();

            $request->image->storeAs('public',$imageName);

            $vehicle = new Vehicle;

            $vehicle->car_model = $request->car_model;
            $vehicle->car_number = $request->car_number;
            $vehicle->car_vendor = $request->car_vendor;
            $vehicle->fuel_type = $request->fuel_type;
            $vehicle->doors_number = $request->doors_number;
            $vehicle->seats_number = $request->seats_number;
            $vehicle->quantity = $request->quantity;
            $vehicle->image = $imageName;

            $vehicle->save();
        }

        return redirect(route('vehicle.index'))->with('message','Vehicle added successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[

            'car_vendor' => 'required',
            'car_model' => 'required',
            'car_number' => 'required',
            'fuel_type' => 'required',
            'doors_number' => 'required',
            'seats_number' => 'required',
            'quantity' => 'required',

        ]);

        $vehicle = Vehicle::find($id);

        $vehicle->car_model = $request->car_model;
        $vehicle->car_number = $request->car_number;
        $vehicle->car_vendor = $request->car_vendor;
        $vehicle->fuel_type = $request->fuel_type;
        $vehicle->doors_number = $request->doors_number;
        $vehicle->seats_number = $request->seats_number;
        $vehicle->quantity = $request->quantity;

        $vehicle->save();

        return redirect(route('vehicle.index'))->with('message','Vehicle updated successfully');
    }

    public function destroy($id)
    {
        Vehicle::where('id',$id)->delete();

        return redirect()->back()->with('message','Vehicle deleted successfully');
    }
}
