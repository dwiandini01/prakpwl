<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
            <th>Waktu Daftar</th>
        </tr>
    </thead>
    <tbody>
        @forelse($users as $index => $user)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->nim ?? '-' }}</td>
                <td>{{ $user->kelas->nama ?? 'Belum dipilih' }}</td>
                <td>{{ $user->created_at->format('d M Y H:i') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center text-muted">Tidak ada data user.</td>
            </tr>
        @endforelse
    </tbody>
</table>
