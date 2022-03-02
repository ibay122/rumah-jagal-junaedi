@extends('layouts.app')


@section('content')

<div class="container">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/tamu') }}" title="Kembali ke daftar"> <i class="fas fa-backward ">Kembali</i> </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" style="margin-top: 20px;">
                <strong>Tanggal : </strong>
                {{ $tamu->tanggal }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" style="margin-top: 20px;">
                <strong>Waktu : </strong>
                {{ $tamu->waktu }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" style="margin-top: 20px;">
                <strong>Nama : </strong>
                {{ $tamu->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" style="margin-top: 20px;">
                <strong>Keperluan : </strong>
                {{ $tamu->keperluan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" style="margin-top: 20px;">
                <strong>Dibuat Pada : </strong>
                {{ $tamu->created_at }}
            </div>
        </div>
    </div>
@endsection
