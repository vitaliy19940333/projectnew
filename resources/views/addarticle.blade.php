<pre>{{print_r(\Illuminate\Support\Facades\Session::all())}}</pre>
@extends('loyauts.template')
@section('content')
    <form action="{{ route('addarticledsffsd') }}" method="post">
        <label for="name">Название статьи</label><br>
        <input type="text" name="name"><br>
        <label for="name">Текст статьи</label><br>
        <input type="text" name="text"><br>
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <button class="btn btn-success" type="submit">Отправить</button>

    </form>
    </form>
@endsection