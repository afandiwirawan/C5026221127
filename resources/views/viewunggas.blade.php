@extends('master4')
@section('judulhalaman', 'Informasi Unggas')

@section('konten')
<h3>Informasi Unggas</h3>

<a href="/unggas" class="btn btn-success"><- Kembali</a>

    <br/>
    <br/>

    <div class="row">
        <div class="col-6 border">
        </div>
        <div class="col-6">
            @foreach ($unggas as $u)
            <fieldset disabled>
                <form action="/unggas/update" method="post" class="form-horizontal " role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="kodeunggas" value="{{ $u->kodeunggas }}">
                    <div class = "form-group row">
                        <label for = "namaunggas" class = "col-sm-2 control-label">Nama Unggas</label>
                        <div class = "col-sm-8">
                            <input type="text" required="required" name="namaunggas" value="{{ $u->namaunggas }}" class="form-control">
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "jumlahunggas" class = "col-sm-2 control-label">Jumlah Unggas</label>
                        <div class = "col-sm-8">
                            <input type="number" required="required" name="jumlahunggas" value="{{ $u->jumlahunggas }}" class="form-control">
                        </div>
                    </div>
                    <div class = "form-group row">
                        <input class="col-1" required="required" type = "checkbox" id = "tersedia"  name="tersedia" {{ $u->tersedia == 'y' ? 'checked' : '' }}>
                        <label for = "tersedia" class = "control-label">Ketersedian barang</label>
                    </div>
                </form>
            </fieldset>
            @endforeach
            <div class="text-center" style="width:520px">
                <a href="/unggas" class="btn btn-primary w-25">OK</a>
            </div>
        </div>
    </div>

@endsection
