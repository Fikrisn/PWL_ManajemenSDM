@extends('layouts.admin')

@section('title', 'Tambah Kegiatan')

@section('content')
<div class="container">
    <h2>Tambah Kegiatan</h2>
    <form id="kegiatanForm">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Waktu</label>
            <input type="date" name="waktu" class="form-control" required>
        </div>
        <div class="form-group">
            <label>PIC</label>
            <input type="text" name="pic" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <!-- Placeholder untuk pesan sukses atau error -->
    <div id="alert" style="display: none;" class="mt-3"></div>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#kegiatanForm').on('submit', function(event) {
            event.preventDefault(); // Mencegah form submit secara normal

            $.ajax({
                url: "{{ route('admin.kegiatan.store') }}",
                method: "POST",
                data: $(this).serialize(), // Mengirim data form
                success: function(response) {
                    $('#alert').html('<div class="alert alert-success">' + response.message + '</div>').fadeIn();
                    $('#kegiatanForm')[0].reset(); // Reset form
                    setTimeout(() => $('#alert').fadeOut(), 3000); // Sembunyikan pesan setelah 3 detik
                },
                error: function(xhr) {
                    let errors = xhr.responseJSON.errors;
                    let errorHtml = '<div class="alert alert-danger">';
                    $.each(errors, function(key, value) {
                        errorHtml += '<p>' + value[0] + '</p>';
                    });
                    errorHtml += '</div>';
                    $('#alert').html(errorHtml).fadeIn();
                }
            });
        });
    });
</script>
@endsection
