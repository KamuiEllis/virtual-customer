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
}
