<html>
<head><title>Form Pendaftaran Mahasiswa Baru</title>
</head>
<body>
<form action="insert.php" method="POST">
<table border='1' width='35%' cellpadding='2'  cellspacing='2' align='center' bgcolor="#FFFFF">
<caption><h2>Formulir Pendaftaran Mahasiswa Baru</h2></caption>
<tr><td><b>Nama</b></td><td><input type="text" name="nama" size="30" maxlength="50"/></td></tr>
<tr><td><b>Jenis Kelamin</b></td><td><input type="radio" name="jenis_kelamin" value="pria"/><label for="jenis_kelamin">Pria</label>
<input type="radio" name="jenis_kelamin" value="wanita"/><label for="jenis_kelamin">Wanita</label>
</td></tr>
<tr><td><b>Status</b></td><td>
<select name="status">
<option value="Pilih Status Anda">Pilih Status Anda</option>
<option value="menikah">Menikah</option>
<option value="single">Single</option>
</select>
</td></tr>
<tr><td><b>Lulusan Sekolah<b/></td><td><input type="text" name="sekolah" size="30" maxlength="50"/></td></tr>
<tr><td><b>Tahun Ajaran</b></td><td><select name="tahun_ajaran">
<option>Pilih Tahun Ajaran</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
</select></td></tr>
<tr><td><b>Pekerjaan</b></td><td><input type="text" name="pekerjaan" size="30" maxlength="50"/></td></tr>
<tr><td><b>Alamat</b></td><td><textarea name="alamat" cols="30" rows="4"></textarea></td></tr>
<tr><td><b>Kelurahan</b></td><td><input type="text" name="kelurahan" size="30" maxlength="50"/></td></tr>
<tr><td><b>Kecamatan</b></td><td><input type="text" name="kecamatan" size="30" maxlength="50"/></td></tr>
<tr><td><b>Kota</b></td><td><input type="text" name="kota" size="30" maxlength="50"/></td></tr>
<tr><td><b>Provinsi<b></td><td>
<select name="provinsi">
<option value="Pilih Provinsi Anda">Pilih Provinsi Anda</option>
<option value="Bali">Bali</option>
<option value="Bangka Belitung">Bangka Belitung</option>
<option value="Banten">Banten</option>
<option value="Bengkulu">Bengkulu</option>

<option value="Gorontalo">Gorontalo</option>
<option value="Irian Jaya Barat">Irian Jaya Barat</option>
<option value="Jabotabekdecipsawcib">Jabotabekdecipsawcib</option>
<option value="Jambi">Jambi</option>
<option value="Jawa Barat">Jawa Barat</option>
<option value="Jawa Tengah">Jawa Tengah</option>
<option value="Jawa Timur">Jawa Timur</option>
<option value="Kalimantan Barat">Kalimantan Barat</option>
<option value="Kalimantan Selatan">Kalimantan Selatan</option>

<option value="Kalimantan Tengah">Kalimantan Tengah</option>
<option value="Kalimantan Timur">Kalimantan Timur</option>
<option value="Kepulauan Riau">Kepulauan Riau</option>
<option value="Lampung">Lampung</option>
<option value="Lokasi Lain-lain">Lokasi Lain-lain</option>
<option value="Maluku">Maluku</option>
<option value="Maluku Utara">Maluku Utara</option>
<option value="Nangroe Aceh Darussalam">Nangroe Aceh Darussalam</option>
<option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>

<option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
<option value="Papua">Papua</option>
<option value="Riau">Riau</option>
<option value="Sulawesi Barat">Sulawesi Barat</option>
<option value="Sulawesi Selatan">Sulawesi Selatan</option>
<option value="Sulawesi Tengah">Sulawesi Tengah</option>
<option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
<option value="Sulawesi Utara">Sulawesi Utara</option>
<option value="Sumatera Barat">Sumatera Barat</option>

<option value="Sumatera Selatan">Sumatera Selatan</option>
<option value="Sumatera Utara">Sumatera Utara</option>
<option value="Yogyakarta">Yogyakarta</option>
</select></td></tr>
<tr><td><b>No Telepon</b></td><td><input type="text" name="telepon" size="30" maxlength="50"/></td></tr>
<tr><td></td><td><input type="submit" name="kirim" value="Daftar!"/>
  <label>
  <input type="reset" name="Reset" id="button" value="Batal">
  </label></td></tr>
</table>
<p align="center"><a href="lihatdata.php"><strong>Lihat Data </strong></a></p>
</form>
</body>
</html>
