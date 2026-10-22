@extends('layouts.app')
@section('title', 'Dashboard')
@section('heading', 'Dashboard Mahasiswa')
@section('content')
<div class="mb-4"><h3 class="fw-bold mb-1">Halo, Administrator! 👋</h3><p class="muted mb-0">Kelola data mahasiswa dengan mudah dan terorganisir.</p></div>
<div class="row g-3 mb-4">
    <div class="col-12 col-md-6"><div class="stat-card d-flex justify-content-between align-items-center"><div><div class="muted small mb-2">Total Mahasiswa</div><div class="display-6 fw-bold">{{ $totalMahasiswa }}</div><div class="small text-success mt-1"><i class="bi bi-people-fill me-1"></i>Data terdaftar</div></div><div class="stat-icon"><i class="bi bi-people-fill"></i></div></div></div>
    <div class="col-12 col-md-6"><div class="stat-card d-flex justify-content-between align-items-center"><div><div class="muted small mb-2">Jumlah Jurusan</div><div class="display-6 fw-bold">{{ $totalJurusan }}</div><div class="small text-primary mt-1"><i class="bi bi-book-fill me-1"></i>Jurusan berbeda</div></div><div class="stat-icon" style="background:#dcfce7;color:#15803d"><i class="bi bi-journal-bookmark-fill"></i></div></div></div>
</div>
<div class="panel">
    <div class="d-flex flex-column flex-md-row justify-content-between gap-3 mb-4">
        <div><h5 class="fw-bold mb-1">Data Mahasiswa</h5><div class="muted small">Daftar seluruh mahasiswa yang terdaftar.</div></div>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary px-3"><i class="bi bi-plus-lg me-2"></i>Tambah Mahasiswa</a>
    </div>
    <form method="GET" action="{{ route('mahasiswa.index') }}" class="row g-2 mb-3">
        <div class="col-12 col-md-5"><div class="input-group"><span class="input-group-text bg-white border-end-0"><i class="bi bi-search muted"></i></span><input class="form-control border-start-0" type="search" name="q" value="{{ $keyword }}" placeholder="Cari nama, NIM, jurusan..."></div></div>
        <div class="col-auto"><button class="btn btn-outline-primary">Cari</button></div>
        @if($keyword)<div class="col-auto"><a class="btn btn-light" href="{{ route('mahasiswa.index') }}">Reset</a></div>@endif
    </form>
    <div class="table-responsive">
        <table class="table align-middle">
            <thead><tr><th>Mahasiswa</th><th>NIM</th><th>Jurusan</th><th>Email</th><th>Jenis Kelamin</th><th class="text-end">Aksi</th></tr></thead>
            <tbody>
            @forelse($mahasiswa as $item)
                <tr>
                    <td><span class="avatar">{{ strtoupper(substr($item->nama, 0, 1)) }}</span><span class="fw-semibold">{{ $item->nama }}</span></td>
                    <td><span class="badge text-bg-light">{{ $item->nim }}</span></td>
                    <td>{{ $item->jurusan }}</td><td>{{ $item->email }}</td>
                    <td><span class="badge rounded-pill {{ $item->jenis_kelamin === 'Laki-laki' ? 'text-bg-primary' : 'text-bg-danger' }}">{{ $item->jenis_kelamin }}</span></td>
                    <td class="text-end text-nowrap">
                        <a href="{{ route('mahasiswa.edit', $item) }}" class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('mahasiswa.destroy', $item) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data {{ $item->nama }}?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger" title="Hapus"><i class="bi bi-trash3"></i></button></form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" class="text-center py-5"><div class="stat-icon mx-auto mb-3"><i class="bi bi-inbox"></i></div><h6 class="fw-bold">Belum ada data mahasiswa</h6><p class="muted small mb-3">Tambahkan data mahasiswa pertama untuk memulai.</p><a href="{{ route('mahasiswa.create') }}" class="btn btn-primary btn-sm">Tambah Data</a></td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mt-3"><small class="muted">Menampilkan {{ $mahasiswa->firstItem() ?? 0 }}–{{ $mahasiswa->lastItem() ?? 0 }} dari {{ $mahasiswa->total() }} data</small>{{ $mahasiswa->links('pagination::bootstrap-5') }}</div>
</div>
@endsection
