<?php
session_start();
include("koneksi.php");
include('top.php');
$query = "SELECT * FROM `data_pegawai`order by nama asc";
$result1 = mysqli_query($koneksi, $query);
?>
<div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Data Anak
                        </div>
                         <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div>
                                            <label>Anak Dari</label>
                                            <select class="form-control" name="id_kk" >
            <?php while($row1 = mysqli_fetch_array($result1)):;?>
            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
            <?php endwhile;?>
        </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Anak</label>
                                            <input class="form-control" name="nama_anak" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="kota" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" name="tgl" type="date" placeholder="" />
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jekel" value="<?php echo $tampil['jekel']; ?>">
                                                <option value=""></option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Anak</label>
                                            <select class="form-control" name="status" value="<?php echo $tampil['status']; ?>">
                                                <option value=""></option>
                                                <option value="Ak">Anak Kandung (Ak)</option>
                                                <option value="Aa">Anak Angkat (Aa)</option>
                                                <option value="At">Anak Tiri (At)</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Dari Istri / Suami Ke</label>
                                            <select class="form-control" name="isk" >
                                                <option value="" ></option>
                                                <option value="1 (Satu)" > 1 (Satu)</option>
                                                <option value="2 (Dua)" > 2 (Dua)</option>
                                                <option value="3 (Tiga)" > 3 (Tiga)</option>
                                                <option value="4 (Empat)" > 4 (Empat)</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Dapat / Tdk Dapat Tunjangan</label>
                                            
                                            <select class="form-control" name="tunjangan" >
                                                <option value=""></option>
                                                <option value="Dapat" > Dapat</option>
                                                <option value="Tidak Dapat" >Tidak Dapat</option>
                                               
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kawin</label>
                                            
                                            <select class="form-control" name="kawin" >
                                                <option value=""></option>
                                                <option value="Kawin" > Kawin</option>
                                                <option value="Belum Kawin" >Belum Kawin</option>
                                               
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Bekerja</label>
                                            <select class="form-control" name="bekerja" >
                                                <option value=""></option>
                                                <option value="Bekerja" >Bekerja</option>
                                                <option value="Tidak Bekerja" >Tidak Bekerja</option>
                                               
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label> Masih / Tdk/ Sekolah / Kuliah </label>
                                            <select class="form-control" name="sekolah/kuliah" >
                                                <option value=""></option>
                                                <option value="Tidak Sekolah" >Tidak Sekolah</option>
                                                <option value="Masih Sekolah" >Masih Sekolah</option>
                                                <option value="Masih Kuliah" >Masih Kuliah</option>
                                                <option value="Sudah Lulus" >Sudah Lulus</option>
                                               
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Putusan Pengadilan (Khusus Aa) Tgl. no</label>
                                            <input class="form-control" name="pengadilan" placeholder="" />
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
                    $sql = $koneksi -> query ("INSERT INTO `tanggungan` (`id`,`id_kk`,`nama_anak`, `kota`, `tgl`, `jekel`, `status`, `isk`, `tunjangan`, `kawin`, `bekerja`, `sekolah/kuliah`, `pengadilan`) VALUES (NULL,'$id_kk','$nama_anak', '$kota', '$tgl', '$jekel', '$status', '$isk', '$tunjangan', '$kawin', '$bekerja', '$sekolah', '$pengadilan')");
                    if ($sql) {
                        ?>

                        <script type="text/javascript">

                            alert ("Data berhasil disimpan!");
                            window.location.href="view_anak.php"

                        </script>
                        <?php
                        
                    }
                    
                }

                ?>

<?php
include('bottom.php');






