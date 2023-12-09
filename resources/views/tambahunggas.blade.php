@extends('master4')
@section('judulhalaman', 'Tambah Unggas')

@section('konten')
    <h3>Tambah Unggas</h3>

    <a href="/unggas" class="btn btn-success"> <- Kembali</a>

    <br/>
    <br/>

    <form action="/unggas/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class = "form-group row">
            <label for = "kodeunggas" class = "col-sm-2 col-form-label">Kode Unggas</label>
            <div class = "col-sm-4">
                <input required="required" type = "number" class = "form-control" id = "kodeunggas" name="kodeunggas">
            </div>
        </div>
        <div class="form-group row">
            <label for="namaunggas" class="col-sm-2 col-form-label">Nama Unggas</label>
            <div class="col-sm-4">
                <input required="required" type="text" class="form-control" id="namaunggas" name="namaunggas">
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlahunggas" class="col-sm-2 col-form-label">Jumlah Unggas</label>
            <div class="col-sm-4">
                <input required="required" type="number" class="form-control" id="jumlahunggas" name="jumlahunggas">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-2 col-form-label">Ketersediaan</label>
            <div class="col-sm-4">
                <input required="required" type="text" class="form-control" id="tersedia" name="tersedia">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
