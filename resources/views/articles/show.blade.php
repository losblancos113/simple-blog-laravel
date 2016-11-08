@extends('layout.master')
@section('head.title')
    Tieu de bai viet
@stop
@section('body.content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-offset-3">
                <a href="{{ url('/') }}" class="btn btn-link"><i class="glyphicon glyphicon-chevron-left"></i>Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>{{ $article->title }}</h2>
                <p>{{ $article->content }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Edit</a>
                {!! Form::open([
                    'route' => ['articles.destroy',$article->id],
                    'method' => 'DELETE',
                    'class' => 'form-inline',
                    'style' => 'display: inline'
                ]) !!}
                <button class="btn btn-danger" type="submit">Delete</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop