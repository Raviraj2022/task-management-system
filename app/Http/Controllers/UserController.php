<?php

namespace App\Http\Controllers;

use App\Models\TaskModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function show()
    {
        $task = new TaskModel();
        $data['tasks'] = $task->all();
        return view('welcome', $data);
    }
    public function register()
    {
        return view('Users.register');
    }
    public function save(Request $request)
    {
        $input = $request->all();
        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
        return view('Users.login');
        // print_r($request->input());
        // $formFields = $request->validate([
        //     'name' => ['required', 'min:3'],
        //     'email' => ['required', 'email', Rule::unique('users', 'email')],
        //     'password' => 'required|confirmed|min:6',
        // ]);
        // $formFields['password'] = bcrypt($formFields['password']);

        // User::create($formFields);
        // // auth()->login($user);
        // return redirect('/')->with('message', 'User created and logged in');
    }

    public function login()
    {
        return view('Users.login');
    }
    public function check(Request $request)
    {
        $cred = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($cred)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'you are now logged in');

        }
        return "<h2>Invalid Credentials</h2>";
    }
    public function destroy(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'you have been logged out');
    }
}
