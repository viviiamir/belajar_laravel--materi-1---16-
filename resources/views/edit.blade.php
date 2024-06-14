<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Membuat CRUD Pada Laravel – www.malasngoding.com</title>
</head>
<body>
 
    <h2><a href="{{ url('https://www.malasngoding.com') }}">www.malasngoding.com</a></h2>
    <h3>Edit Pegawai</h3>
 
    <a href="{{ url('/pegawai') }}">Kembali</a>
 
    <br/>
    <br/>
 
    @if(isset($pegawai) && is_object($pegawai))
        <form action="{{ url('/pegawai/update') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $pegawai->pegawai_id }}"> <br/>
            Nama <input type="text" required="required" name="nama" value="{{ $pegawai->pegawai_nama }}"> <br/>
            Jabatan <input type="text" required="required" name="jabatan" value="{{ $pegawai->pegawai_jabatan }}"> <br/>
            Umur <input type="number" required="required" name="umur" value="{{ $pegawai->pegawai_umur }}"> <br/>
            Alamat <textarea required="required" name="alamat">{{ $pegawai->pegawai_alamat }}</textarea> <br/>
            <input type="submit" value="Simpan Data">
        </form>
    @else
        <p>Data pegawai tidak ditemukan.</p>
    @endif
 
</body>
</html>
