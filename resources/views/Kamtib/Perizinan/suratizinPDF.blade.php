
<!DOCTYPE html>
<html>

<head>
    <title>
     Surat Izin Bepergian
    </title>
    <style>
     @page {
              size: A5;
              margin: 0;
          }
          body {
              font-family: Arial, sans-serif;
              margin: 0;
              padding: 0;x
              background-color: #ffffff;
              color: #000000;
              width: 148mm;
              height: 210mm;
          }
          .container {
              width: 80%;
              margin: 0 auto;
              padding: 20px;
          }
          .header {
              text-align: center;
              font-family: 'Times New Roman', Times, serif;
          }
          .header img {
              width: 100px;
              height: auto;
          }
          .header h1 {
              font-size: 24px;
              margin: 10px 0;
          }
          .header h2 {
              font-size: 18px;
              margin: 5px 0;
          }
          .header h3 {
              font-size: 16px;
              margin: 5px 0;
          }
          .header p {
              font-size: 14px;
              margin: 5px 0;
          }
          .content {
              margin-top: 20px;
              font-family: 'Times New Roman', Times, serif;
              font-size: 16px;
          }
          .content p {
              line-height: 1.6;
          }
          .content .bold {
              font-weight: bold;
          }
          .content .underline {
              text-decoration: underline;
          }
          .content .date {
              margin-top: 20px;
          }
          .content .date p {
              margin: 0;
          }
          .content .centered {
              text-align: center;
          }
          .content .signature {
              margin-top: 40px;
          }
          .content .signature p {
              margin: 0;
          }


    </style>
   </head>

<body>
    {{-- <h1 class="justify-content-center align-items-center  bg-white">Surat Izin BerMalam</h1>

      <h1>{{ $date }}</h1> --}}

         <div class="container">
          <div class="header">
           <img alt="LOGO IKATAN SANTRI SALAFIYAH SYAFI'IYAH (IKSASS)" height="100" src="" width="100"/>
           <h2> PONPES SALAFIYAH SYAFI'IYAH SUKOREJO </h2>
            <h3>SUMBEREJO BANYUPUTIH SITUBONDO</h3>
            <span class="underline">Sekretariat: Kantor KAMTIB Ponpes Salafiyah Syafi'iyah Sukorejo</span>
            <br>
            <br>
            <h3 style="text-underline">SURAT IZIN BEPERGIAN</h3>
            <p >Nomor: 0388_04/ /P.PUJA'24/PR.06-XI/2024</p>
        </div>
        <div class="content">
            <p> Pondok Pesantren Salafiyah Syafi'iyah Sukorejo memberikan Izin bepergian bermalam kepada :
           <div style="text-align:left">
            <table class="table">
                <thead >
                    <tr class="">
                        <td style="text-align: left;">NIS</td>
                        <td style="text-align: left;">:</td>
                        <td style="text-align: left;">{{ $izinSantri['nis'] }}</td>
                    </tr>
                    <tr class="">
                        <td style="text-align: left;">Nama</td>
                        <td style="text-align: left;">:</td>
                        <td style="text-align: left;">{{ $izinSantri['nama'] }}</td>
                    </tr>
                    <tr class="">
                        <td style="text-align: left;">Asrama </td>
                        <td style="text-align: left;">:</td>
                        <td style="text-align: left;">{{ $izinSantri['asrama'] }} </td>
                    </tr>
                    <tr class="">
                        <td style="text-align: left;">Kepala Kamar</td>
                        <td style="text-align: left;">:</td>
                        <td style="text-align: left;">{{ $izinSantri['kepalakamar'] }}</td>
                    </tr>
                    <tr class="">
                        <td style="text-align: left;">Tujuan</td>
                        <td style="text-align: left;">:</td>
                        <td style="text-align: left;">{{ $izinSantri['tujuan'] }}</td>
                    </tr>
                    <tr class="">
                        <td style="text-align: left;">Keperluan</td>
                        <td style="text-align: left;">:</td>
                        <td style="text-align: left;">{{ $izinSantri['kepalakamar'] }}</td>
                    </tr>
                    <tr class="">
                        <td style="text-align: left;">Berangkat</td>
                        <td style="text-align: left;">:</td>
                        <td style="text-align: left;">{{ $izinSantri['berangkat'] }}</td>
                    </tr>
                    <tr class="">
                        <td style="text-align: left;">Kembali</td>
                        <td style="text-align: left;">:</td>
                        <td style="text-align: left;">{{ $izinSantri['kembali'] }}</td>
                    </tr>
                </thead>
            </table>
         </div>

            <p>Demikian Kepada yang berkepentingan agar menjadi maklum<p>
             <p>Sukorejo {{ $date }} </p>
             </div>
        </div>
        </body>
</html>
