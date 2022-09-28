@extends('layouts.master')
@section('title', 'Posts')
@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="text-uppercase">View Posts
                    <a href="{{ url('admin/add-post') }}" class="btn btn-primary btn-sm float-end text-uppercase"><i class="fa fa-plus"></i> Add Post</a>
                </h5>
            </div>
            <div class="card-body">
                @if(session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <table id="myTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Post Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $item)   
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->category->name}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{ $item->status == '1' ? 'Hidden':'Visible' }}</td>
                            <td>
                                <a href="{{ url('admin/edit-post/'.$item->id) }}"><i class="fas fa-edit"></i></a> |
                                <a href="{{ url('admin/delete-post/'.$item->id) }}"><i class="fa fa-trash" style="color:red"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection