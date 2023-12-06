@extends('master')

@section('title','Keranjang Belanja')

@section('konten')
<h3>Keranjang Belanja</h3>
    <br />

    <form action="/keranjangbelanja/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="KodeBarang" class="col-sm-1 col-form-label">Kode Barang</label>
            <div class="col-sm-10">
                <input type="number" required="required" class="form-control" id="KodeBarang" name="KodeBarang">
            </div>
        </div>
        <div class="form-group row">
            <label for="Jumlah" class="col-sm-1 col-form-label">Jumlah Pembelian</label>
            <div class="col-sm-10">
                <input type="number" required="required" class="form-control" id="Jumlah" name="Jumlah">
            </div>
        </div>
        <div class="form-group row">
            <label for="Harga" class="col-sm-1 col-form-label">Harga Per Item</label>
            <div class="col-sm-10">
                <input type="number" required="required" class="form-control" id="Harga" name="Harga">
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
