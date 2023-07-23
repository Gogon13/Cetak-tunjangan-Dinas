<?php
session_start();
include("koneksi.php");
include('top.php');
$query = "SELECT * FROM `data_pegawai`order by nama asc";
$result1 = mysqli_query($koneksi, $query);
?>
<div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Suami/Istri
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div>
                                            <label>Isteri/Suami Dari</label>
                                            <select class="form-control" name="id_kk" >
                                                <option value="" ></option>
            <?php while($row1 = mysqli_fetch_array($result1)):;?>
            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
            <?php endwhile;?>
        </select>
                                        </div>
                                        <div>
                                            <label>Nama Isteri / Suami</label>
                                            <input class="form-control" name="nmisterisuami">
                                        </div>
                                        <div>
                                            <label>TTL</label>
                                            <input class="form-control" name="tempat_tgl">
                                        </div>
                                        <div>
                                            <label>NIP/NIK</label>
                                            <input class="form-control" name="nip">
                                        </div>
                                        <div>
                                            <label>Dapat/Tidak dapat tunjangan</label>
                                        
                                            <select class="form-control" name="tunjangan" value="<?php echo $tampil['tunjangan']; ?>">
                                                <option value=""></option>
                                                <option value="Dapat">Dapat</option>
                                                <option value="Tidak Dapat">Tidak Dapat</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label>Pekerjaan</label>
                                            <input class="form-control" name="pekerjaan">
                                        </div>
                                        <div>
                                            <label>Tanggal Perkawinan</label>
                                            <input class="form-control" name="tglkw" type="date">
                                        </div>
                                        <div>
                                            <label>Istri/Suami ke</label>
                                            
                                            <select class="form-control" name="isteri/suami_ke" placeholder="">
                                                <option value=""></option>
                                                <option value="1 (satu)">1 (satu)</option>
                                                <option value="2 (dua)">2 (dua)</option>
                                                <option value="3 (tiga)">3 (tiga)</option>
                                                <option value="4 (empat)">4 (empat)</option>
                                                <option value="5 (lima)">5 (lima)</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label>Penghasilan / Bulan</label>
                                            <input class="form-control" name="penghasilan">
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
                $nama = $_POST ['nmisterisuami'];
                $tempat_tgl = $_POST ['tempat_tgl'];
                $nip = $_POST ['nip'];
                $tunjangan = $_POST ['tunjangan'];
                $pekerjaan = $_POST ['pekerjaan'];
                $tglkw = $_POST ['tglkw'];
                $isteri = $_POST ['isteri/suami_ke'];
                $penghasilan = $_POST ['penghasilan'];
                $simpan = $_POST ['simpan'];

                if ($simpan) {
                    $sql = $koneksi -> query ("INSERT INTO `kawinsyah` (`id`,`id_kk`, `nmisterisuami`, `tempat_tgl`, `nip`, `tunjangan`, `pekerjaan`, `tglkw`, `isteri/suami_ke`, `penghasilan`) VALUES (NULL,'$id_kk', '$nama', '$tempat_tgl', '$nip', '$tunjangan', '$pekerjaan', '$tglkw', '$isteri', '$penghasilan')");
                    if ($sql) {
                        ?>

                        <script type="text/javascript" class="alert-info" >

                            alert ("Data berhasil disimpan!");
                            window.location.href="view_suami.php"

                        </script>
                        <?php
                        
                    }
                    
                }

                ?>

<?php
include('bottom.php');






