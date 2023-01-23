

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Izin</title>
</head>
<style>
    img {
background-size: 97%; 
width: 384px;
/* display: block; */
position: absolute;
top: -40px;
left: -40px;
    }
    .body {
font-family: Times New Roman;
    }


    .container header img {
        width: 80%;
        opacity: .3;
        position: absolute;
        top: 30%;
        left: 10%;
    }

    .container header span {
        position: absolute;
        top: 44px;
        left: 100px;
    }

    .container .main {
        top: 70px;
        font-size: 13px;
        position: absolute;
        z-index: 9999;
    }
    .tabel2 {
    font-size: 11px;
    text-align:center;
}
</style>

<body class="body">
    <div class="header">
        <img src="{{asset('kopaska/izinReg.jpg')}}" alt="">
    </div>
    <section class="container">
        <div class="body">
            <header>
                <img src="{{asset('images/logo ponpes.png')}}" alt="">
                <span>SURAT IZIN</span>
            </header>
            <div class="main">
                <table class="table" >
                    <tbody>
                        <tr>
                            <td>Nama </td>
                            <td>: {{ $data->siswa->nama }}</td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>: {{ $data->siswa->kelas }} {{ $data->siswa->jenjang }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: {{ $data->siswa->desa }},{{ $data->siswa->kecamatan }},{{ $data->siswa->state }},{{ $data->siswa->country }}</td>
                        </tr>
                        <tr>
                            <td>Keperluan</td>
                            <td>: {{ $data->keperluan }}-{{ $data->catatan }}</td>
                        </tr>
                        <tr>
                            <td>Nama Wali</td>
                            <td>: {{ $data->siswa->namaayah }}</td>
                        </tr>
                        <tr>
                            <td>Telepon</td>
                            <td>:  {{ $data->siswa->nohp }}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table border="1" class="tabel2"  cellspacing="0">
                    <tr>
                        <td width="200%">Tanggal  Izin <br>
                            {{ date('d F Y', strtotime($data->created_at)) }}
                        </td>
                        <td >Tanggal Kembali <br>{{ date('d F Y', strtotime($data->tgl_kembali)) }}</td>
                        <td>Pengurus Kampus</td>
                    </tr>
                    
                    <tr>
                        <td >
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            ( Kampus 1 )
                        </td>
                        <td>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            ( {{ $data->siswa->kampus }} )
                        </td>
                        <td>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </td>

                    </tr>  
                    </table>
                    <label>Catatan :</label>
                    <ul>
                        <li>Kartu Izin Dikeluarkan Resmi dari Pihak Pesantren.</li>
                        <li>Santri Diperbolehkan Izin Jika Dalam Kondisi Mendesak (Sesuai Peraturan Pesantren).</li>
                        <li>Durasi Santri Izin Sesuai Dari Pihak Pesantren,Bila Melampui Batas akan dikenai <b>Takziran</b>.</li>
                        <li>Sebagai Bukti Resmi Izin Surat Ini tertanda Tangani dan Stempel Pada Kolom Diatas.</li>
                        <li>Telah Izin dan Kembali Wajib Lapor Kantor Kampus.</li>
                    </ul>
            </div>
        </div>
    </section>
</body>
</html>

{{-- 
'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="'.base_url('assets/img/logo ponpes.png') .'">
    <title>' . $title . '</title>
</head>
<body>
<style>
body {
    background : url('.base_url('assets/img/back.jpg') .');
    background-size :100px;
    font-family: Times New Roman;
}

.tabel1 {
    display:block;
    font-size:11px;
    top:10px;
}
.tabel2 {
    font-size: 11px;
    text-align:center;
}

ul {
    font-size:10px;
}
</style>
<br>
<br>
<br>
<table class="tabel1">
<tr>
<td>Nama Santri</td>
<td>: ' . $santri['nama'] . '</td>
</tr>
<tr>
<td>Kelas</td>
<td>: ' .  $santri['kelas'] . '</td>
</tr>
<tr>
<td>Alamat</td>
<td>: ' . $santri['alamat'] . '</td>
</tr>
<tr>
<td>Keperluan</td>
<td>: ' . $santri['izin'] . '-' . $santri['keterangan'] . '</td>
</tr>
<tr>
<td>Nama Wali</td>
<td>: ' . $santri['wali'] . '</td>
</tr>
<tr>
<td>No. Telp</td>
<td>: ' . $santri['no_telepon'] . '</td>
</tr>
</table>
<br>

<table border="1" class="tabel2"  cellspacing="0">
<tr>
    <td>Tanggal  Izin <br>' . date('d F Y', $santri['tgl_ijin']) . '</td>
    <td >Tanggal Kembali <br>' . date('d F Y', strtotime($santri['tgl_kembali'])) . '</td>
    <td >TTD Pengurus <br> Kampus</td>
</tr>

<tr>
    <td>
        <br>
        <br>
        <br>
        <br>
        <br>
        ( TTD Pengurus )
    </td>
    <td>
        <br>
        <br>
        <br>
        <br>
        <br>
        ( TTD Pengurus )
    </td>
    <td>
        <br>
        <br>
        <br>
        <br>
        <br>
        ( TTD Pengurus )

    </td>
</tr>  
</table>
<label>Catatan :</label>
<ul>
<li>Kartu Izin Dikeluarkan Resmi dari Pihak Pesantren.</li>
<li>Santri Diperbolehkan Izin Jika Dalam Kondisi Mendesak (Sesuai Peraturan Pesantren).</li>
<li>Durasi Santri Izin Sesuai Dari Pihak Pesantren,Bila Melampui Batas akan dikenai <b>Takziran</b>.</li>
<li>Sebagai Bukti Resmi Izin Surat Ini tertanda Tangani dan Stempel Pada Kolom Diatas.</li>
<li>Telah Izin dan Kembali Wajib Lapor Kantor Kampus.</li>
</ul>

';

