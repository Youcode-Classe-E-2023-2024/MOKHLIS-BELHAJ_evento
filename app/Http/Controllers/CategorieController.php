<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = categorie::all();
        return view('admin.Categories',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'categorie' => 'required|string|max:255', // Example validation rules
        ]);
    
        // Create a new instance of your model and set the categorie attribute
        $categorie = new Categorie();
        $categorie->name = $validatedData['categorie'];
        
        // Save the model
        $categorie->save();
    
        // Optionally, you can redirect the user back or to another page
        return redirect()->back()->with('success', 'Categorie created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categorie= Categorie::find($id);
        return view('admin.categoriesEdit', compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'categorie' => 'required|string|max:255', // Assuming 'categorie' is the name field
        ]);
    
        // Find the category by ID
        $categorie = Categorie::findOrFail($id);
    
        // Update the name of the category
        $categorie->name = $validatedData['categorie'];
        $categorie->save();
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Categorie updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $categorie = Categorie::find($id);
        $categorie->delete();
        return redirect()->back()->with('success', 'Categorie deleted successfully.');;
    }
}
