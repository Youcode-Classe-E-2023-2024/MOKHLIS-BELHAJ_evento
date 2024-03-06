<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
// *****************
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordControlle extends Controller
{
   
    /**
     * Display a listing of the resource.
     */
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function sendResetLinkEmail(Request $request)    
    {
        $email=$request->email;
        request()->validate([
            'email' => 'required|email|exists:users'
        ]);
        

        $token = Str::random(64);
        $test = DB::table('password_reset_tokens')
        ->where('email', $email)
        ->count();
                if(!$test){
                    DB::table('password_reset_tokens')->insert([
                        'email' => request()->email,
                        'token' => $token,
                        'created_at' => Carbon::now()
                    ]);
                }

        Mail::send('auth.passwords.forget-password', compact('token'), function($message) {
            $message->to(request()->email);
            $message->subject('Reset Password');
        });
        return redirect()->route('password.request')->with('success', 'we send an email');

    }
    public function showResetForm($token) {
        return view('auth.passwords.new-password', compact('token'));
    }
    public function reset(request $request){
        request()->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|confirmed'
        ]);

        $updatePassword = DB::table('password_reset_tokens')->where([
            'email' => request()->email,
            'token' => request()->token
        ])->first();

        if(!$updatePassword) {
            return redirect()->route('password.reset',request()->token)->with('error', 'invalid');
        }

        User::where('email', request()->email)->update([
            'password' => Hash::make(request()->password)
        ]);

        DB::table('password_reset_tokens')->where(['email' => request()->email])->delete();

        return redirect()->route('login');
    }
}
