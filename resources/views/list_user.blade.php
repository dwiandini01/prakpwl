@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold text-primary">
            <i class="bi bi-people-fill"></i> Daftar User
        </h2>
        <a href="{{ route('user.create') }}" class="btn btn-success shadow-sm">
            <i class="bi bi-person-plus"></i> Tambah User
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body">
            <table class="table table-hover table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $u)
                        <tr>
                            <td>{{ $u->id }}</td>
                            <td class="fw-semibold text-primary">{{ $u->nama }}</td>
                            <td>
                                <span class="badge bg-info text-dark px-3 py-2">{{ $u->nim }}</span>
                            </td>
                            <td>{{ $u->kelas->nama_kelas ?? '-' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-muted">
                                <i class="bi bi-info-circle"></i> Belum ada data user
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

{{-- CSS tambahan agar lebih cantik --}}
<style>
    .table-hover tbody tr:hover {
        background-color: rgba(13, 110, 253, 0.08);
        transition: all 0.2s ease-in-out;
    }
</style>
@endsection
