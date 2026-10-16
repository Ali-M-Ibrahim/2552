<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\InvokableController;
use App\Http\Controllers\RelationController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

// To define a route on laravel,
// Route::method('uri',function(){ treatment });

// in a route we can return
// string, numbers, boolean, json, view, array

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first-uri', function () {
    return 'Hello I am your first end point';
});

Route::get('second-uri', function () {
    return 'Hello I am your second end point';
});

Route::get('third-uri', function () {
    // return number
    // return 500;

    // return boolean
    // return true;

    // return array
    return [1, 2, 3, 4, 5];
});

Route::get('json-response', function () {
    return response()->json([
        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
    ]);
});

Route::get('json-response2', function () {
    // in php to create an variable we can use $
    $obj = [
        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
    ];

    return response()->json($obj);
    // return response()->json($obj, 201);
});

// to return response with status code we can use response() function
Route::get('route5', function () {
    $obj = [
        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
    ];

    // return response(['name'=>'ali'],200);
    return response('your data type to return', Response::HTTP_ACCEPTED);
    // return response('hello i am string', 250);
    // return response($obj, 201);
});

// to return error
Route::get('route6', function () {
    // return abort(404);
    return abort(403, 'Sorry you are not allowed to visit this page');
});

// to return no content
Route::get('route7', function () {
    return response()->noContent();
});

// to return headers from server
Route::get('route8', function () {
    return response('hello i an endpoint', 200)
        ->header('Content-Type', 'text/plain')
        ->header('developper', 'Ali Ibrahim');
});

Route::get('route9', function () {
    return response('my response', 200,
        [
            'Content-Type' => 'text/plain',
            'developer' => 'Ali Ibrahim',
        ]);
});

// route with parameter

Route::get('route10/{id}', function ($id) {
    return 'the parameter is: '.$id;
});

Route::get('route11/{id}/{name}', function ($id, $name) {
    return 'the parameter is: '.$id.' and name is: '.$name;
});

Route::get('route12', function (Request $request) {
    $headerValueOfPassword = $request->header('password');

    return 'The value of the header is: '.$headerValueOfPassword;
});

Route::get('secretKey', function (Request $request) {
    $headerValueOfPassword = $request->header('password');
    if ($headerValueOfPassword == '123456') {
        return 'You are allowed to visit this page';
    } else {
        return abort(403, 'Sorry you are not allowed to visit this page');
    }
});

// to creat ea route with parameter
Route::get('route13/{id}', function ($id) {
    return 'the parameter is: '.$id;
});

// to create a route with optional parameter
Route::get('route14/{id?}', function ($id = 0) {
    return 'the parameter is: '.$id;
});

// router that redirect me to another route
Route::get('route15', function () {
    return redirect('route10/5');
});

// to create a route with name
Route::get('route-16', function () {
    return 'this is route 16';
})->name('my-route-16');

Route::get('route17', function () {
    return redirect()->route('my-route-16');
});

Route::get('route17', fn () => 'Hello i am route17');

Route::post('/post-uri', function () {
    return 'Hello I am your first post end point';
});

// RECOMMENDED: to create a route that call a controller method
Route::get('first-route', [FirstController::class, 'index'])->name('first-controller');
Route::get('second-route', [FirstController::class, 'second'])->name('second-controller');
Route::get('third-controller/{id}', [FirstController::class, 'third'])->name('third-controller');

// old ways to create routes not recommended
Route::get('first-controller-old', 'App\Http\Controllers\FirstController@index')->name('name-first-controller-old');
Route::get('second-controller-old', [
    'uses' => 'App\Http\Controllers\FirstController@second',
    'as' => 'second-controller-old',
]);

Route::get('invoke-method', InvokableController::class)->name('invoke-method');

Route::get('get-customer', [CustomerController::class, 'index']);

Route::get('get-all', [DataController::class, 'getAll']);
Route::get('getById/{id}', [DataController::class, 'getById']);
Route::get('getByCondition', [DataController::class, 'getByCondition']);
Route::get('getByMultipleConditions', [DataController::class, 'getByMultipleConditions']);
Route::get('getCustomerLike', [DataController::class, 'getCustomerLike']);
Route::get('getCustomerIn', [DataController::class, 'getCustomerIn']);
Route::get('getCustomerWithOr', [DataController::class, 'getCustomerWithOr']);
Route::get('getCustomerBetween', [DataController::class, 'getCustomerBetween']);
Route::get('getSpecificData', [DataController::class, 'getSpecificData']);
Route::get('getDistinctSalary', [DataController::class, 'getDistinctSalary']);
Route::get('getCustomerOrdered', [DataController::class, 'getCustomerOrdered']);
Route::get('Arithmetic', [DataController::class, 'Arithmetic']);
Route::get('PluckData', [DataController::class, 'PluckData']);
Route::get('latestData', [DataController::class, 'latestData']);
Route::get('groupBySalary', [DataController::class, 'groupBySalary']);
Route::get('getDataJoin', [DataController::class, 'getDataJoin']);

Route::get('relation', [RelationController::class, 'index']);
