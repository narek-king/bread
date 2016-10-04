@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                    {{--<p>Title: {{var_dump($bread)}}</p>--}}
                @foreach($breads as $bread)
                    <p>Title: {{$bread->title }}</p>
                @endforeach
                    {{$date}}
                    {{--<p>reading: {{$bread->read}}</p>--}}
                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
