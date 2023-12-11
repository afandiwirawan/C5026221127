@extends('master5')
@section('judulhalaman', 'Data Kategori')

@section('konten')
    <h3>Data Kategori</h3>
    <br/>
    <br/>

    <div class="row">

        <form action="/kategori/view" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="pilihKategori" class="col-form-label">Pilih Kategori:</label>
                <div class="col-sm-10">
                <select class="form-control" id="pilihKategori" name="pilihKategori">
                    @foreach ($kategori as $k)
                        <option value="{{$k->ID}}">{{$k->Nama}}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="KIRIM" class="btn btn-primary mt-2">
        </form>
        </div>
    </div>
@endsection
