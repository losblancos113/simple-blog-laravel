@extends('layout.master')
@section('head.title')
    Create new article
@stop
@section('body.content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h1>Add new article</h1>
                <hr>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!!!</strong> There were some problems with your input.<hr><hr>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                        </ul>
                    </div>
                    @endif
                {{--<form method="post" action="{{ route('articles.store') }}" class="form-horizontal">--}}
                    {{--<input type="hidden" name="_token" value="{{ csrf_token()  }}" />--}}
                    {{--{{ csrf_field() }}--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="title" class="control-label">Title</label>--}}
                        {{--<input class="form-control" type="text" name="title" id="title" required--}}
                               {{--placeholder="Dien tieu de bai viet">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="content" class="control-label">Content</label>--}}
                        {{--<textarea class="form-control" id="content" name="content" required--}}
                                  {{--placeholder="Noi dung"></textarea>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<button type="submit" class="btn btn-primary">Them bai viet</button>--}}
                    {{--</div>--}}
                {{--</form>--}}

                {!! Form::open([
                    'route' => ['articles.store'],
                    'method' => 'POST',
                    'class' => 'form-horizontal'
                ]) !!}
                    @include('articles._form', ['button_name' => 'Them'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop