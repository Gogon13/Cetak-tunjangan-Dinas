<?php 
include('koneksi.php');
include('top.php');
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3> Data Pegawai</h3>
                        
<br><a style="float:right;" href="add_pegawai.php" class="btn btn-success" style="margin-top: 5px" >Tambah Data Pegawai</a></br>
</div>
  <form action="view_pegawai.php" method="get">
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
                                            <th class="center">Nama Lengkap</th>
                                            <th>N.I.P</th>
                                            <th>Pangkat / Golongan. Tmt</th>
                                            <th>Tempat / Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            
                                            <th>Alamat Lengkap</th>
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
    $sql = mysql_query("select * from data_pegawai where nama like '%".$cari."%'");       
  }else{
    $sql = mysql_query("select * from data_pegawai");   
  }
  $no = 1;
  while($data = mysql_fetch_array($sql)){
  ?>

                                    <tr>
                                        <td><?php echo $no++; ['no'];?></td></a>
                                        <td><?php echo $data ['nama']; ?></td></a>
                                        <td><?php echo $data ['nip']; ?></td></a>
                                        <td><?php echo $data ['pangkat']; ?><?php echo $data ['pangkat2']; ?> </td></a>
                                        <td><?php echo $data ['tpt_tgl']; ?></td></a>
                                        <td><?php echo $data ['jekel']; ?></td></a>
                                       
                                        <td><?php echo $data ['alamat']; ?></td>
                                      </a>
                                        <td>
                                            <a href="edit_pegawai.php?id=<?php echo $data['id']; ?>" class="btn btn-info">Ubah</a>
                                            <a onclick="return confirm ('Anda yakin akan menghapus data ini?')" href="delete_pegawai.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>
                                           
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