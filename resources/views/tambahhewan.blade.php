@extends('master')

@section('title','Hewan')

@section('konten')
<h3>Tambah Hewan</h3>
    <br />

    <form action="/hewan/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="namahewan" class="col-sm-1 col-form-label">Nama Hewan</label>
            <div class="col-sm-10">
                <input type="text" required="required" class="form-control" id="namahewan" name="namahewan">
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlahhewan" class="col-sm-1 col-form-label">Jumlah Hewan</label>
            <div class="col-sm-10">
                <input type="text" required="required" class="form-control" id="jumlahhewan" name="jumlahhewan">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-1 col-form-label">Ketersediaan</label>
            <div class="col-sm-10">
                <input type="text" required="required" class="form-control" id="tersedia" name="tersedia">
            </div>
        </div>
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
	</form>

</body>
</html>
@endsection
