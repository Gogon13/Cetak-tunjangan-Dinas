<?php
include("koneksi.php");
include('top.php');

$id = $_GET ['id'];
$sql = $koneksi->query("select*from tanggungan where id='$id'");
$tampil = $sql -> fetch_assoc();

$query = "SELECT * FROM `data_pegawai`order by nama asc";
$result1 = mysqli_query($koneksi, $query);

$sql1 = $koneksi->query("select a.*,b.* from data_pegawai a, tanggungan b where b.id='$id'and a.id = b.id_kk");
$tampil1 = $sql1 -> fetch_assoc();

?>
 <div class="panel panel-default">
                        <div class="panel-heading">
                            Ubah Data Anak 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div class="form-group">
                                <label>Anak Dari </label>
                                            <select class="form-control" name="id_kk" >
            <option value="<?php echo $tampil1[id_kk];?>"><?php echo $tampil1[nama];?></option>
            <?php while($row1 = mysqli_fetch_array($result1)):;?>
            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
            <?php endwhile;?>
        </select> 
                                        <div class="form-group">
                                            <label>Nama Anak</label>
                                            <input class="form-control" name="nama_anak" value="<?php echo $tampil['nama_anak']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="kota" value="<?php echo $tampil['kota']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" name="tgl" type="date" value="<?php echo $tampil['tgl']; ?>" />
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jekel" value="<?php echo $tampil['jekel']; ?>">
                                                <option value="<?php echo $tampil['jekel']; ?>"><?php echo $tampil['jekel']; ?></option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Anak</label>
                                            <select class="form-control" name="status" value="<?php echo $tampil['status']; ?>">
                                                <option value="<?php echo $tampil['status']; ?>"><?php echo $tampil['status']; ?></option>
                                                <option value="Ak">Anak Kandung (Ak)</option>
                                                <option value="Aa">Anak Angkat (Aa)</option>
                                                <option value="At">Anak Tiri (At)</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Dari Istri / Suami Ke</label>
                                            <select class="form-control" name="isk" value="<?php echo $tampil['isk']; ?>">
                                                <option value="<?php echo $tampil['isk']; ?>" ><?php echo $tampil['isk']; ?></option>
                                                <option value="1 (Satu)" > 1 (Satu)</option>
                                                <option value="2 (Dua)" > 2 (Dua)</option>
                                                <option value="3 (Tiga)" > 3 (Tiga)</option>
                                                <option value="4 (Empat)" > 4 (Empat)</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Dapat / Tdk Dapat Tunjangan</label>
                                            <select class="form-control" name="tunjangan" >
                                                <option value="<?php echo $tampil['tunjangan']; ?>" ><?php echo $tampil['tunjangan']; ?></option>
                                                <option value="Dapat" > Dapat</option>
                                                <option value="Tidak Dapat" >Tidak Dapat</option>
                                               
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kawin</label>
                                            <select class="form-control" name="kawin" >
                                                <option value="<?php echo $tampil['kawin']; ?>" ><?php echo $tampil['kawin']; ?></option>
                                                <option value="Kawin" > Kawin</option>
                                                <option value="Belum Kawin" >Belum Kawin</option>
                                               
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Bekerja</label>
                                            <select class="form-control" name="bekerja" >
                                                <option value="<?php echo $tampil['bekerja']; ?>" ><?php echo $tampil['bekerja']; ?></option>
                                                <option value="Bekerja" >Bekerja</option>
                                                <option value="Tidak Bekerja" >Tidak Bekerja</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label> Masih / Tdk/ Sekolah / Kuliah </label>
                                            <select class="form-control" name="sekolah/kuliah" >
                                                <option value="<?php echo $tampil['sekolah/kuliah']; ?>" ><?php echo $tampil['sekolah/kuliah']; ?></option>
                                                <option value="Tidak Sekolah" >Tidak Sekolah</option>
                                                <option value="Masih Sekolah" >Masih Sekolah</option>
                                                <option value="Masih Kuliah" >Masih Kuliah</option>
                                                <option value="Sudah Lulus" >Sudah Lulus</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Putusan Pengadilan (Khusus Aa) Tgl. no</label>
                                            <input class="form-control" name="pengadilan" value="<?php echo $tampil['pengadilan']; ?>" />
                                        </div>
                                        <div>
                                            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
              
  
  <?php
        
                $id_kk = $_POST ['id_kk'];
                $nama_anak = $_POST ['nama_anak'];
                $kota = $_POST ['kota'];
                $tgl = $_POST ['tgl'];
                $jekel = $_POST ['jekel'];
                $status = $_POST ['status'];
                $isk = $_POST ['isk'];
                $tunjangan = $_POST ['tunjangan'];
                $kawin = $_POST ['kawin'];
                $bekerja = $_POST ['bekerja'];
                $sekolah = $_POST ['sekolah/kuliah'];
                $pengadilan = $_POST ['pengadilan'];
                $simpan = $_POST ['simpan'];

                if ($simpan) {
                    $sql = $koneksi -> query ("UPDATE `tanggungan` SET  `id_kk` = '$id_kk',`nama_anak` = '$nama_anak', `kota` = '$kota', `tgl` = '$tgl', `jekel` = '$jekel', `status` = '$status', `isk` = '$isk', `tunjangan` = '$tunjangan', `kawin` = '$kawin', `bekerja` = '$bekerja', `sekolah/kuliah` = '$sekolah', `pengadilan` = '$pengadilan' WHERE `tanggungan`.`id` = $id");
                     // $sql = $koneksi -> query ("UPDATE `sekum`.`tanggungan` SET  `nama_anak` = '$nama_anak', `kota` = '$kota', `tgl` = '$tgl', `jekel` = '$jekel', `status` = '$status', `isk` = '$isk', `tunjangan` = '$tunjangan', `kawin` = '$kawin', `bekerja` = '$bekerja', `sekolah/kuliah` = '$sekolah', `pengadilan` = '$pengadilan' WHERE `tanggungan`.`id` = $id");
                    if ($sql) {
                        ?>

                        <script type="text/javascript">

                            alert ("Data berhasil disimpan!");
                            window.location.href="edit_anak.php?id=<?php echo $tampil['id']; ?>"

                        </script>
                        <?php
                        
                    }
                    
                }


                ?>
                
<?php include('bottom.php'); ?>







