@extends('app')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- Content Row -->
        <form action="{{ route('masiswa.update', $masiswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" name="nim" class="form-control" value="{{ $masiswa->nim }}" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $masiswa->nama }}" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" value="{{ $masiswa->jurusan }}" required>
            </div>
            <div class="form-group">
                <label for="fakultas">Fakultas</label>
                <input type="text" name="fakultas" class="form-control" value="{{ $masiswa->fakultas }}" required>
            </div>
            <div class="form-group">
                <label for="univ">Universitas</label>
                <input type="text" name="univ" class="form-control" value="{{ $masiswa->univ }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

@stop
