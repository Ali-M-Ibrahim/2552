
@extends('layouts.crud')


@section('content')
    <h1 class="page-title">Add Category</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form class="contact-form" action="{{route('update-category',['id'=>$data->id])}}" method="POST">
        @method('put')
        @csrf
        <!-- Last Name Field -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Type your name here..." value="{{$data->name}}">
            @error('name')
                <span class="is-invalid">{{$message}}</span>
            @enderror
        </div>

        <!-- Message Textarea -->
        <div class="form-group full-width">
            <label for="description">Description</label>
            <textarea id="description" name="description" placeholder="Type your description here..." >{{$data->description}}</textarea>
            @error('description')
            <span class="is-invalid">{{$message}}</span>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="submit-btn full-width">Save</button>
    </form>

@endsection
