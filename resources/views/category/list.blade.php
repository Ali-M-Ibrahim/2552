@extends('layouts.crud')


@section('content')
    <h1 class="page-title">All Categories</h1>
    <!-- Responsive Table wrapper to prevent desktop layouts from breaking on narrow viewports -->
    <div class="table-responsive">
        <table class="data-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th># Items</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @forelse($data as $row)

                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>  {{count($row->items)}} </td>
                    <td>
                        <a href="{{route('show-category',['id'=>$row->id])}}">Show</a>

                        <a href="{{route('delete-category',['id'=>$row->id])}}">Delete</a>
                        <form action="{{route('delete-category2',['id'=>$row->id])}}" method="post">
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
