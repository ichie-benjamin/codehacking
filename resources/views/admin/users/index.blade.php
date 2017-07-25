@extends('layouts.admin')


@section('content')

    @if(Session::has('deleted_user'))

        <p class="bg-success">{{Session('deleted_user')}}</p>

        @endif

    <h1>Users</h1>

    <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Date Created</th>
                <th>Last Modified</th>
            </tr>
            </thead>
            <tbody>
            @if($users)

                @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>

                <td><img height="50" src="{{$user->photo ? $user->photo->file : '/images/sad-128.png'}}"></td>
                <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a> </td>
                <td>{{$user->email}}</td>
                <td>{{$user->role['id'] != NULL ? $user->role['name'] : 'Not Assigned'}}</td>
                <td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>

                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>

                @endforeach

            @endif

            </tbody>
        </table>


@stop