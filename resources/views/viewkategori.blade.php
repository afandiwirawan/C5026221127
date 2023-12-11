@extends('master5')
@section('judulhalaman', 'Hasil Kategori')

@section('konten')
@foreach ($kategori as $k)
    Anda telah memilih kategori dengan kode: {{$k -> ID}}
@endforeach

@endsection
