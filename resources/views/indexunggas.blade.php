@extends('master4')
@section('judulhalaman', 'Unggas')

@section('konten')
    <h3>Data Unggas</h3>

    <a href="/unggas/tambah" class="btn btn-primary"> + Tambah Data Unggas</a>
    <br/>
    <br/>

    <p>Cari Data Unggas :</p>
    <form action="/unggas/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari Nama Unggas .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}"><br/>
        <input type="submit" value="CARI" class="btn btn-info">
    </form>
    <br />

    <table class="table table-striped table-hover">
		<tr>
			<th>Kode unggas</th>
			<th>Nama unggas</th>
			<th>Jumlah unggas</th>
			<th>Ketersediaan</th>
            <th>Opsi</th>
		</tr>
		@foreach($unggas as $u)
        <tr>
            <td>{{ $u->kodeunggas }}</td>
            <td>{{ $u->namaunggas}}</td>
            <td>{{ $u->jumlahunggas }}</td>
            <td>
                <input type="checkbox" disabled {{ $u->tersedia == 'y' ? 'checked' : '' }}>
            </td>
            <td>
                <a href="/unggas/view/{{ $u->kodeunggas }}" class="btn btn-success">View</a>
                |
                <a href="/unggas/edit/{{ $u->kodeunggas }}" class="btn btn-warning">Edit</a>
                |
                <a href="/unggas/hapus/{{ $u->kodeunggas }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
		@endforeach
	</table>

    {{$unggas->links()}}

@endsection
