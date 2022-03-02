@extends('layouts.app')

@section('content')
    <div align="center" class="container">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Tamu</h2>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tamu.update', $tamu) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal:</strong>
                    <input type="date" name="tanggal" class="form-control" placeholder="Tanggal">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
            <div class="form-group">
                    <strong>Waktu:</strong>
                    <input type="time" name="waktu" class="form-control" placeholder="00:00">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
               <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
               <div class="form-group">
                    <strong>Keperluan:</strong>
                    <input type="text" name="keperluan" class="form-control" placeholder="Keperluan atau kepentingan">
                </div>
            </div>
        </div>

        <div class="container text-right" style="margin-top: 12px;">
            <div align="right" class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </div>
    </form>
@endsection
