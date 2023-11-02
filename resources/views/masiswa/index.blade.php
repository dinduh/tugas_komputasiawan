@extends('app')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Product</h1>
            <a href="{{ route('masiswa.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Approach -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">All categories</h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Fakultas</th>
                                    <th>Universitas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($masiswas as $masiswa)
                                <tr>
                                    <td>{{ $masiswa->nim }}</td>
                                    <td>{{ $masiswa->nama }}</td>
                                    <td>{{ $masiswa->jurusan }}</td>
                                    <td>{{ $masiswa->fakultas }}</td>
                                    <td>{{ $masiswa->univ }}</td>
                                    <td>
                                        <a href="{{ route('masiswa.edit', $masiswa->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('masiswa.destroy', $masiswa->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
