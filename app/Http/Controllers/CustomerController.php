<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    //
    public function register(Request $request) {
        $inputs = $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'name' => [],
            'type' => [],
            'email' => ['required', 'email', Rule::unique('users', 'email' )],
            'password' => ['required', 'min:6', 'confirmed'],
        ]);

        $inputs['password'] = bcrypt($inputs['password']);

        $customer = Customer::create($inputs);

        auth()->login($customer);

        return redirect('/');
    }

    public function login(Request $request) {
        $inputs = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if(auth()->attempt(['email' => $inputs['email'], 'password' => $inputs['password']])) {
            return redirect('/');
        } else {
            return redirect('/login')->with('error', 'Incorrect Credentials!');
        }
    }

    public function logout(Request $request) {
        auth()->logout();
        return redirect('/login');
    }

    public function dashboard(Request $request) {
        return view('dashboard');
    }

    public function editProfile(Customer $customer,  Request $request) {
        $inputs = $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'name' => [],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6', 'confirmed'],
        ]);

        $inputs['password'] = bcrypt($inputs['password']);

        $customer->update($inputs);

        auth()->login($customer);

        return redirect('/profile')->with('success', 'Profile saved');
    }   
}
