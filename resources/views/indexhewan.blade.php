@extends('master')

@section('title','Hewan')

@section('konten')
<h3>Daftar Hewan</h3>

<a href="/hewan/tambahhewan" class="btn btn-primary"> + Tambah Data Hewan </a>

<br>
<p>Cari Data Hewan berdasarkan nama:</p>
	<form action="/hewan/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="cari nama hewan..." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
<br/>

<table class="table table-striped table-hover">
    <tr style="text-align: center">
        <th>Kode Hewan</th>
        <th>Nama Hewan</th>
        <th>Jumlah Hewan</th>
        <th>Ketersediaan</th>
        <th>Action</th>
    </tr>
    @foreach ($hewan as $h)
        <tr style="text-align: center">
            <td>{{ $h->kodehewan }}</td>
            <td>{{ $h->namahewan }}</td>
            <td>{{ $h->jumlahhewan }}</td>
            <td>
                <div class="custom-checkbox"
                    style="border: 2px solid {{ $h->tersedia == 'Y' ? 'green' : 'red' }}; border-radius: 10px">
                    <label for="customCheckbox {{$h->kodehewan}}"
                        style="color: {{$h->tersedia == 'Y' ? 'green' : 'red' }};">
                        {{ $h->tersedia == 'Y' ? 'Y' : 'N' }}
                    </label>
                    <input type="checkbox" {{$h->tersedia == 'Y' ? 'checked' : '' }} disabled
                        id="customCheckbox{{$h->kodehewan}}">
                    <label for="customCheckbox {{ $h->kodehewan }}">

                    </label>
                </div>
            </td>
            <td>
                <a href="/hewan/viewhewan/{{ $h->kodehewan }}" class="btn btn-success">View</a>
                |
                <a href="/hewan/edithewan/{{ $h->kodehewan }}" class="btn btn-warning">Edit</a>
                |
                <a href="/hewan/hapushewan/{{ $h->kodehewan }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection
