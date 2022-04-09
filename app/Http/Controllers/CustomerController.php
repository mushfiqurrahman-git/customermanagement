<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    public function index()
    {
        return view('customer');
    }

    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email =$request['email'];
        $customer->gender =$request['gender'];
        $customer->address =$request['address'];
        $customer->state =$request['state'];
        $customer->country =$request['country'];
        $customer->dob =$request['dob'];
        $customer->password =md5($request['email']);
        $customer->save();

        return redirect('/customer/view');
    }

    public function view()
    {
        
    }
}
