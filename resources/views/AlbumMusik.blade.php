@php
    $AlbumMusik = \App\Models\Album_musik::all();
    $AlbumMusik2 = \App\Models\Album_musik::where('id','1')->orderBy('id', 'desc')->get();
    $AlbumMusik3 = \App\Models\Album_musik::where('cover_album','Jalan Ninja')->orderBy('id','desc')->get();
    $AlbumMusik4 = \App\Models\Album_musik::where('cover_album','Apapun Dilibas')->orderBy('id','asc')->first();
    $AlbumMusik5 = \App\Models\Album_musik::where('cover_album','Apapun Dilibas')->orderBy('id','asc')->find(2);
@endphp

<h1 style="color: red">halaman 1</h1>
@foreach ($AlbumMusik as $data)
    <h1 id="bold">id : {{$data->id ?? 'kososng '}}</h1>
    <h1>Nama : {{$data->judul ?? 'kosong' }} </h1>
    <h1>Kelas : {{$data->tahun ?? 'kosong' }} </h1>
    <h1>jenis kelamin : {{$data->cover_album ?? 'kosong'}} </h1>
    <br>
@endforeach

<hr>
<h1 style="color: darkmagenta">halaman 2</h1>
@foreach ($AlbumMusik3 as $data)
    <h1>id : {{$data->id ?? 'kososng '}}</h1>
    <h1>Nama : {{$data->judul ?? 'kosong' }} </h1>
    <h1>Kelas : {{$data->tahun ?? 'kosong' }} </h1>
    <h1>jenis kelamin : {{$data->cover_album ?? 'kosong'}} </h1>
   <br>
@endforeach

<hr>
<h1 style="color: aqua">halaman 3</h1>
    <h1>id : {{$AlbumMusik4->id ?? 'kososng '}}</h1>
    <h1>Nama : {{$AlbumMusik4->judul ?? 'kosong' }} </h1>
    <h1>Kelas : {{$AlbumMusik4->tahun ?? 'kosong' }} </h1>
    <h1>jenis kelamin : {{$AlbumMusik4->cover_album ?? 'kosong'}} </h1>
    <hr>

<h1 style="color: blue">halaman 4</h1>
    <h1>id : {{$AlbumMusik5->id ?? 'kososng '}}</h1>
    <h1>Nama : {{$AlbumMusik5->judul ?? 'kosong' }} </h1>
    <h1>Kelas : {{$AlbumMusik5->tahun ?? 'kosong' }} </h1>
    <h1>jenis kelamin : {{$AlbumMusik5->cover_album ?? 'kosong'}} </h1>
    <hr>
