@extends('layouts.app')
@section('title', 'Tambah Mahasiswa')
@section('heading', 'Tambah Mahasiswa')
@section('content')
<div class="mb-4"><a href="{{ route('mahasiswa.index') }}" class="text-decoration-none muted small"><i class="bi bi-arrow-left me-1"></i>Kembali ke data mahasiswa</a><h3 class="fw-bold mt-2 mb-1">Tambah Mahasiswa</h3><p class="muted mb-0">Isi formulir berikut untuk menambahkan data baru.</p></div>
<div class="panel">
    <form action="{{ route('mahasiswa.store') }}" method="POST">@csrf
        @include('mahasiswa.partials.form', ['mahasiswa' => null, 'buttonText' => 'Simpan Mahasiswa'])
    </form>
</div>
@endsection
