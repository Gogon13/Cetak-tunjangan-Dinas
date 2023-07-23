<?php
include("koneksi.php");
include('top.php');

$id = $_GET ['id'];
$sql = $koneksi->query("select*from kawinsyah where id='$id'");
$tampil = $sql -> fetch_assoc();

$query = "SELECT * FROM `data_pegawai`order by nama asc";
$result1 = mysqli_query($koneksi, $query);

$sql1 = $koneksi->query("select a.*,b.* from data_pegawai a, kawinsyah b where b.id='$id'and a.id = b.id_kk");
$tampil1 = $sql1 -> fetch_assoc();

?>
<div class="panel panel-default">
                        <div class="panel-heading">
                            Ubah Data Suami/Istri
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div class="form-group">
                                <label>Suami/Istri Dari</label>
                                            <select class="form-control" name="id_kk" >
            <option value="<?php echo $tampil1[id_kk];?>"><?php echo $tampil1[nama];?></option>
            <?php while($row1 = mysqli_fetch_array($result1)):;?>
            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
            <?php endwhile;?>
        </select> </div>
                                        <div>
                                            <label>Nama Isteri / Suami</label>
                                            <input class="form-control" name="nmisterisuami" value="<?php echo $tampil['nmisterisuami']; ?>" />
                                        </div>
                                        <div>
                                            <label>TTL</label>
                                            <input class="form-control" name="tempat_tgl" value="<?php echo $tampil['tempat_tgl']; ?>" />
                                        </div>
                                        <div>
                                            <label>NIP/NIK</label>
                                            <input class="form-control" name="nip" value="<?php echo $tampil['nip']; ?>" />
                                        </div>
                                        <div>
                                            <label>Dapat/Tidak dapat tunjangan</label>
                                            <select class="form-control" name="tunjangan" value="<?php echo $tampil['tunjangan']; ?>">
                                                <option value="<?php echo $tampil['tunjangan']; ?>"><?php echo $tampil['tunjangan']; ?></option>
                                                <option value="Dapat">Dapat</option>
                                                <option value="Tidak Dapat">Tidak Dapat</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label>Pekerjaan</label>
                                            <input class="form-control" name="pekerjaan" value="<?php echo $tampil['pekerjaan']; ?>" />
                                        </div>
                                        <div>
                                            <label>Tanggal Perkawinan</label>
                                            <input class="form-control" name="tglkw" type="date" value="<?php echo $tampil['tglkw']; ?>" />
                                        </div>
                                        <div>
                                            <label>Istri/Suami ke</label>
                                            <select class="form-control" name="isteri/suami_ke" placeholder="">
                                                <option value="<?php echo $tampil['isteri/suami_ke']; ?>"><?php echo $tampil['isteri/suami_ke']; ?></option>
                                                <option value="1 (satu)">1 (satu)</option>
                                                <option value="2 (dua)">2 (dua)</option>
                                                <option value="3 (tiga)">3 (tiga)</option>
                                                <option value="4 (empat)">4 (empat)</option>
                                                <option value="5 (lima)">5 (lima)</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label>Penghasilan / Bulan</label>
                                            <input class="form-control" name="penghasilan" value="<?php echo $tampil['penghasilan']; ?>" />
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
                    $sql = $koneksi -> query ("UPDATE `kawinsyah` SET `id_kk` = '$id_kk',`nmisterisuami` = '$nama', `tempat_tgl` = '$tempat_tgl', `nip` = '$nip', `tunjangan` = '$tunjangan', `pekerjaan` = '$pekerjaan', `tglkw` = '$tglkw', `isteri/suami_ke` = '$isteri', `penghasilan` = '$penghasilan' WHERE `kawinsyah`.`id` = '$id'");
                    // $sql = $koneksi -> query ("UPDATE `sekum`.`kawinsyah` SET `nmisteri/suami` = '$nama', `tempat_tgl` = '$tempat_tgl', `nip` = '$nip', `tunjangan` = '$tunjangan', `pekerjaan` = '$pekerjaan', `tglkw` = '$tglkw', `isteri/suami_ke` = '$isteri', `penghasilan` = '$penghasilan' WHERE `kawinsyah`.`id` = '$id'");
                    if ($sql) {
                        ?>

                        <script type="text/javascript" class="alert-info" >

                            alert ("Data berhasil disimpan!");
                            window.location.href="edit_suami.php?id=<?php echo $tampil['id']; ?>"

                        </script>
                        <?php
                        
                    }
                    
                }

                ?>

<?php include('bottom.php'); ?>







