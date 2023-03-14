<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\User;
use App\Model\admin\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::latest()->get();

        $roles = Role::all();
        
        return view('admin.user.index',compact('roles','users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request,[

            'name' => 'required',

            'username' => 'required|unique:users',

            'password' => 'required|string|min:6|confirmed',
        ]);

        $request['password'] = bcrypt($request->password);

        $user = User::create($request->all());

        $user->roles()->sync($request->role);

        return redirect(route('user.index'))->with('message','User added successfully');
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

            'username' => 'required',
        ]);

        $user = User::where('id',$id)->update($request->except('_token','_method','role'));

        User::find($id)->roles()->sync($request->role);

        return redirect(route('user.index'))->with('message','User updated successfully');
    }

    public function destroy($id)
    {
        User::where('id',$id)->delete();

        return redirect()->back()->with('message','User deleted successfully');
    }
}
