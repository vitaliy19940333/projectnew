@extends('loyauts.template')
@section('content')
    <br><br>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $article->name }}</h1>
                <hr />
                <p> {{$article->text}} </p>
            </div>
        </div>
    </div>

@endsection