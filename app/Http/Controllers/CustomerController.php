<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    public function create()
    {
        $url = url('/customer');
        $title = "Customer Registration";
        $data = compact('url','title');
        return view('customer')->with($data);
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

        return redirect('/customer');
    }

    public function view()
    {
        $customers = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }
    public function delete($id)
    {
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        
        return redirect('customer');

    }
    public function edit($id)
    {
        $customer = Customer::find($id);
        if(is_null($customer)){
            return redirect('customer');
        } else {
            $title = "Update Customer";
            $url = url('/customer/update') . "/" . $id; 
            $data = compact('customer', 'url','title');
            return view('customer')->with($data);
        }
    }
}
