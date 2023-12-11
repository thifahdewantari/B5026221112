@extends('master')

@section('title','Karyawan')

@section('konten')
<h3>Tambah Data Karyawan</h3>
    <br />

    <form action="/easkaryawan/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="kodepegawai" class="col-sm-1 col-form-label">Kode Karyawan</label>
            <div class="col-sm-10">
                <input type="text" required="required" class="form-control" id="kodepegawai" name="kodepegawai">
            </div>
        </div>
        <div class="form-group row">
            <label for="namalengkap" class="col-sm-1 col-form-label">Nama Karyawan</label>
            <div class="col-sm-10">
                <input type="text" required="required" class="form-control" id="namalengkap" name="namalengkap">
            </div>
        </div>
        <div class="form-group row">
            <label for="divisi" class="col-sm-1 col-form-label">Divisi</label>
            <div class="col-sm-10">
                <input type="text" required="required" class="form-control" id="divisi" name="divisi">
            </div>
        </div>
        <div class="form-group row">
            <label for="departemen" class="col-sm-1 col-form-label">Departemen</label>
            <div class="col-sm-10">
                <input type="text" required="required" class="form-control" id="departemen" name="departemen">
            </div>
        </div>
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Simpan Data Karyawan</button>
        </div>
	</form>

</body>
</html>
@endsection
