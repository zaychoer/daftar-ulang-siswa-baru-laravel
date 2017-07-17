<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SMA Negeri 3 Tangerang') }}</title>

    <!-- Styles -->
<style type="text/css">
body,td,th {
  font-size: 11px;
}

table.fixed { table-layout:fixed; }
table.fixed td { overflow: hidden; }

hr {
  display: block;
    height: 1px;
    border: 0;
    border-top: 3px double #000;
}


</style>
</head>
<body>
<table width="641" border="0" align="center">
  <tr>
    <td width="73" rowspan="4" align="center" valign="middle"><img src="{{ asset('images/logo_banten.png') }}" alt="Logo Banten" width="69" height="67" align="middle" /></td>
    <td colspan="3" align="center" valign="middle"><strong>PEMERINTAH PROVINSI BANTEN</strong></td>
    <td colspan="2"><strong>BUKTI DAFTAR ULANG</strong></td>
    <td style="border:solid 2px #000" colspan="2" align="center" valign="middle"><strong>Paraf Panitia</strong></td>
  </tr>
  <tr>
    <td colspan="3" align="center" valign="middle"><strong>DINAS PENDIDIKAN DAN KEBUDAYAAN</strong></td>
    <td colspan="2"><strong>PESERTA DIDIK BARU</strong></td>
    <td colspan="2" rowspan="4" align="center" valign="middle" style="border:solid 2px #000">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center" valign="middle"><strong>UPT SMAN 3 TANGERANG</strong></td>
    <td colspan="2"><strong>TAHUN PELAJARAN 2017/2018</strong></td>
  </tr>
  <tr>
    <td height="15" colspan="3" align="center" valign="middle"><strong>Jl. KH. Hasyim Ashari No.6 Karang Tengah Kota Tangerang </strong></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="6"><hr /></td>
  </tr>
  <tr>
    <td colspan="2">Kode Map</td>
    <td width="9" align="center" valign="middle">:</td>
    <td colspan="2">{{ $murid->kode_map }}</td>
    <td style="border:solid 2px #000" colspan="3" rowspan="8" align="center" valign="middle">Foto 3x4</td>
  </tr>
  <tr>
    <td colspan="2">No. Peserta UN</td>
    <td align="center" valign="middle">:</td>
    <td colspan="2">{{ $murid->no_un_smp }}</td>
  </tr>
  <tr>
    <td colspan="2">Nama Lengkap</td>
    <td align="center" valign="middle">:</td>
    <td colspan="2">{{ $murid->nama_siswa }}</td>
  </tr>
  <tr>
    <td colspan="2">Jenis Kelamin</td>
    <td align="center" valign="middle">:</td>
    <td colspan="2">{{ $murid->jenis_kelamin }}</td>
  </tr>
  <tr>
    <td colspan="2">Tempat, Tanggal Lahir</td>
    <td align="center" valign="middle">:</td>
    <td colspan="2">{{ $murid->tempat_lahir }}, {{ $murid->tgl_lahir->format('d F Y') }} </td>
  </tr>
  <tr>
    <td>Nama Orangtua</td>
    <td width="44" align="right">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="right">Ayah</td>
    <td align="center" valign="middle">:</td>
    <td colspan="2">{{ $murid->nama_ayah }}</td>
  </tr>
  <tr>
    <td colspan="2" align="right">Ibu</td>
    <td align="center" valign="middle">:</td>
    <td colspan="2">{{ $murid->nama_ibu }}</td>
  </tr>
  <tr>
    <td colspan="2">No. HP/Telepon</td>
    <td align="center" valign="middle">:</td>
    <td colspan="5">{{ $murid->no_hp }}</td>
  </tr>
  <tr>
    <td colspan="2">Asal Sekolah</td>
    <td align="center" valign="middle">:</td>
    <td colspan="5">{{ $murid->sekolah_asal }}</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
    <td colspan="4">Tangerang, </td>
  </tr>
  <tr>
    <td colspan="3">Panitia,</td>
    <td width="251">Orangtua/Wali</td>
    <td colspan="4">Peserta Didik Baru</td>
  </tr>
  <tr>
    <td height="63" colspan="3" align="left" valign="bottom">_____________________ </td>
    <td align="left" valign="bottom"> _____________________ </td>
    <td colspan="4" align="left" valign="bottom"> {{ $murid->nama_siswa }} </td>
  </tr>
  <tr>
    <td colspan="4"><strong>Lembar 1 - Untuk Sekolah</strong></td>
    <td width="116">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="61">&nbsp;</td>
    <td width="11">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="2"><strong>Keterangan</strong></td>
    <td valign="top"><strong>1.</strong></td>
    <td colspan="5"><strong>Kegiatan MPLS (Masa Pengenalan Lingkungan Sekolah) Tanggal 17 s.d. 19 Juli 2017, memakai seragam putih abu-abu.</strong></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td align="center"><strong>2.</strong></td>
    <td colspan="5"><strong>Bukti Dafttar Ulang PPDB 2017/2018 digunakan sebagai kartu peserta kegiatan MPLS.</strong></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td align="center" valign="middle"><strong>3.</strong></td>
    <td colspan="5"><strong>Hadir tepat waktu di Sekolah pukul 06.15 WIB</strong></td>
  </tr>
  <tr>
    <td height="16" colspan="8" align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="16" colspan="8" align="center" valign="middle">
        Tanggal dan Waktu Pencetakan Berkas : {{ 
          \Carbon\Carbon::now()->format('l, d F Y H:i') 
          }}
    </td>
  </tr>
  <tr>
    <td height="16" colspan="8" align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
  <tr>
    <td height="16" colspan="8" align="center" valign="middle">--------------------------------------------------------------- Potong disini ---------------------------------------------------------------</td>
  </tr>
  <tr>
    <td height="16" colspan="8" align="center" valign="middle">&nbsp;</td>
  </tr>
</table>

<table width="641" border="0" align="center">
  <tr>
    <td width="73" rowspan="4" align="center" valign="middle"><img src="{{ asset('images/logo_banten.png') }}" alt="Logo Banten" width="69" height="67" align="middle" /></td>
    <td colspan="3" align="center" valign="middle"><strong>PEMERINTAH PROVINSI BANTEN</strong></td>
    <td colspan="2"><strong>BUKTI DAFTAR ULANG</strong></td>
    <td style="border:solid 2px #000" colspan="2" align="center" valign="middle"><strong>Paraf Panitia</strong></td>
  </tr>
  <tr>
    <td colspan="3" align="center" valign="middle"><strong>DINAS PENDIDIKAN DAN KEBUDAYAAN</strong></td>
    <td colspan="2"><strong>PESERTA DIDIK BARU</strong></td>
    <td colspan="2" rowspan="4" align="center" valign="middle" style="border:solid 2px #000">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center" valign="middle"><strong>UPT SMAN 3 TANGERANG</strong></td>
    <td colspan="2"><strong>TAHUN PELAJARAN 2017/2018</strong></td>
  </tr>
  <tr>
    <td height="15" colspan="3" align="center" valign="middle"><strong>Jl. KH. Hasyim Ashari No.6 Karang Tengah Kota Tangerang </strong></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="6"><hr /></td>
  </tr>
  <tr>
    <td colspan="2">Kode Map</td>
    <td width="9" align="center" valign="middle">:</td>
    <td colspan="2">{{ $murid->kode_map }}</td>
    <td style="border:solid 2px #000" colspan="3" rowspan="8" align="center" valign="middle">Foto 3x4</td>
  </tr>
  <tr>
    <td colspan="2">No. Peserta UN</td>
    <td align="center" valign="middle">:</td>
    <td colspan="2">{{ $murid->no_un_smp }}</td>
  </tr>
  <tr>
    <td colspan="2">Nama Lengkap</td>
    <td align="center" valign="middle">:</td>
    <td colspan="2">{{ $murid->nama_siswa }}</td>
  </tr>
  <tr>
    <td colspan="2">Jenis Kelamin</td>
    <td align="center" valign="middle">:</td>
    <td colspan="2">{{ $murid->jenis_kelamin }}</td>
  </tr>
  <tr>
    <td colspan="2">Tempat, Tanggal Lahir</td>
    <td align="center" valign="middle">:</td>
    <td colspan="2">{{ $murid->tempat_lahir }}, {{ $murid->tgl_lahir->format('d F Y') }}</td>
  </tr>
  <tr>
    <td>Nama Orangtua</td>
    <td width="44" align="right">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="right">Ayah</td>
    <td align="center" valign="middle">:</td>
    <td colspan="2">{{ $murid->nama_ayah }}</td>
  </tr>
  <tr>
    <td colspan="2" align="right">Ibu</td>
    <td align="center" valign="middle">:</td>
    <td colspan="2">{{ $murid->nama_ibu }}</td>
  </tr>
  <tr>
    <td colspan="2">No. HP/Telepon</td>
    <td align="center" valign="middle">:</td>
    <td colspan="5">{{ $murid->no_hp }}</td>
  </tr>
  <tr>
    <td colspan="2">Asal Sekolah</td>
    <td align="center" valign="middle">:</td>
    <td colspan="5">{{ $murid->sekolah_asal }}</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
    <td colspan="4">Tangerang, </td>
  </tr>
  <tr>
    <td colspan="3">Panitia,</td>
    <td width="251">Orangtua/Wali</td>
    <td colspan="4">Peserta Didik Baru</td>
  </tr>
  <tr>
    <td height="63" colspan="3" align="left" valign="bottom">_____________________ </td>
    <td align="left" valign="bottom"> _____________________ </td>
    <td colspan="4" align="left" valign="bottom"> {{ $murid->nama_siswa }} </td>
  </tr>
  <tr>
    <td colspan="4"><strong>Lembar 1 - Untuk Sekolah</strong></td>
    <td width="116">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="61">&nbsp;</td>
    <td width="11">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="2"><strong>Keterangan</strong></td>
    <td valign="top"><strong>1.</strong></td>
    <td colspan="5"><strong>Kegiatan MPLS (Masa Pengenalan Lingkungan Sekolah) Tanggal 17 s.d. 19 Juli 2017, memakai seragam putih abu-abu.</strong></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td align="center"><strong>2.</strong></td>
    <td colspan="5"><strong>Bukti Dafttar Ulang PPDB 2017/2018 digunakan sebagai kartu peserta kegiatan MPLS.</strong></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td align="center" valign="middle"><strong>3.</strong></td>
    <td colspan="5"><strong>Hadir tepat waktu di Sekolah pukul 06.15 WIB</strong></td>
  </tr>
  <tr>
    <td height="16" colspan="8" align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="16" colspan="8" align="center" valign="middle">
        Tanggal dan Waktu Pencetakan Berkas : {{ \Carbon\Carbon::now()->format('l, d F Y H:i') }}
    </td>
  </tr>
  <tr>
    <td height="16" colspan="8" align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
</table>
</body>
</html>