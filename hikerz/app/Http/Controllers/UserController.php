<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class UserController extends Controller
{
    public function showUsers()
    {
        try {
            $users = DB::table('users') ->get();
            return view('users', ['users' => $users]);
        } catch (QueryException $e) {
            return view('error', ['error' => $e->getMessage()]);
        }
    }

    public function showSubscriptionForm()
    {
        return view('subscribe');
    }

    public function subscribe()
{
    try {
        $validatedData = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'nickname' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        $user = new User();
        $user->firstname = $validatedData['firstname'];
        $user->lastname = $validatedData['lastname'];
        $user->nickname = $validatedData['nickname'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);


        $user->save();

        return redirect('/')->with('success', 'Subscription successful');
    } catch (\Exception $e) {
        \Log::error('Failed to subscribe user: ' . $e->getMessage());
        return back()->withInput()->withErrors(['error' => 'Failed to subscribe. Please try again.']);
    }
}

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication passed...
        return redirect()->intended('dashboard');
    }

    // Authentication failed...
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}



}



