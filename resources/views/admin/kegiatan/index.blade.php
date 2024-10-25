@extends('layouts.admin')

@section('title', 'Daftar Kegiatan')

@section('content')
<div class="container">
    <h2>Daftar Kegiatan</h2>
    <a href="{{ route('admin.kegiatan.create') }}" class="btn btn-primary mb-3">Tambah Kegiatan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Waktu</th>
                <th>PIC</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kegiatan as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->waktu }}</td>
                    <td>{{ $item->pic }}</td>
                    <td>
                        <a href="{{ route('admin.kegiatan.show', $item->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('admin.kegiatan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.kegiatan.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
