<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Driver;

class DriverController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $drivers = Driver::latest()->get();

        return view('admin.driver.index',compact('drivers'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request,[

            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'dob' => 'required',
            'license_number' => 'required',
            'license_type' => 'required',
            'image' => 'required',

        ]);

        if ($request->hasFile('image')) {

            $imageName = $request->image->getClientOriginalName();

            $request->image->storeAs('public',$imageName);

            $driver = new Driver;

            $driver->name = $request->name;
            $driver->phone = $request->phone;
            $driver->address = $request->address;
            $driver->dob = $request->dob;
            $driver->license_number = $request->license_number;
            $driver->license_type = $request->license_type;
            $driver->image = $imageName;

            $driver->save();
        }

        return redirect(route('driver.index'))->with('message','Driver added successfully');
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

            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'dob' => 'required',
            'license_number' => 'required',
            'license_type' => 'required',

        ]);

        $driver = Driver::find($id);

        $driver->name = $request->name;
        $driver->phone = $request->phone;
        $driver->address = $request->address;
        $driver->dob = $request->dob;
        $driver->license_number = $request->license_number;
        $driver->license_type = $request->license_type;

        $driver->save();

        return redirect(route('driver.index'))->with('message','Driver updated successfully');
    }

    public function destroy($id)
    {
        Driver::where('id',$id)->delete();

        return redirect()->back()->with('message','Driver deleted successfully');
    }
}
