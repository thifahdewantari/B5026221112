@extends('master')

@section('title','Keranjang Belanja')

@section('konten')
<h3>Keranjang Belanja</h3>

<a href="/keranjangbelanja/beli" class="btn btn-success"> Beli </a>
<br />

<table class="table table-striped table-hover">
    <tr>
        <th>Kode Pembelian</th>
        <th>Kode Barang</th>
        <th>Jumlah Pembelian</th>
        <th>Harga Per Item</th>
        <th>Total</th>
        <th>Action</th>
    </tr>
    @foreach ($keranjangbelanja as $b)
        <tr>
            <td>{{ $b->ID }}</td>
            <td>{{ $b->KodeBarang }}</td>
            <td>{{ $b->Jumlah }}</td>
            <td>{{ number_format($b->Harga, 0, ',', '.') }}</td>
            <td>{{ number_format($b->Harga * $b->Jumlah, 0, ',', '.') }}</td>
            <td>
                <a href="/keranjangbelanja/batal/{{ $b->ID }}" class="btn btn-danger">Batal</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection
