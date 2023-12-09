@extends('master')

@section('title','Data Hewan')

@section('konten')
	<h3>Edit Hewan</h3>
	<br/>

	@foreach($hewan as $h)
	<form action="/hewan/update" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <input type="hidden" name="kodehewan" value="{{ $h->kodehewan }}">

        <div class="form-group row">
            <label for="namahewan" class="col-sm-1 col-form-label">Nama Hewan</label>
            <div class="col-sm-10">
                <input type="text" required="required" class="form-control" id="namahewan" name="namahewan" value="{{ $h->namahewan }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlahhewan" class="col-sm-1 col-form-label">Jumlah Hewan</label>
            <div class="col-sm-10">
                <input type="text" required="required" class="form-control" id="jumlahhewan" name="jumlahhewan" value="{{ $h->jumlahhewan }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-1 col-form-label">Ketersediaan</label>
            <div class="col-sm-10">
                <input type="text" required="required" class="form-control" id="tersedia" placeholder="Y/N" name="tersedia" value="{{ $h->tersedia }}">
            </div>
        </div>
        <br>
        <div class="text-center">
            <a class="btn btn-primary" href="/hewan"> Kembali</a>
            <input class="btn btn-success" type="submit" value="Simpan Data">
        </div>
	</form>
	@endforeach

</body>
</html>
    @endsection
