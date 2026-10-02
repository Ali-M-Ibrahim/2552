<?php

namespace App\Http\Controllers;

class FirstController extends Controller
{
    public function index()
    {
        return 'Hello i am your first end point';
    }

    public function second()
    {
        return response()->json([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
        ]);
    }

    public function third($id)
    {

        return 'Hello parameter is: '.$id;
    }
}
