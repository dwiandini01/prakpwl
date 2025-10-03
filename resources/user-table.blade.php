<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->nim ?? '-' }}</td>
            <td>{{ $user->kelas->nama_kelas ?? '-' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
