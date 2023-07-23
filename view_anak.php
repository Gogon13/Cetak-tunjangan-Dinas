<?php 
include('koneksi.php');
include('top.php');
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Data Anak</h3>
                        
<br><a style="float:right;" href="add_anak.php" class="btn btn-success" style="margin-top: 5px" >Tambah Data Anak</a></br>
</div>
  <form action="view_anak.php" method="get">
  <input class="col-md-6 contact-grid " type="text" name="cari" placeholder="Search for...">
  <input class="search-bar" type="submit" value="Cari">
  </form> 
</div>

  
                        <!-- <div class="panel-body"> -->
                           <!--  <div class="table-responsive"> -->
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Anak</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Status Anak</th>
                                            <th>Dari Istri / Suami ke</th>
                                            <th>Dapat / Tidak dapat tunjangan</th>
                                            <th>Kawin</th>
                                            <th>Bekerja</th>
                                            <th>Masih / Tidak Sekolah / Kuliah</th>
                                            <th>Putusan Pengadilan (Khusus Aa) Tgl. No</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                        <?php 
if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

  <?php 
  if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $sql = mysql_query("select * from tanggungan where nama_anak like '%".$cari."%'");       
  }else{
    $sql = mysql_query("select * from tanggungan");   
  }
  $no = 1;
  while($data = mysql_fetch_array($sql)){
  ?>

                                    <tr>
                                        <td><?php echo $no++; ['no'];?></td>
                                        <td><?php echo $data ['nama_anak']; ?></td>
                                        <td><?php echo $data ['kota']; ?></td>
                                        <td><?php echo $data ['tgl']; ?></td>
                                        <td><?php echo $data ['jekel']; ?></td>
                                        <td><?php echo $data ['status']; ?></td>
                                        <td><?php echo $data ['isk']; ?></td>
                                        <td><?php echo $data ['tunjangan']; ?></td>
                                        <td><?php echo $data ['kawin']; ?></td>
                                        <td><?php echo $data ['bekerja']; ?></td>
                                        <td><?php echo $data ['sekolah/kuliah']; ?></td>
                                        <td><?php echo $data ['pengadilan']; ?></td>
                                        <td>
                                            <a href="edit_anak.php?id=<?php echo $data['id']; ?>" class="btn btn-info">Ubah</a>
                                            <a onclick="return confirm ('Anda yakin akan menghapus data ini?')" href="delete_anak.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>
                                           
                                        </td>
                                       
                                    </tr>

                                    <?php } ?>

                                </body>

                            </table>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
<?php
include('bottom.php');?>