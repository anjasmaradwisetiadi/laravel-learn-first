@extends('layout.Layout')
@section('content')
    <h1>Dashboard Profile</h1>
    <h4>Profile Penulis</h4>
    <ul>
        <li>Nama: {{ $name }}</li>
        <li>Pekerjaan: {{ $pekerjaan }} </li>
        <li>Age: <?= $age; ?> tahun</li>
        <li>Hobby: <?= $hobby; ?></li>
    </ul>

    <div class="article">
        <article>
            @foreach ($blogs as $blog)
                <h5>
                    <a class="text-decoration-none" href="/Profile/{{$blog["slug"]}}"> {{$loop->iteration}}. {{$blog["title"]}} </a>
                </h5>
                <p class="text-decoration-underline "><b>{{$blog["author"]}}</b></p>
                <p>{{$blog["description"]}}</p>
            @endforeach
        </article>
    </div>
@endsection
