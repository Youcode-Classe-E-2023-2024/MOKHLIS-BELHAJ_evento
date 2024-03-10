<?php

namespace App\Http\Controllers\Admin;

use App\Models\event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class DashboardController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 

        $events = event::orderBy('id', 'asc')->paginate(8);
        return view('admin.Dashboard',compact('events'));
  
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
    public function edit(string $id)
    {
        $event = event::findOrFail($id);
        $event->validation = !$event->validation;
        $event->save();
        return redirect()->back();
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
