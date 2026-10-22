<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Akademika') | Akademika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root { --navy:#172554; --blue:#2563eb; --bg:#f4f7fb; }
        body { background:var(--bg); color:#1e293b; font-family:system-ui,-apple-system,"Segoe UI",sans-serif; }
        .sidebar { width:245px; min-height:100vh; background:var(--navy); color:#dbeafe; }
        .brand { font-size:1.25rem; font-weight:800; letter-spacing:.2px; color:#fff; }
        .brand-icon { display:inline-grid; place-items:center; width:38px; height:38px; background:#3b82f6; border-radius:12px; margin-right:9px; }
        .nav-link { color:#cbd5e1; border-radius:10px; padding:12px 14px; margin:4px 0; }
        .nav-link:hover,.nav-link.active { background:#263b70; color:#fff; }
        .main { min-width:0; flex:1; }
        .topbar,.panel,.stat-card { background:#fff; border:1px solid #e7edf5; border-radius:16px; }
        .topbar { padding:18px 24px; }
        .panel { padding:24px; box-shadow:0 4px 20px rgba(15,23,42,.025); }
        .stat-card { padding:22px; height:100%; }
        .stat-icon { width:46px;height:46px;display:grid;place-items:center;border-radius:14px;background:#dbeafe;color:#1d4ed8;font-size:1.35rem; }
        .muted { color:#64748b; }
        .table thead th { color:#64748b; font-size:.78rem; text-transform:uppercase; letter-spacing:.04em; background:#f8fafc; border-bottom:0; padding:14px; }
        .table tbody td { padding:15px 14px; vertical-align:middle; }
        .avatar { display:inline-grid; place-items:center; width:38px;height:38px;border-radius:12px;background:#e0e7ff;color:#3730a3;font-weight:700;margin-right:10px; }
        .btn-primary { background:#2563eb;border-color:#2563eb; }
        .form-control,.form-select { padding:11px 13px;border-color:#dbe3ef;border-radius:10px; }
        @media(max-width:767px){.sidebar{width:68px;padding:14px 8px!important}.brand-text,.nav-label,.sidebar-note{display:none}.nav-link{text-align:center;padding:12px 4px}.nav-link i{font-size:1.2rem}.topbar{padding:15px}.panel{padding:16px}.main-content{padding:16px!important}}
    </style>
</head>
<body>
<div class="d-flex">
    <aside class="sidebar p-3 d-flex flex-column">
        <div class="mb-5 px-2 d-flex align-items-center">
            <span class="brand-icon"><i class="bi bi-mortarboard-fill text-white"></i></span>
            <span class="brand brand-text">Akademika</span>
        </div>
        <div class="text-uppercase small opacity-50 px-3 mb-2 nav-label">Menu utama</div>
        <a class="nav-link {{ request()->routeIs('mahasiswa.index') ? 'active' : '' }}" href="{{ route('mahasiswa.index') }}"><i class="bi bi-grid-1x2-fill me-2"></i><span class="nav-label">Dashboard</span></a>
        <a class="nav-link {{ request()->routeIs('mahasiswa.create') ? 'active' : '' }}" href="{{ route('mahasiswa.create') }}"><i class="bi bi-person-plus-fill me-2"></i><span class="nav-label">Tambah Mahasiswa</span></a>
        <div class="mt-auto sidebar-note small opacity-50 px-3">CRUD Mahasiswa<br>Laravel + Bootstrap</div>
    </aside>
    <main class="main">
        <header class="topbar m-3 d-flex align-items-center justify-content-between">
            <div><div class="small muted">Sistem Informasi Akademik</div><strong>@yield('heading', 'Dashboard Mahasiswa')</strong></div>
            <div class="d-flex align-items-center gap-2"><div class="rounded-circle bg-primary-subtle text-primary p-2"><i class="bi bi-person-fill"></i></div><span class="small fw-semibold d-none d-sm-inline">Administrator</span></div>
        </header>
        <section class="main-content p-3 pt-0">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show rounded-3" role="alert"><i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger rounded-3"><strong>Periksa kembali input:</strong><ul class="mb-0 mt-2">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
            @endif
            @yield('content')
            <footer class="text-center muted small py-4">© {{ date('Y') }} Akademika · Aplikasi CRUD Mahasiswa</footer>
        </section>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
