@extends('layouts.master')
@section('title', 'View User')
@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="text-uppercase">View Users
                    <!-- <a href="" class="btn btn-primary btn-sm float-end text-uppercase"><i class="fa fa-plus"></i> Add User</a> -->
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
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $item)   
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{ $item->role_as == '1' ? 'Admin':'User' }}</td>
                            <td>
                                <a href="{{ url('admin/edit-user/'.$item->id) }}"><i class="fas fa-edit"></i></a> |
                                <a href="{{ url('admin/delete-user/'.$item->id) }}"><i class="fa fa-trash" style="color:red"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection