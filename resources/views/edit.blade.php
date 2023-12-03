<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
@extends('master')

@section('title','Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="name" class="col-sm-1 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" required="required" class="form-control" id="nama" name="nama" value="{{ $p->pegawai_nama }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-1 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" required="required" class="form-control" id="jabatan" name="jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-1 col-form-label">Umur</label>
            <div class="col-sm-10">
                <input type="number" required="required" class="form-control" id="umur" name="umur" value="{{ $p->pegawai_umur }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-1 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea required="required" class="form-control" id="umur" name="umur">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>
        <br>
        <div class="text-center">
            <a class="btn btn-primary" href="/pegawai"> Kembali</a>
            <input class="btn btn-success" type="submit" value="Simpan Data">
        </div>
	</form>
	@endforeach

</body>
</html>
    @endsection
