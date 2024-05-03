<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body
    style="background: rgb(85, 255, 0); text-shadow: 1px 1px 2px rgb(0, 0, 0);">

    <style>
        img {
            box-shadow: 5px 5px 10px black;
            border-radius: 50%;
        }
        p {
            text-shadow: 2px 2px 10px rgb(0, 0, 0)
        }
    </style>

</body>

</html>


<h1>Judul Film : {{$film->judul}}</h1>
<p>Deskripsi Film : {{$film->deskripsi}}</p>
{{-- Star One To One --}}
<span>
    <h1>Detail Film</h1> 
    <h3>Kode Film : {{$film->DetailFilm->code_film}}</h3>
    <h3>Url Film : <a href="{{$film->DetailFilm->url_cdbm}}" >Klik</a></h3>
</span>

{{-- End One To One --}}

{{-- Star One To Many --}}

<span>
<h1>Media Film</h1>
@foreach ($film->MediaFilm as $item)
    <p>Media Title : {{$item->title}}</p>
    @if ($item->tipeMedia)
    <p>
        url media : <a href="{{$item->urlMedia}}">klik</a>
    </p>
    @else
        <img src="{{$item->urlMedia}}" alt="" width="200" height="200">
    @endif
    <hr>
@endforeach

</span>