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


    <form class="contact-form" action="{{route('item.store')}}" method="POST">
        @csrf
        <!-- Last Name Field -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Type your name here..." value="{{old('name')}}">
            @error('name')
                <span class="is-invalid">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" id="price" name="price" placeholder="Type your price here..." value="{{old('price')}}">
            @error('price')
            <span class="is-invalid">{{$message}}</span>
            @enderror
        </div>


        <!-- Message Textarea -->
        <div class="form-group full-width">
            <label for="description">Description</label>
            <textarea id="description" name="description" placeholder="Type your description here..." >{{old('description')}}</textarea>
            @error('description')
            <span class="is-invalid">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group full-width">
            <label for="category">Category</label>
            <select name="category_id" id="category" >
                @foreach($categories as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
            </select>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="submit-btn full-width">Save</button>
    </form>

@endsection
