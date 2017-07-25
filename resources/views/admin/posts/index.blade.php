@extends('layouts.admin')


@section('content')

    @if(Session::has('deleted_user'))

        <p class="bg-success">{{Session('deleted_user')}}</p>

    @endif

    <h1>Posts</h1>

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>photo</th>
            <th>Author</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Date Created</th>
            <th>Last Modified</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)

            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td><img height="50" src="{{$post->photo ? $post->photo->file : '/images/sad-128.png'}}"></td>
                    <th scope="row">{{$post->user->name}}</th>

{{--                    <td><img height="50" src="{{$user->photo ? $user->photo->file : '/images/sad-128.png'}}"></td>--}}
                    {{--<td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a> </td>--}}
                    <td>{{$post->category_id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>

                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>

            @endforeach

        @endif

        </tbody>
    </table>


@stop