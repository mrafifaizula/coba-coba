<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background: linear-gradient(45deg, #ff0000, #00ff00, #0000ff); text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5)" >
    
</body>
</html>

@php
$film = \App\Models\Film::all();
$orangTua = \App\Models\Film::find(1);
$anak = \App\Models\DetailFilm::find(1);
$mediaFilm = \App\Models\MediaFilm::all();
@endphp
<h1>Daftar Film</h1>
@foreach ($film as $item)
<h2>Film Ke : {{$item->id}}</h2>
<ul>
    <li>Judul Film : {{ $item->judul }}</li>
    <li>Deskripsi Film : {{ $item->deskripsi }}</li>
    <a href="{{url('film/' .$item->id)}}">Detail Film</a>
</ul>
{{-- <h3>Detail Film</h3>
<ul>
    <li>Code Film : {{$item->DetailFilm->code_film}}</li>
    <li>Code Film : {{$item->DetailFilm->url_cdbm}}</li>
</ul> --}}

@endforeach

<br>
{{-- 
<h1 style="color: red">Single Film</h1>
<h2>Film Ke : {{$orangTua->id}}</h2>
<ul>
    <li>Judul Film : {{ $orangTua->judul }}</li>
    <li>Deskripsi Film : {{ $orangTua->deskripsi }}</li>
</ul>
<h3>Detail Film</h3>
<ul>
    <li>Code Film : {{$orangTua->DetailFilm->code_film}}</li>
    <li>Code Film : {{$orangTua->DetailFilm->url_cdbm}}</li>
</ul> --}}

<br>
{{-- 
<h1 style="color: blue">Single Film (ForeignKey)</h1>
<h2>Film Ke : {{$anak->Film->id}}</h2>
<ul>
    <li>Judul Film : {{ $anak->Film->judul }}</li>
    <li>Deskripsi Film : {{ $anak->film->deskripsi }}</li>
</ul>
<h3>Detail Film</h3>
<ul>
    <li>Code Film : {{$anak->code_film}}</li>
    <li>Code Film : {{$anak->url_cdbm}}</li>
</ul>

<br>


<h1 style="color: blueviolet">Media Film</h1>
@foreach ($mediaFilm as $item)
<h2>Id Film : {{$item->Film->id}}</h2>
<ul>
    <li>Jenis Media : {{$item->tipeMedia}}</li>
    <li>Judul : {{$item->title}}</li>
    <li>Url Media : {{$item->urlMedia}}</li>
</ul>

@endforeach --}}

{{-- <h1 style="color: blueviolet">Media Film</h1>
<h2>Id Film : {{$mediaFilm->Film->id}}</h2>
<ul>
    <li>Judul : {{$mediaFilm->title}}</li>
    <li>Jenis Media : {{$mediaFilm->tipeMedia}}</li>
    <li>Url Media : {{$mediaFilm->urlMedia}}</li>
</ul> --}}