@extends('layouts.app')
@section('title', 'Edit Mahasiswa')
@section('heading', 'Edit Mahasiswa')
@section('content')
<div class="mb-4"><a href="{{ route('mahasiswa.index') }}" class="text-decoration-none muted small"><i class="bi bi-arrow-left me-1"></i>Kembali ke data mahasiswa</a><h3 class="fw-bold mt-2 mb-1">Edit Mahasiswa</h3><p class="muted mb-0">Perbarui informasi mahasiswa di bawah ini.</p></div>
<div class="panel">
    <form action="{{ route('mahasiswa.update', $mahasiswa) }}" method="POST">@csrf @method('PUT')
        @include('mahasiswa.partials.form', ['mahasiswa' => $mahasiswa, 'buttonText' => 'Simpan Perubahan'])
    </form>
</div>
@endsection
