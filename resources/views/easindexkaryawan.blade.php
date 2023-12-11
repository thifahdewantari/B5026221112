@extends('easmaster')

@section('title','5026221112 - Aathifah Dewantari (DD)')

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
            <td>{{ $k->divisi }}</td>
            <td>{{ strtolower($k->departemen) }}</td>
            <td>
                <a href="/easkaryawan/eashapuskaryawan/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus Data</a>
            </td>
        </tr>
    @endforeach
</table>
<a href="/easkaryawan/eastambahkaryawan" class="btn btn-primary"> + Tambah Data Karyawan </a>
@endsection
