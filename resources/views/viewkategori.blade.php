@extends('master5')
@section('judulHalaman', 'Lihat kategori')


@section('konten')
@foreach($kategori as $k)
    <h2>Anda telah memilih Kategori dengan kode: {{$k->ID}}</h2>

    <a href="/kategori" class="btn btn-success"> Kembali</a>
@endforeach

@endsection
