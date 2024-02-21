@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <div class="w-50 my-3 p-1 rounded shadow-lg">
        <div class="d-flex justify-content-between align-items-center">
            <a href="#"
                class="ms-3 mt-3 mb-4 d-flex justify-content-start align-items-center mb-2 text-decoration-none">
                <img src="https://dummyimage.com/640x1:1/" alt="profile-picture" class="img-fluid rounded-circle"
                    width="50">
                <span class="ms-2 fs-5 text-dark">{{ $data->user->nama }}</span>
            </a>
            <p class="text-muted fs-6 me-3">{{ date('d-m-Y', strtotime($data->created_at)) }}</p>
        </div>
        <img class="img-fluid mx-auto d-block" src="{{ asset('storage/' . $data->lokasi_file) }}" alt="{{ $data->judul_foto }}">
        <div id="post-detail" class="my-2 ms-3">
            <span class="fw-bold fs-5 d-block">{{ $data->judul_foto }}</span>
            <span class="text-muted fs-6">{{ $data->deskripsi_foto }}</span>
        </div>
    </div>
</div>

@endsection
