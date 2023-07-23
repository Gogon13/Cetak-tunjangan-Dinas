<?php 
include('koneksi.php');
include('top.php');
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3> Data Suami/Istri</h3>
                        
<br><a style="float:right;" href="add_suami.php" class="btn btn-success" style="margin-top: 5px" >Tambah Data Suami/Istri</a></br>
</div>
  <form action="view_suami.php" method="get">
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
                                            <th>Nama Istri / Suami</th>
                                            <th>TTL</th>
                                            <th>NIP/NIK(s)</th>
                                            <th>Dapat/Tidak dapat tunjangan</th>
                                            <th>Pekerjaan</th>
                                            <th>Tanggal Perkawinan</th>
                                            <th>Istri / Suami ke</th>
                                            <th>Penghasilan / Bulan</th>
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
    $sql = mysql_query("select * from kawinsyah where nmisterisuami like '%".$cari."%'");       
  }else{
    $sql = mysql_query("select * from kawinsyah");   
  }
  $no = 1;
  while($data = mysql_fetch_array($sql)){
  ?>

                                   <tr>
                                        <td><?php echo $no++; ['no'];?></td>
                                        <td><?php echo $data ['nmisterisuami']; ?></td>
                                        <td><?php echo $data ['tempat_tgl']; ?></td>
                                        <td><?php echo $data ['nip']; ?></td>
                                        <td><?php echo $data ['tunjangan']; ?></td>
                                        <td><?php echo $data ['pekerjaan']; ?></td>
                                        <td><?php echo $data ['tglkw']; ?></td>
                                        <td><?php echo $data ['isteri/suami_ke']; ?></td>
                                        <td><?php echo $data ['penghasilan']; ?></td>
                                        <td>
                                            <a href="edit_suami.php?id=<?php echo $data['id']; ?>" class="btn btn-info">Ubah</a>
                                            <a onclick="return confirm ('Anda yakin akan menghapus data ini?')" href="delete_suami.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>
                                           
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