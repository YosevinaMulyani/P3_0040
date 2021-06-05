<!DOCTYPE html>
    <html>
    <head>
<title>1461900040</title>
    </head>
        <body>
    <h3>Edit Pasien</h3>
    <a href="/pasien"> Kembali</a>
<br/>
<br/>
@foreach($pasien as $p)
<form action="/pasien/update" method="post">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
Alamat <textarea required="required" name="alamat">{{ $p->alamat }}</textarea> <br/>
<input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>