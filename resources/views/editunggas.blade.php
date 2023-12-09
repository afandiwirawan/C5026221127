@extends('master2')
@section('judulhalaman', 'Edit Unggas')

@section('konten')
    <h3>Edit Unggas</h3>

    <a href="/unggas" class="btn btn-success"> <- Kembali</a>

            <br />
            <br />
            @foreach ($unggas as $u)
                <form action="/unggas/update" method="post" class="form-horizontal">
                    {{ csrf_field() }}
                    <input type="hidden" name="kodeunggas" value="{{ $u->kodeunggas }}">
                    <div class = "form-group row">
                        <label for = "namaunggas" class = "col-sm-2 col-form-label">Nama Unggas</label>
                        <div class = "col-sm-4">
                            <input type="text" required="required" name="namaunggas" value="{{ $u->namaunggas }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "jumlahunggas" class = "col-sm-2 col-form-label">Jumlah Unggas</label>
                        <div class = "col-sm-4">
                            <input type="number" required="required" name="jumlahunggas" value="{{ $u->jumlahunggas }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tersedia" class="col-sm-2 col-form-label">Ketersediaan</label>
                        <div class="col-sm-4">
                            <input type="text" required="required" class="form-control" id="tersedia" name="tersedia" value="{{$u->tersedia}}">
                        </div>
                    </div>
                    <input type="submit" value="Simpan Data" class="btn btn-primary">
                </form>
            @endforeach
        @endsection
