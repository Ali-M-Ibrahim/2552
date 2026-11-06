
@extends('layouts.crud')

@section('content')
    <main class="category-grid">
        <div class="category-card">
            <div class="card-body">
                <h3>Item id: {{$data->id}}</h3>
                <h3>Item name: {{$data->name}}</h3>
                <h3>Item category: {{$data->category->name}}</h3>
                <h3>Item price: {{$data->price}}</h3>
                <p>{{$data->description}}</p>
            </div>
        </div>
    </main>
@endsection
