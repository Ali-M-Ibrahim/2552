@extends('layouts.crud')

@section('content')
    <main class="category-grid">
        <div class="category-card">
            <div class="card-body">
                <h3>Category id: {{$data->id}}</h3>
                <h3>Category name: {{$data->name}}</h3>
                <p>{{$data->description}}</p>
            </div>
        </div>
    </main>
@endsection
