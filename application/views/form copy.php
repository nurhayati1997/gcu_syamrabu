<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Surat Ketererangan Dokter</title>
  <link rel="icon" href="<?= base_url() ?>assets_admin/img/brand/logo.ico" type="image/png">
  <script src="<?= base_url() ?>assets_admin/vendor/jquery/dist/jquery.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  <style>
    .borderless td, .borderless th {
      border: none!important;
    }
  </style>
</head>
<body>
  <div style="margin: auto;">
    <div class="row">
    <table class="table table-responsive borderless" style="margin-top: 50px; margin-left: auto; margin-right: auto;">
      <tr>
          <td>
            <img src="<?= base_url() ?>assets_admin/Bangkalan.png" alt="" />
          </td>
          <td style="text-align: center; font-weight: bolder;">
            <h4><b>PEMERINTAH KABUPATEN BANGKALAN</b></h4>
            <h4><b>DINAS KESEHATAN</b></h4>
            <h4><b>UOBK RSUD SYARIFAH AMBAMI RATO EBU</b></h4>
            <i style="padding-top: 0px;">Jl. Pemuda Kaffa No.9,Telp.(031) 3091111 Fax.(031) 3094108 kode pos 69112</i>
            <br><i style="padding-top: 0px;">Website www.rsabangkalan.com Email 1: eres.bangkalan@yahoo.co.id</i>
            <br><i style="padding-top: 0px;">Email 2: rsudsyamrabu@bangkalankab.go.id</i>
            <h5><b>BANGKALAN</b></h5>
          </td>
          <td>
          </td>
      </tr>
      <tr>
        <td colspan="5" style="font-weight: bold;">
            <hr/>
        </td>
      </tr>
      <tr>
            <td colspan="3" style="text-align: center;">
                <h5 style="margin-bottom: 0px;"><b>SURAT KETERANGAN DOKTER</b></h5>
                <h4 style="margin-bottom: 0px;"><u><b>SEHAT JASMANI</b></u></h4>
                <h5 style="margin-bottom: 0px;"><b>Nomor : 445.1/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/433.102.1/2022</b></h5>
            </td>
        </tr>
    </table>
    </div>
    <div class="row" style="width: 90vw;margin-left: auto; margin-right: auto;">
      <div class="col">
        <table class="table table-responsive borderless" style="margin-top: 50px; margin-left: auto; margin-right: auto;">
          <tr>
            <td style="width: 200px;">Nama</td>
            <td colspan="2" id="nama">: <?= $pasien['nama'] ?></td>
          </tr>
          <tr>
            <td style="width: 200px;">Tempat Lahir / Tanggal Lahir</td>
            <td colspan="2">: <?= $pasien['tempat_lahir'] ?> , <?= $pasien['ttl_pasien_gcu'] ?> </td>
          </tr>
          <tr>
            <td style="width: 200px;">Alamat</td>
            <td colspan="2">: <?= $pasien['alamat_pasien_gcu'] ?></td>
          </tr>
          <tr>
            <td style="width: 200px;">Kecamatan / Kab</td>
            <td colspan="2">: <?= $pasien['kecamatan_pasien_gcu'] ?> - <?= $pasien['kabupaten_pasien_gcu'] ?></td>
          </tr>
          <tr>
            <td colspan="3"> Dalam Pemeriksaan Kesehatan dinyatakan CUKUP SEHAT / TIDAK CUKUP SEHAT JASMANI untuk :</td>
          </tr>
          <tr>
            <td colspan="3" class="text-center"><b>PEMBERKASAN CPNS</b></td>
          </tr>
          <tr>
            <td style="width: 200px;">Berat Badan :</td>
            <td colspan="2">:  <?= $pasien['bb_pasien_gcu'] ?></td>
          </tr>
          <tr>
            <td style="width: 200px;">Tinggi Badan :</td>
            <td colspan="2">:  <?= $pasien['tb_pasien_gcu'] ?></td>
          </tr>
          <tr>
            <td style="width: 200px;">Pendengaran :</td>
            <td colspan="2">:  <?= $pasien['pendengaran_pasien_gcu'] ?></td>
          </tr>
          <tr>
            <td style="width: 200px;">Warna  :</td>
            <td colspan="2">:&nbsp; (&nbsp;  <?= $pasien['warna_pasien_gcu'] ?>&nbsp; ) </td>
          </tr>
          <tr>
            <td colspan="3"  class="text-right">Bangkalan, Tanggal.............Bulan.............Tahun.............</td>
          </tr>
          <tr>
            <!-- <td class="text-center">Saksi 1</td>
            <td class="text-center">Saksi 2</td>
            <td class="text-center">Saksi Yang Membuat Pernyataan</td> -->
          </tr>
          <tr>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">Dokter Yang Memeriksa</td>
          </tr>
          <tr style="height: 100px;">
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
          </tr>
          <tr>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"><u><b>dr.yulia mayasin</b></u></td>
          </tr>
          <tr>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"><b>NIP.197207082010012<b></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
<script>
  $(document).ready(function() {
    window.print();
  });
</script>
</body>
</html>