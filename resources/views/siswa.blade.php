@php

    //$siswa = \App\Models\Siswa::where('kelas','XI RPL 2z')
    //->orderBy('id', 'desc')
    //->take(100)
    //->where('nama', 'Rafi')
    //->where('jenis_kelamin', '1')
    //->groubBy('id')
    //->get();
    $siswa = \App\Models\Siswa::find(2);
    $siswa2 = \App\Models\Siswa::where('id','1')->orderBy('id', 'desc')->get();
    $siswa3 = \App\Models\Siswa::where('kelas','XI RPL 2')->orderBy('id','desc')->first();
    $siswa4 = \App\Models\Siswa::where('kelas','XI RPL 2')->orderBy('id','desc')->firstOrFail();
    //$sakola = \App\Models\Sakola::all();


@endphp

    <h1>id : {{ $siswa4->id ?? 'kososng '}}</h1>
    <h1>Nama : {{$siswa4->nama ?? 'kosong' }} </h1>
    <h1>Kelas : {{$siswa4->kelas ?? 'kosong' }} </h1>
    <h1>jenis kelamin : {{$siswa4->jenis_kelamin ?? 'kosong'}} </h1>
    <hr>


{{-- @foreach ($sakola as $data)hg
    <h1>alamat : {{$data->alamat}} </h1> 
    <h1>email : {{$data->email}} </h1>
    <h1>status : {{$data->status}} </h1>
    <hr>
@endforeach --}}
