<x-layout>
    <x-slot name="page_name">Halaman Pasien / Detail</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-success">
                <th>No</th>
                <th>Id</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Tanggal lahir</th>
                <th>Tempat lahir</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Kelurahan</th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $pasien->id }}</td>
                <td>{{ $pasien->kode }}</td>
                <td>{{ $pasien->nama }}</td>
                <td>{{ $pasien->tgl_lahir }}</td>
                <td>{{ $pasien->tmp_lahir }}</td>
                <td>{{ $pasien->gender }}</td>
                <td>{{ $pasien->email }}</td>
                <td>{{ $pasien->alamat }}</td>
                <td>{{ $pasien->kel_nama }}</td>
                <td>{{ $kelurahan->created_at }}</td>
                <td>{{ $kelurahan->updated_at }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>