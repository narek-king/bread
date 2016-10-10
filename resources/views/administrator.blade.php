@extends('layouts.admin')

@section('content')
 <div class="flex-center position-ref full-height">


  <div class="content">
   <div class="title m-b-md">
    Welcome Bread's Admin Panel
   </div>
   </div>
  </div>
<ul>
 <li><a href="{{ url('/register') }}">Register a new user</a></li>
</ul>

 <form method="post" action="admin/files" enctype="multipart/form-data">
  {{ csrf_field() }}

  <input multiple="true" type="file" name="htmls[]"></input>

  <button type="submit">Submit</button>

 </form>

  {{--</div>--}}
 {{--</div>--}}
 {{--<div class="container">--}}
  {{--<div class="row">--}}
   {{--<div class="col-md-8 col-md-offset-2">--}}
    {{--<div class="panel panel-default">--}}
     {{--<div class="panel-heading">Dashboard</div>--}}
     {{--<p>Title: {{var_dump($bread)}}</p>--}}
     {{--@foreach($breads as $bread)--}}
      {{--<p>Title: {{$bread->title }}</p>--}}
     {{--@endforeach--}}
     {{--{{$date}}--}}
     {{--<p>reading: {{$bread->read}}</p>--}}
     {{--<div class="panel-body">--}}
      {{--You are logged in!--}}
     {{--</div>--}}
    {{--</div>--}}
   {{--</div>--}}
  {{--</div>--}}
 {{--</div>--}}
@endsection
