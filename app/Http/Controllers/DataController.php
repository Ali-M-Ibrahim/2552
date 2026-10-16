<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function getAll()
    {
        // SELECT * FROM CUSTOMERS;
        $data = Customer::all();

        return $data;
    }

    public function getById($id)
    {
        // SELECT * FROM CUSTOMER WHERE ID=?
        // $data = Customer::find($id);
        $data = Customer::findOrFail($id);

        // $data = Customer::findOr($id, function () {
        //     return 'Customer not found';
        // });
        return $data;
    }

    public function getByCondition()
    {
        // select * from customers where salary = 100;
        // when using get, eloquent will return array
        $data = Customer::where('salary', 100)->get();
        // when using first, eloquent will return first occurence
        $data = Customer::where('salary', 100)->first();

        // $data = Customer::where('salary', 162100)->firstOrFail();
        // $data = Customer::where('salary', 62626)->firstOr(function () {
        //     return 'no data';
        // });
        return $data;
    }

    public function getByMultipleConditions()
    {
        // SELECT * FROM CUSTOMERS WHERE SALARY = 100 AND ID > 1;
        $data = Customer::where('salary', 100)
            ->where('id', '>', 1)
            ->get();

        return $data;
    }

    public function getCustomerLike()
    {
        // select * from customer where name like %a%;
        $data = Customer::where('name', 'like', '%aa%')->get();

        return $data;
    }

    public function getCustomerIn()
    {
        // select * from customers where id in 1,2,3
        // select * from customer where id=1 or id=2 or id=3;
        $data = Customer::whereIn('id', [1, 2, 3])->get();

        return $data;
    }

    public function getCustomerWithOr()
    {
        // select * from customer where id=2 or salary=100;
        $data = Customer::where('id', 2)->orWhere('salary', 100)->get();

        return $data;
    }

    public function getCustomerBetween()
    {
        // select * from customers where salary between 100 and 400;
        $data = Customer::whereBetween('salary', [100, 400])->get();

        return $data;
    }

    public function getSpecificData()
    {
        // select id,name from customers
        $data = Customer::select(['id', 'name'])->where('id', '>', 1)->get();

        return $data;
    }

    public function getDistinctSalary()
    {
        // select distinct salary from customers;
        $data = Customer::select('salary')->distinct()->get();

        return $data;
    }

    public function getCustomerOrdered()
    {
        $data = Customer::orderBy('salary', 'asc')->get();
        $data = Customer::orderBy('salary', 'desc')->get();

        return $data;
    }

    public function Arithmetic()
    {

        // SELECT SUM(SALARY) FROM CUSTOMERS;
        $dataSum = Customer::sum('salary');
        $data = Customer::where('id', '>', 2)->sum('salary');
        $data = Customer::min('salary');
        $data = Customer::max('salary');
        $data = Customer::avg('salary');
        $data = Customer::count();
        $obj = [
            'sum' => $dataSum,
            'count' => $data,
        ];

        return $obj;
    }

    public function PluckData()
    {
        $data = Customer::where('salary', '>', 100)->pluck('id');
        // $data = Customer::where('salary', '>', 100)->select('id')->get();

        return $data;
    }

    public function latestData()
    {
        $data = Customer::latest()->get();

        return $data;
    }

    public function groupBySalary()
    {
        $data = Customer::all()->groupBy('salary');

        //
        $data = Customer::select('salary', DB::raw('count(*) as total'))
            ->groupBy('salary')->get();

        return $data;
    }

    public function getDataJoin()
    {
        $data = Customer::join('credentials', 'credentials.customer_id', 'customers.id')
            ->select(['customers.name', 'credentials.email', 'credentials.password'])
            ->get();

        return $data;
    }
}
