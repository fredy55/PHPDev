<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginForm()
    {
        
        return view('customers.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginValidate(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email'=>'required|email',
            'password'=>'required|string',
        ]);

        if($validate->fails()){
            return redirect()->route('customer.login')->with('warning', 'Validation error: '.$validate->errors()->first());
        }
        
        $input = $validate->validated();
        
        //Get customer data
        // $loginArr = [
        //     'email' => $input['email'],
        //     'password' => $input['password']
        // ];

        //Authenticate customer
        if (Auth::guard('customer')->attempt($input)) {

            //Create login session
            $request->session()->regenerate();

            return redirect()->intended('/customers/dashboard');
        }

        return redirect()->route('customer.login')->with('warning', 'Wrong email or password!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'fname'=>'required|string',
            'email'=>'required|email|unique:customers',
            'password'=>'required|string',
        ]);

        if($validate->fails()){
            return redirect()->route('customer.add')->with('warning', 'Validation error: '.$validate->errors()->first());
        }

        $input = $validate->validated();
        
        $customer = new Customer;
        $customer->full_name = $input['fname'];
        $customer->email = $input['email'];
        $customer->password = Hash::make($input['password']);

        if($customer->save()){
            return redirect()->route('customer.login')->with('success', 'customer saved successfully!');
        }else{
            return back()->with('warning', 'customer NOT saved!');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('customers.dashboard');
    }

    /**
     * 
     */
    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();

        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }


}
