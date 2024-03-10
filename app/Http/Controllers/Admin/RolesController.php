<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.Roles');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::where('id', $id)->with('roles:name')->first();
        $roles = Role::all();

        return view('admin.updateRole',compact('user','roles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request , string $id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        
        
        
        // Validate the incoming request
       
        // Fetch the user
        $user = User::findOrFail($request->input('user_id'));
        
        // Assign new role
        $user->syncRoles([$request->input('role')]);
       

        // Redirect back or wherever appropriate
        return redirect()->back()->with('success', 'User role updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
