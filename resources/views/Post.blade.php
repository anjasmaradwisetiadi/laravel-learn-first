@extends('layout.Layout')
@section('content')
    <h5>{{$post["title"]}}</h5>
    <p><b>{{$post["author"]}}</b></p>
    <p>
        {{$post["description"]}}
    </p>
    <button type="button" class="btn btn-primary mt-6">
        <a href="/Profile" class="text-white">Back</a>
    </button>
@endsection
