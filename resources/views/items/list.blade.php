@extends('layouts.crud')


@section('content')
    <h1 class="page-title">All Items</h1>
    <!-- Responsive Table wrapper to prevent desktop layouts from breaking on narrow viewports -->
    <div class="table-responsive">
        <table class="data-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @forelse($data as $row)

                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->category->name}}</td>
                    <td>
                        <a href="{{route('item.show',['item'=>$row->id])}}">Show</a>
                        <a href="{{route('item.edit',['item'=>$row->id])}}">Edit</a>

{{--                        <a href="{{route('delete-category',['id'=>$row->id])}}">Delete</a>--}}
                        <form action="{{route('item.destroy',['item'=>$row->id])}}" method="post">
                            @method('delete')
                            @csrf
                            <input type="submit" value="Delete">
                        </form>

                    </td>
                </tr>
            @empty
                <tr style="text-align:center">
                    <td colspan="4">No data found</td>
                </tr>


            @endforelse

            </tbody>
        </table>
    </div>
@endsection
