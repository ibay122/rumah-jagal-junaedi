@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2 style="font-weight: bold;">Daftar Pengunjung Rumah Jagal Pak Junaedi</h2>
            </div>

            <div align="right">
                <a class="btn btn-success" href="{{ url('/tamu/create') }}" title="Create a tamu"> <i class="fas fa-plus-circle">Tambah Data Pengunjung</i></a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="container alert alert-success text-center" style="margin-top: 12px; margin-bottom: 12px;">
            <p>Data berhasil ditambahkan!</p>
        </div>
    @endif

    <div class="container"  style="margin-top: 12px;">
        <table id="myTable" class="table table-bordered table-responsive-lg text-center">
            <thead>
                <tr> 
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Nama</th>
                    <th>Keperluan</th>
                    <th>Dibuat Pada</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($tamus as $tamu)
                <tr>
                    <td>{{ $tamu->id }}</td>
                    <td>{{ $tamu->tanggal }}</td>
                    <td>{{ $tamu->waktu }}</td>
                    <td>{{ $tamu->nama }}</td>
                    <td>{{ $tamu->keperluan }}</td>
                    <td>{{ $tamu->created_at }}</td>        
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {!! $tamus->links() !!}

@endsection

