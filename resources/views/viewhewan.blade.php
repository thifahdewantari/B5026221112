@extends('master')

@section('title', 'Hewan')

@section('konten')

    <style>
        .kotak {
            width: 300px;
            height: 400px;
            border:solid black;
            margin-top: 20px;
        }
    </style>

    <h3 class="text-center">Detail Hewan</h3>
    <div class="row">
        <div class="col-4">
            <div class="kotak mx-auto">
            </div>
        </div>

        <div class="col-8 d-flex">
            @foreach ($hewan as $h)
                <form action="/hewan/view" method="post" class="form-horizontal my-auto">
                    {{ csrf_field() }}
                    <input type="hidden" name="kodehewan" value="{{ $h->kodehewan }}"> <br />

                    <div class="form-group row">
                        <label for="kodehewan" class="col-sm-2 col-form-label">Kode Hewan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="namahewan" value="{{ $h->kodehewan }}"
                                readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="namahewan" class="col-sm-2 col-form-label">Nama Hewan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="namahewan" value="{{ $h->namahewan }}"
                                readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jumlahhewan" class="col-sm-2 col-form-label">Jumlah Hewan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jumlahhewan" value="{{ $h->jumlahhewan }}"
                                readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tersedia" class="col-sm-2 col-form-label">Ketersediaan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tersedia" value="{{ $h->tersedia }}"
                                readonly>
                        </div>
                    </div>

                    <div class="text-center">
                        <input class="btn btn-primary" type="submit" value="OK">
                    </div>
                </form>
            @endforeach
        </div>
    </div>

    <br />
    <br />

@endsection
