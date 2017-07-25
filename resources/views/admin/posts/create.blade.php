@extends('layouts.admin')


@section('content')


    <h2>Create Posts</h2>

    @include('includes.form_error')


    {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('category_id','Category:') !!}
        {!! Form::select('category_id', array(1 => 'PHP', 2 => 'Javascript'), null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id','File:') !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body','Body:') !!}
        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}







@endsection
