@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>

    <br />
    <br />

    <form action="/pegawai/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="Name" class="col-sm-1 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" required="required" class="form-control" id="nama" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-1 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" required="required" class="form-control" id="jabatan" name="jabatan">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-1 col-form-label">Umur</label>
            <div class="col-sm-10">
                <input type="number" required="required" class="form-control" id="umur" name="umur">
            </div>
        </div>
        <div class="form-group row">
            <label for="akamat" class="col-sm-1 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea required="required" class="form-control" id="umur" name="umur"></textarea>
            </div>
        </div>
        <br>
        <div class="text-center">
            <a class="btn btn-primary" href="/pegawai"> Kembali</a>
            <input class="btn btn-success" type="submit" value="Simpan Data">
        </div>
	</form>



</body>
</html>
@endsection
