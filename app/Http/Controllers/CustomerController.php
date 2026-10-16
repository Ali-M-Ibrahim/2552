<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        // select * from customer where id=1
        $data = Customer::find(1);
        $credentials = $data->getCredential;

        return $credentials;
    }
}
