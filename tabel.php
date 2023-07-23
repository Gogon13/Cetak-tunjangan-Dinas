<!DOCTYPE html>
<html>
<?php
       include('koneksi.php');
      $id = $_GET['id'];
      // $sql = $koneksi->query("select*from data_pegawai where id='$id'");
      // $data = $sql -> fetch_assoc();       
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

<b>
<BR>II. DATA KELUARGA (YANG MENJADI TANGGUNGAN PEGAWAI)</BR>

<BR>&nbsp&nbsp&nbsp&nbsp A. KAWIN SYAH DENGAN ISTERI/SUAMI</BR></b>
<style type="text/css"
>
 @page { size: landscape; }
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-2oxo{font-family:"Times New Roman", Times, serif !important;;border-color:#000000;text-align:center;vertical-align:top}
.tg .tg-73oq{border-color:#000000;text-align:left;vertical-align:top}
</style>
<table class="tg" style="undefined;table-layout: fixed; width: 1097px">
<colgroup>
<col style="width: 31.003906px">
<col style="width: 189.003906px">
<col style="width: 164.003906px">
<col style="width: 160.003906px">
<col style="width: 98.003906px">
<col style="width: 116.003906px">
<col style="width: 130.003906px">
<col style="width: 73.003906px">
<col style="width: 136.003906px">
</colgroup>
  <tr>
    <th class="tg-2oxo">No</th>
    <th class="tg-2oxo">NAMA ISTERI/SUAMI</th>
    <th class="tg-2oxo">TEMPAT,TANGGAL LAHIR</th>
    <th class="tg-2oxo">NIP/NIK</th>
    <th class="tg-2oxo">DAPAT / TDK DAPAT TUNJANGAN </th>
    <th class="tg-2oxo">PEKERJAAN</th>
    <th class="tg-2oxo">TANGGAL PERKAWINAN</th>
    <th class="tg-2oxo">ISTERI / SUAMI KE</th>
    <th class="tg-2oxo">PENGHASILAN / BULAN</th>
  </tr>
   <?php

                                    $no = 1;

                                    $sql = $koneksi->query("select * from kawinsyah where id_kk='$id'");

                                    while ($data=$sql->fetch_assoc()) {
                                        

                                    ?>
                                     <tr>
                                        <td><?php echo $no++; ['id'];?></td>
                                        <td><?php echo $data ['nmisterisuami']; ?></td>
                                        <td><?php echo $data ['tempat_tgl']; ?></td>
                                        <td><?php echo $data ['nip']; ?></td>
                                        <td><?php echo $data ['tunjangan']; ?></td>
                                        <td><?php echo $data ['pekerjaan']; ?></td>
                                        <td><?php echo tgl_indo($data['tglkw'])?></td>
                                        <td><?php echo $data ['isteri/suami_ke']; ?></td>
                                        <td><?php echo $data ['penghasilan']; ?></td>
                                       
                                    
                                    </tr>

                                    <?php } ?>

</table>
<b>
<BR>&nbsp&nbsp&nbsp&nbsp B. ANAK YANG MENJADI TANGGUNGAN</BR></b>
    <br>Mempunyai anak-anak seperti dalam daftar di bawah ini yaitu:</br>
    Anak kandung ( Ak ), Anak angkat ( Aa ), Anak tiri ( At ) yang masih menjadi tanggungan belum mempunyai pekerjaan sendiri dan masuk
    <br>dalam Daftar Gaji, maupun yang masih menjadi tanggungan tetapi tidak masuk dalam Daftar Gaji.</br>
<br>&nbsp</br>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-i3dw{font-family:"Times New Roman", Times, serif !important;;border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-2oxo{font-family:"Times New Roman", Times, serif !important;;border-color:#000000;text-align:center;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<table class="tg" style="undefined;table-layout: fixed; width: 1098px">
<colgroup>
<col style="width: 31.003906px">
<col style="width: 191.003906px">
<col style="width: 88.003906px">
<col style="width: 110.003906px">
<col style="width: 99.003906px">
<col style="width: 81.003906px">
<col style="width: 76.003906px">
<col style="width: 70.003906px">
<col style="width: 79.003906px">
<col style="width: 76.003906px">
<col style="width: 91.003906px">
<col style="width: 106.003906px">
</colgroup>
  <tr>
    <th class="tg-2oxo" rowspan="2">No</th>
    <th class="tg-2oxo" rowspan="2">NAMA ANAK</th>
    <th class="tg-2oxo" rowspan="2">TEMPAT LAHIR</th>
    <th class="tg-2oxo" rowspan="2">TANGGAL LAHIR</th>
    <th class="tg-2oxo" rowspan="2">JENIS KELAMIN</th>
    <th class="tg-2oxo" rowspan="2">STATUS ANAK</th>
    <th class="tg-2oxo" rowspan="2">DARI ISTRI / SUAMI KE</th>
    <th class="tg-2oxo" rowspan="2">DAPAT / TDK DAPAT TUNJ.</th>
    <th class="tg-2oxo" colspan="2">SUDAH / BELUM</th>
    <th class="tg-i3dw" rowspan="2">MASIH / TDK SEKOLAH / KULIAH</th>
    <th class="tg-i3dw" rowspan="2">PUTUSAN PENGADILAN (KHUSUS Aa) Tgl. No.</th>
  </tr>
  <tr>
    <td class="tg-2oxo">KAWIN</td>
    <td class="tg-i3dw">BEKERJA</td>
  </tr>
 <?php

                                    $no = 1;

                                    $sql1 = $koneksi->query("select * from tanggungan where id_kk='$id'");

                                    while ($data=$sql1->fetch_assoc()) {
                                        

                                    ?>
                                     <tr>
                                        <td><?php echo $no++; ['id'];?></td>
                                        <td><?php echo $data ['nama_anak']; ?></td>
                                        <td><?php echo $data ['kota']; ?></td>
                                        <td><?php echo tgl_indo($data['tgl']) ?></td>
                                        <td><?php echo $data ['jekel']; ?></td>
                                        <td><?php echo $data ['status']; ?></td>
                                        <td><?php echo $data ['isk']; ?></td>
                                        <td><?php echo $data ['tunjangan']; ?></td>
                                        <td><?php echo $data ['kawin']?></td>
                                        <td><?php echo $data ['bekerja']; ?></td>
                                        <td><?php echo $data ['sekolah/kuliah']; ?></td>
                                        <td><?php echo $data ['pengadilan']; ?></td>
                                       
                                    
                                    </tr>

                                    <?php } ?>
</table>

<script>
window.print();

  </script>
  
</body>
</html>