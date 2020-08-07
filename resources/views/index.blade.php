@extends('master')

@section('content')
@if(session('sukses'))
    <div class="alert alert-success" role="alert" id="alert">
        {{ session('sukses') }}
        <button type="button" class="close" data-dismiss="alert">x</button>
    </div>
@endif
@if(session('hapus'))
    <div class="alert alert-danger" role="alert" id="alert">
        {{ session('hapus') }}
        <button type="button" class="close" data-dismiss="alert">x</button>
    </div>
@endif
@forelse($pertanyaan as $data)
    <a href="/pertanyaan/{{ $data->id }}" style="color: black">
        <div class="card">
            <div class="card-header">
                <p class="card-title"><strong>{{ $data->judul }}</strong></p>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <small><strong>{{ $data->tanggal_dibuat }}</strong></small>
                <hr>
                <p>{{ $data->isi }}</p>
            </div>
            <!-- /.card-body -->
        </div>
    </a>
@empty
    <div class="card">
        <div class="card-header">
            <p class="card-title"><strong>Tidak ada pertanyaan</strong></p>
        </div>
    </div>
@endforelse
@endsection

@push('script')
    <script>
        $("#alert").fadeTo(5000, 500).slideUp(500, function () {
            $("#alert").slideUp(500);
        });
    </script>
@endpush
