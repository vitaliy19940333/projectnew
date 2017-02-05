
@extends('loyauts.template');
@section('content')
<br><br/>
    <h1>Форма обртной связи</h1>
<hr>
<div class="row">
    <form action="{{ route("contact") }}" method="post">
    <div class="form-group col-sm-6">
        <label for="name"class="h4">Name</label>
        <input type="text" class="form-control" name="name"  id="name" placeholder="Enter name" value="{{ old('name') }}" required>
    </div>
    <div class="form-group col-sm-6">
        <label for="email" class="h4">Email</label>
        <input type="email" class="form-control" name="email" id='email' placeholder="Enter email" value="{{ old("email") }}" required>
    </div>
</div>
<div class="form-group">
    <label for="message"class="h4 ">Message</label>
    <textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
</div>
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<button type="submit" id="form-submit" class="btnbtn-success btn-lg pull-right ">Submit</button>
</form>

@endsection