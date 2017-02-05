@extends('loyauts.template')
@section('content')
    <br><br>
    <p>sdfsdgdfgdsfgdf</p>
    <p> Lorem{sadf sdfsdgdvfgd </p>
    <ul>
        @foreach($articles as $value)
            <li><a href="{{ route('article',array('id'=>$value->id)) }}">{{ $value->name }}</a></li>
        @endforeach
    </ul>
   <h1>{{$content->title}}</h1> <br>
    <p>{{$content->text}}</p>
@endsection