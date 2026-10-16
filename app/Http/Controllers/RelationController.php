<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class RelationController extends Controller
{
    public function index()
    {
        // retrieve customer 4 queries
        // $customer = Customer::find(1);
        // $relatedCredentials = $customer->getCredential;
        // $accounts = $customer->accounts;
        // $relatedServices = $customer->getServices;

        // // 1 query to get all data
        // $customer = Customer::with(['getCredential', 'accounts', 'getServices'])
        //     ->find(1);

        // return $customer;

        // not recommended
        // // query 1
        // $customers = Customer::all();
        // // 4 queries
        // foreach ($customers as $c) {
        //     $c->getCredential;
        // }

        // $customers = Customer::with('accounts')->get();

        // $customers = Customer::all();
        // $customers->load('accounts');

        $data = Customer::withCount('accounts')->get();

        // get customer who have accounts
        $data = Customer::has('accounts')->get();

        // get customers who does not have accounts
        $data = Customer::doesntHave('accounts')->get();

        // to get customer who have account having iban =123
        $data = Customer::whereHas('accounts', function ($q) {
            $q->where('iban', 123);
        })->get();

        $customer = Customer::join('accounts', 'accounts.customer_id', 'customers.id')
            ->where('accounts.iban', '123')
            ->select('customers.*')
            ->get();

        return $customer;
    }
}
