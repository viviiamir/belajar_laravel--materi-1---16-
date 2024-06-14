<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Membuat CRUD Pada Laravel – www.malasngoding.com</title>
</head>
<body>
 
    <h2><a href="{{ url('https://www.malasngoding.com') }}">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>
 
    <a href="{{ url('/pegawai') }}">Kembali</a>
 
    <br/>
    <br/>
 
    <form action="{{ url('/pegawai/store') }}" method="post">
        {{ csrf_field() }}
        Pegawai ID <input type="number" name="pegawai_id"> <br/> 
        Nama <input type="text" name="nama"> <br/>
        Jabatan <input type="text" name="jabatan"> <br/>
        Umur <input type="number" name="umur"> <br/>
        Alamat <textarea name="alamat"></textarea> <br/>
        <input type="submit" value="Simpan Data">
    </form>
 
</body>
</html>
