

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Pengantar</title>
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
        left: 80px;
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
                <span>SURAT PENGANTAR</span>
            </header>
            <div class="main">
                <p>Assalamualaikum Warahmatullahi Wabarakaatuh <br> Dengan ini saya selaku pengurus dari :</p>
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
                            <td>: {{ $data->keperluan }}</td>
                        </tr>
                    </tbody>
                </table>
                <p class="ket">Memberitahukan bahwa hari ini yang bersangkutan telah dipersilahkan untuk meminta ijin pulang ke kantor pusat dikarenakan
                    <b>{{ $data->catatan }}</b>
                </p>
                <p class="ket"> Demikian kami sampaikan surat ini untuk dipergunakan sebagaimana mestinya. <br><br>Wassalamualaikum Warahmatullahi Wabarakaatuh
                </p>
                <table border="0" class="tabel2"  cellspacing="0">
    
    
                    <tr>
                        <td style="color:white;">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            localhost:8080/sistemperizin
                        </td>
                    
                        <td>
                            Semarang, {{ date('d F Y') }}
                            {{ $data->siswa->kampus }}
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            ...............................
                    
                        </td>
                    </tr>  
                    </table>
            </div>
        </div>
    </section>
</body>
</html>