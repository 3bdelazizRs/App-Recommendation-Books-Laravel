<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function signup(Request $request)
    {

        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|string|min:8'
        ],[
            'username.required' => 'The username is required',
            'email.required' => 'The email is required',
            'email.email' => 'You need to enter a valid email',
            'password.required' => 'The password is required',
            'confirm_password.required' => 'The confirm password is required'
        ]);

        if ($request->password != $request->confirm_password) {
            return redirect()->back()->with(['errorConfirmation' => 'Password and confirm password does not match']);

        }else{

            User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return view('auth.login')->with(['success' => 'Success']);
        }

    }

    public function signin(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'The email is required',
            'email.email' => 'You need to enter a valid email',
            'password.required' => 'The password is required'
        ]);


        $credentials = $request->only('email', 'password');
        $user = User::where('email', $request->email)->first();

        if($user and Hash::check($request->password, $user->password)){

            $request->session()->regenerate();
            auth()->login($user);
            return view('welcome')->with("success", "Logged in successfully🎉");

        }else{
            return back()->with(['email' => $request->email , 'errorConfirmation'=>'Failed, check your email.']);

        }


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
