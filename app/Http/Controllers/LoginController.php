<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\Hcis\Employee;
use LdapRecord\Container;

class LoginController extends Controller
{
    protected $redirectTo = 'dashboard.index';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginForm()
    {
        return view('authentication.sign-in');
    }


    public function login(Request $request)
    { // Validate the request input
        $request->validate([
            'identity' => 'required|max:50'

        ]);

        try {
            $identity = strtolower(trim($request->input('identity')));
            $password = trim($request->input('password'));
            $messageSuccess = 'Login successful';

            //  pengecekan identity if @an.tv / @vivat.id
            if (preg_match('/@an\.tv/', $identity) || preg_match('/@vivat\.id/', $identity)) {

                $connection = Container::getDefaultConnection();
                $response = $connection->auth()->attempt($identity, $password);
                

                if ($response) {
                    $user = User::where('email', $identity)->first();

                    if ($user) {
                        Auth::login($user);
                        return redirect()->route('dashboard.index');
                    } else {
                        $employee = Employee::where('email', $identity)->first();
                        if ($employee) {
                            User::create([
                                'username' => $employee->name,
                                'nickname' => $employee->name,
                                'company_id' => $employee->company,
                                'email' => $employee->email,
                                'department' => $employee->department_name,
                                'birthday' => $employee->birth_day,
                            ]);

                            return redirect()
                                ->route('dashboard.index')
                                ->with('success', $messageSuccess);
                        }

                        return redirect()
                            ->back()
                            ->with('error', 'user not access!');
                    }
                } else {
                    return redirect()
                        ->back()
                        ->with('error', 'invalid login ldap');
                }
            } else {
                if ($this->attemptWebLogin($identity, $password)) {

                    $id = auth()->user()->id;
                    $user =  User::find($id);

                    $user->update([
                        'last_ip' => $request->getClientIp(),
                        'last_login' => Carbon::now()->format('d-m-Y'),
                        'last_access' => Carbon::now()->format('d-m-Y'),
                        'user_agent' => $request->server('HTTP_USER_AGENT'),
                        'session_id' => $request->session()->getId(),

                    ]);


                    return redirect()
                        ->route('dashboard')
                        ->with('success', $messageSuccess);
                } else {
                    return redirect()
                        ->back()
                        ->with('error', 'Invalid email/username and password');
                }
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
}
