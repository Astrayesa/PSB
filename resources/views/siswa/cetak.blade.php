<h1>Detail Pendaftaran</h1>
<img src="{{ public_path('photos/').$siswa->photo }}" height="120" width="240px">
<table class="table">
    <tbody>
    <tr>
        <td>Nama</td>
        <td>{{ $siswa->nama }}</td>
    </tr>
    <tr>
        <td>Nilai Bahas Inggris</td>
        <td>{{ $siswa->nilai_bahasa_inggris }}</td>
    </tr>
    <tr>
        <td>Nilai Bahasa Indonesia</td>
        <td>{{ $siswa->nilai_bahasa_indonesia }}</td>
    </tr>
    <tr>
        <td>Nilai Matematika</td>
        <td>{{ $siswa->nilai_matematika }}</td>
    </tr>
    <tr>
        <td>Asal Sekolah</td>
        <td>{{ $siswa->asal_sekolah }}</td>
    </tr>
    </tbody>
</table>
</div>
