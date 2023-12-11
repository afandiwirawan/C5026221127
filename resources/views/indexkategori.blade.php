@extends('master5')
@section('judulhalaman', 'Kategori')

@section('konten')
<form action="/kategori/viewkategori" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="pemilihankategori">Pilih Kategori:</label>
        <select class="form-control" id="pemilihankategori" name="pemilihankategori">
            @foreach ($kategori as $k)
                <option value="{{$k->ID}}">{{$k->Nama}}</option>
            @endforeach
        </select>
    </div>
    <input type="submit" value="Kirim" class="btn btn-primary mt-2">

</form>

@endsection
