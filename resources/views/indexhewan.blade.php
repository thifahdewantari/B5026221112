@extends('master')

@section('title','Hewan')

@section('konten')
<h3>Daftar Hewan</h3>

<a href="/hewan/tambahhewan" class="btn btn-primary"> + Tambah Data Hewan </a>
<br />

<table class="table table-striped table-hover">
    <tr>
        <th>Kode Hewan</th>
        <th>Nama Hewan</th>
        <th>Jumlah Hewan</th>
        <th>Ketersediaan</th>
        <th>Action</th>
    </tr>
    @foreach ($hewan as $h)
        <tr>
            <td>{{ $h->kodehewan }}</td>
            <td>{{ $h->namahewan }}</td>
            <td>{{ $h->jumlahhewan }}</td>
            <td>{{ $h->tersedia }}</td>
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
