@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

    <style>
        .kotak {
            width: 300px;
            height: 400px;
            border:solid black;
            margin-top: 20px;
        }
    </style>

    <h3 class="text-center">Data Pegawai</h3>
    <div class="row">
        <div class="col-4">
            <div class="kotak mx-auto">
            </div>
        </div>

        <div class="col-8 d-flex">
            @foreach ($pegawai as $p)
                <form action="/pegawai/update" method="post" class="form-horizontal my-auto">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />

                    <div class="form-group row">
                        <label for="Name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="{{ $p->pegawai_nama }}"
                                readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jabatan" value="{{ $p->pegawai_jabatan }}"
                                readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Umur" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="umur" value="{{ $p->pegawai_umur }}"
                                readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="alamat" readonly>{{ $p->pegawai_alamat }} </textarea>
                        </div>
                    </div>
                    <br>

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
