<!DOCTYPE html>

<html>
<?php
      include('koneksi.php');
      $id = $_GET['id'];
      $sql = $koneksi->query("select*from data_pegawai where id='$id'");
      $data = $sql -> fetch_assoc();       
      $k = strtoupper($data['nama']);
      ?>
      <?php
function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);
  
  // variabel pecahkan 0 = tanggal
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tahun

  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

  ?>
<body>

	<center>
		<b><P>SURAT KETERANGAN
		<br>UNTUK MENDAPATKAN PEMBAYARAN TUNJANGAN KELUARGA</p></br>
	</center>

	<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:0px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:0px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-0uih{font-weight:bold;font-family:"Times New Roman", Times, serif !important;;border-color:#ffffff;text-align:left;vertical-align:top}
.tg .tg-3x0u{font-weight:bold;font-family:"Times New Roman", Times, serif !important;;border-color:#ffffff;text-align:left}
</style>
<table class="tg" style="undefined;table-layout: fixed; width: 608px">
<colgroup>
<col style="width: 325.003906px">
<col style="width: 20.003906px">
<col style="width: 263.003906px">
</colgroup>
  <tr>
    <th class="tg-3x0u">NAMA INSTANSI/UNIT KERJA</th>
    <th class="tg-0uih">:</th>
    <th class="tg-0uih">DINAS PEMBERDAYAAN</th>
  </tr>
  <tr>
    <td class="tg-3x0u"></td>
    <td class="tg-0uih"></td>
    <td class="tg-0uih">MASYARAKAT DAN DESA</td>
  </tr>
  <tr>
    <td class="tg-3x0u">ALAMAT LENGKAP INSTANSI /UNIT KERJA</td>
    <td class="tg-0uih">:</td>
    <td class="tg-0uih">KOMPLEK PERKANTORAN MEJOBO</td>
  </tr>
  <tr>
    <td class="tg-3x0u"></td>
    <td class="tg-0uih"></td>
    <td class="tg-0uih">JL. MEJOBO NO. 45</td>
  </tr>
  <tr>
    <td class="tg-3x0u">INTANSI INDUK</td>
    <td class="tg-0uih">:</td>
    <td class="tg-0uih">PEMERINTAH KABUPATEN KUDUS</td>
  </tr>
  <tr>
    <td class="tg-3x0u">BEND.GAJI / PEMB. PRMBUAT DAFTAR GAJI</td>
    <td class="tg-0uih">:</td>
    <td class="tg-0uih">SUTIYONO, S.H.</td>
  </tr>
</table>

<BR>I.DATA PEGAWAI</BR></b>
<style type="text/css">

.hg  {border-collapse:collapse;border-spacing:0;}
.hg td{font-family:Arial, sans-serif;font-size:14px;padding:5px 15px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.hg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:5px 151px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.hg .hg-0lax{text-align:left;vertical-align:top}
.hg .hg-fia5{font-family:"Times New Roman", Times, serif !important;;text-align:left;vertical-align:top}
</style>
<table class="hg">
  <tr>
    <td class="hg-0lax">1</td>
    <td class="hg-0lax">Nama Lengkap</td>
    <td class="hg-0lax">:</td>
    <td class="hg-0lax"><?php echo $data['nama'] ?></td>
  </tr>
  <tr>
    <td class="hg-0lax">2</td>
    <td class="hg-0lax">N.I.P</td>
    <td class="hg-0lax">:</td>
    <td class="hg-0lax"><?php echo $data['nip'] ?></td>
  </tr>
  <tr>
    <td class="hg-0lax">3</td>
    <td class="hg-0lax">Pangkat/Golongan.Tmt</td>
    <td class="hg-0lax">:</td>
    <td class="hg-0lax"><?php echo $data['pangkat'] ?><?php echo $data['pangkat2'] ?></td>
  </tr>
  <tr>
    <td class="hg-0lax">4</td>
    <td class="hg-0lax">Tempat/Tangal Lahir</td>
    <td class="hg-0lax">:</td>
    <td class="hg-0lax"><?php echo $data['tpt_tgl'] ?></td>
  </tr>
  <tr>
    <td class="hg-0lax">5</td>
    <td class="hg-0lax">Jenis Kelamin</td>
    <td class="hg-0lax">:</td>
    <td class="hg-0lax"><?php echo $data['jekel'] ?></td>
  </tr>
  <tr>
    <td class="hg-0lax">6</td>
    <td class="hg-0lax">Status Perkawinan</td>
    <td class="hg-0lax">:</td>
    <td class="hg-0lax"><?php echo $data['statuskw'] ?></td>
  </tr>
  <tr>
    <td class="hg-0lax">7</td>
    <td class="hg-0lax">Agama/Kebangsaan</td>
    <td class="hg-0lax">:</td>
    <td class="hg-0lax"><?php echo $data['agama'] ?></td>
  </tr>
  <tr>
    <td class="hg-0lax">8</td>
    <td class="hg-0lax">Alamat Lengkap</td>
    <td class="hg-0lax">:</td>
    <td class="hg-0lax"><?php echo $data['alamat'] ?></td>
  </tr>
  <tr>
    <td class="hg-0lax">9</td>
    <td class="hg-0lax">T.M.T Capeg</td>
    <td class="hg-0lax">:</td>
    <td class="hg-0lax"><?php echo tgl_indo($data['tmtcapeg'])?></td>
  </tr>
  <tr>
    <td class="hg-0lax">10</td>
    <td class="hg-0lax">Status Kepegawaian</td>
    <td class="hg-0lax">:</td>
    <td class="hg-0lax"><?php echo $data['statuspegawai'] ?></td>
  </tr>
  <tr>
    <td class="hg-0lax">11</td>
    <td class="hg-0lax">Digaji Menurut(PP/SK)</td>
    <td class="hg-0lax">:</td>
    <td class="hg-0lax"><?php echo $data['gajim'] ?></td>
  </tr>
  <tr>
    <td class="hg-0lax">12</td>
    <td class="hg-0lax">Besarnya Penghasilan</td>
    <td class="hg-0lax">:</td>
    <td class="hg-0lax"><?php echo $data['penghasilan'] ?></td>
  </tr>
  <tr>
    <td class="hg-0lax">13</td>
    <td class="hg-0lax">Jabatan</td>
    <td class="hg-0lax">:</td>
    <td class="hg-0lax"><?php echo $data['jabatan'] ?></td>
  </tr>
  <tr>
    <td class="hg-0lax">14</td>
    <td class="hg-0lax">Jumlah Keluarga Tertanggung&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td class="hg-0lax">:</td>
    <td class="hg-0lax"><?php echo $data['jkt'] ?></td>
  </tr>
  <tr>
    <td class="hg-0lax">15</td>
    <td class="hg-0lax">S.K Terakhir yang dimiliki</td>
    <td class="hg-0lax">:</td>
    <td class="hg-0lax"><?php echo $data['skakhir'] ?></td>
  </tr>
  <tr>
    <td class="hg-0lax">16</td>
    <td class="hg-0lax">Masa Kerja Golongan</td>
    <td class="hg-0lax">:</td>
    <td class="hg-0lax"><?php echo $data['mkg'] ?></td>
  </tr>
  <tr>
    <td class="hg-0lax"></td>
    <td class="hg-0lax">Masa Kerja Keseluruhan</td>
    <td class="hg-0lax">:</td>
    <td class="hg-0lax"><?php echo $data['mkk'] ?></td>
  </tr>
</table>

    <br>Keterangan ini saya buat dengan sesungguhnya dan apabila keterangan ini tidak benar (palsu), saya bersedia</br>
    dituntut di muka pengadilan berdasarkan Undang-undang yang berlaku, dan bersedia mengembalikan semua 
    <br>uang tunjangan yang telah saya terima yang seharusnya bukan hak saya</br>
<br>&nbsp</br>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:0px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:0px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-zv4m{border-color:#ffffff;text-align:left;vertical-align:top}
.tg .tg-8jgo{border-color:#ffffff;text-align:center;vertical-align:top}
.tg .tg-relt{font-weight:bold;text-decoration:underline;border-color:#ffffff;text-align:center;vertical-align:top}
.tg .tg-ofj5{border-color:#ffffff;text-align:right;vertical-align:top}
</style>
<table class="tg" style="undefined;table-layout: fixed; width: 740px">
<colgroup>
<col style="width: 124.003906px">
<col style="width: 228.003906px">
<col style="width: 139.003906px">
<col style="width: 249.003906px">
</colgroup>
  <tr>
    <th class="tg-8jgo" colspan="2">Mengetahui/Mengesahkan</th>
    <th class="tg-8jgo" colspan="2"><?php echo 'Kudus,'. tgl_indo(date('Y-m-d'))?></th>
  </tr>
  <tr>
    <td class="tg-8jgo" colspan="2">Plt. Kepala Dinas Pemberdayaan</td>
    <td class="tg-8jgo" colspan="2">Pegawai yang bersangkutan</td>
  </tr>
  <tr>
    <td class="tg-8jgo" colspan="2">Masyarakat Dan Desa</td>
    <td class="tg-8jgo" colspan="2"></td>
  </tr>
  <tr>
    <td class="tg-8jgo" colspan="2">&nbsp;</td>
    <td class="tg-8jgo" colspan="2"></td>
  </tr>
  <tr>
    <td class="tg-8jgo" colspan="2">&nbsp;</td>
    <td class="tg-8jgo" colspan="2"></td>
  </tr>
  <tr>
    <td class="tg-8jgo" colspan="2">&nbsp;</td>
    <td class="tg-8jgo" colspan="2"></td>
  </tr>
  <tr>
    <td class="tg-relt" colspan="2">ARIEF BUDI SISWANTO, S.T.</td>
    <td class="tg-relt" colspan="2"><?php echo $k ?></td>
  </tr>
  <tr>
    <td class="tg-8jgo" colspan="2">Pembina</td>
    <td class="tg-8jgo" colspan="2"><?php echo $data['pangkat'] ?></td>
  </tr>
  <tr>
    <td class="tg-ofj5">NIP.</td>
    <td class="tg-zv4m">19722071998031002</td>
    <td class="tg-ofj5">NIP.</td>
    <td class="tg-zv4m"><?php echo $data['nip'] ?></td>
  </tr>
</table>

	<script>
window.print();
 //@page { size: landscape; }
	</script>
	
</body>
</html>