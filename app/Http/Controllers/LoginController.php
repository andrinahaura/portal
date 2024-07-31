<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    protected $redirectTo = 'dashboard.index';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginForm(){
        return view ('authentication.sign-in');
    }

    public function login(Request $request)
    { // Validate the request input
        $request->validate([
            'identity' => 'required|max:50',
            'password' => 'required',
        ]);

        try {
            $identity = strtolower(trim($request->input('identity')));
            $password = trim($request->input('password'));
            $messageSuccess = 'Login successful';

            // Attempt web login if not using LDAP
            if ($this->attemptWebLogin($identity, $password)) {
                $request->session()->put('user', $identity);
                return redirect()
                    ->route('dashboard.index')
                    ->with('success', $messageSuccess);

            } else {
                return redirect()
                    ->back()
                    ->with('error', 'Invalid email/username and password');
            }
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', $e->getMessage());
        }
    }

    private function attemptWebLogin($identity, $password)
    {
        // Check if the identity is an email or username
        $user = User::where('email', $identity)
            ->orWhere('username', $identity)
            ->first();

        // Verify the password and log in the user if the credentials are correct
        if ($user && Hash::check($password, $user->password)) {
            Auth::login($user);
            return true;
        }

        return false;
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
