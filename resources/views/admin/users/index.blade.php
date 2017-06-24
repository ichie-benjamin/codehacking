@extends('layouts.admin')


@section('content')

    <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Active</th>
                <th>Date Created</th>
                <th>Last Modified</th>
            </tr>
            </thead>
            <tbody>
            @if($users)

                @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
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