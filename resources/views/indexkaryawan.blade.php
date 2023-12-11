@extends('master')

@section('title','Karyawan')

@section('konten')
<h3>Daftar Karyawan</h3>

<table class="table table-striped table-hover">
    <tr style="text-align: center">
        <th>Kode Pegawai</th>
        <th>Nama Karyawan</th>
        <th>Divisi</th>
        <th>Departemen</th>
        <th>Action</th>
    </tr>
    @foreach ($karyawan as $k)
        <tr style="text-align: center">
            <td>{{ $k->kodepegawai }}</td>
            <td>{{ strtoupper($k->namalengkap) }}</td>
            <td>{{ $k->divisi }}</td>a
            <td>{{ strtolower($k->departemen) }}</td>
            <td>
                <a href="/karyawan/hapuskaryawan/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    @endforeach
</table>
<a href="/karyawan/tambahkaryawan" class="btn btn-primary"> + Tambah Data Karyawan </a>
@endsection
