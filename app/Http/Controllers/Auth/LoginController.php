<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Contracts\Role;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $formFields = $request->validate([
        "email" => ['required', 'email'],
        "password" => 'required'
    ]);

    $remember = $request->filled('remember');

    $user = User::where('email', $formFields['email'])->first();

    if ($user && !$user->banned) {
        return back()->withErrors(['email' => 'Your account has been banned.'])->onlyInput();
    }

    if (auth()->attempt($formFields, $remember)) {
        $request->session()->regenerate();
        if (auth()->user()->hasRole('admin')) {
            return redirect('/dashboard')->with('login', true);
        } else {
            return redirect('/')->with('login', true);
        }
    }

    return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput();
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
        //
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
