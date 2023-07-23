<?php
include("koneksi.php");
include('top.php');

$id = $_GET ['id'];
$sql = $koneksi->query("select*from data_pegawai where id='$id'");
$tampil = $sql -> fetch_assoc();

?>
<div class="panel panel-default">
                        <div class="panel-heading">
                            Ubah Data Pegawai
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil['nama']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>N.I.P</label>
                                            <input class="form-control" name="nip" maxlength="18" minlength="17" value="<?php echo $tampil['nip']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pangkat </label>
                                            <input class="form-control" name="pangkat" value="<?php echo $tampil['pangkat']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label> Golongan</label>
                                            <input class="form-control" name="pangkat2" value="<?php echo $tampil['pangkat2']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat / Tanggal Lahir</label>
                                            <input class="form-control" name="tpt_tgl" value="<?php echo $tampil['tpt_tgl']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jekel" value="<?php echo $tampil['jekel']; ?>">
                                                <option value="<?php echo $tampil['jekel']; ?>"><?php echo $tampil['jekel']; ?></option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Perkawinan</label>
                                            <select class="form-control" name="statuskw" />
                                            <option value="<?php echo $tampil['statuskw']; ?>"> <?php echo $tampil['statuskw']; ?></option>
                                            <option value="Belum Kawin"> Belum Kawin</option>
                                            <option value=" Kawin"> Kawin</option>
                                            <option value="Duda"> Duda</option>
                                            <option value="Janda"> Janda</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Agama / Kebangsaan</label>
                                            <select class="form-control" name="agama" value="<?php echo $tampil['agama']; ?>"/>
                                                <option value="<?php echo $tampil['agama']; ?>" > <?php echo $tampil['agama']; ?></option>
                                                <option value="Islam / Indonesia" > Islam / Indonesia</option>
                                                <option value="Kristen / Indonesia" > Kristen / Indonesia</option>
                                                <option value="Katholik / Indonesia" > Katholik / Indonesia</option>
                                                <option value="Hindu / Indonesia" > Hindu / Indonesia</option>
                                                <option value="Buddha / Indonesia" > Buddha / Indonesia</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Lengkap</label>
                                            <input class="form-control" name="alamat" value="<?php echo $tampil['alamat']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>T.M.T Capeg</label>
                                            <input class="form-control" name="tmtcapeg" type="date" value="<?php echo $tampil['tmtcapeg']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Kepegawaian</label>
                                            <select class="form-control" name="statuspegawai"  />
                                            <option value="<?php echo $tampil['statuspegawai']; ?>"><?php echo $tampil['statuspegawai']; ?></option>
                                            <option value="CPNS" > CPNS</option>
                                            <option value="PNS" > PNS</option>
                                            <option value="PHD" > PHD</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Digaji Menurut (PP/SK)</label>
                                            <input class="form-control" name="gajim" value="<?php echo $tampil['gajim']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Besarnya Penghasilan</label>
                                            <input class="form-control" name="penghasilan" value="<?php echo $tampil['penghasilan']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <input class="form-control" name="jabatan" value="<?php echo $tampil['jabatan']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Keluarga Tertanggung</label>
                                            <select class="form-control" name="jkt" value="<?php echo $tampil['jkt']; ?>">
                                                <option value="<?php echo $tampil['jkt']; ?>"><?php echo $tampil['jkt']; ?></option>
                                                <option value="1 (satu)">1 (satu)</option>
                                                <option value="2 (dua)">2 (dua)</option>
                                                <option value="3 (tiga)">3 (tiga)</option>
                                                <option value="4 (empat)">4 (empat)</option>
                                                <option value="5 (lima)">5 (lima)</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>S.K Terakhir yang dimiliki </label>
                                            <input class="form-control" name="skakhir" value="<?php echo $tampil['skakhir']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Masa Kerja Golongan</label>
                                            <input class="form-control" name="mkg" value="<?php echo $tampil['mkg']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Masa Kerja Keseluruhan</label>
                                            <input class="form-control" name="mkk" value="<?php echo $tampil['mkk']; ?>"/>
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

                $nama = $_POST ['nama'];
                $nip = $_POST ['nip'];
                $pangkat = $_POST ['pangkat'];
                $pangkat2 = $_POST ['pangkat2'];
                $tpt_tgl = $_POST ['tpt_tgl'];
                $jekel = $_POST ['jekel'];
                $statuskw = $_POST ['statuskw'];
                $agama = $_POST ['agama'];
                $alamat = $_POST ['alamat'];
                $tmtcapeg = $_POST ['tmtcapeg'];
                $statuspegawai = $_POST ['statuspegawai'];
                $gajim = $_POST ['gajim'];
                $penghasilan = $_POST ['penghasilan'];
                $jabatan = $_POST ['jabatan'];
                $jkt = $_POST ['jkt'];
                $skakhir = $_POST ['skakhir'];
                $mkg = $_POST ['mkg'];
                $mkk = $_POST ['mkk'];
                $simpan = $_POST ['simpan'];

                if ($simpan) {
                    $sql = $koneksi -> query ("update data_pegawai set nama='$nama', nip='$nip', pangkat='$pangkat',pangkat2='$pangkat2', tpt_tgl='$tpt_tgl', jekel='$jekel', statuskw='$statuskw', agama='$agama',alamat='$alamat',tmtcapeg='$tmtcapeg', statuspegawai='$statuspegawai', gajim='$gajim', penghasilan='$penghasilan', jabatan='$jabatan', jkt='$jkt', skakhir='$skakhir', mkg='$mkg', mkk='$mkk' where id='$id'");
                    if ($sql) {
                        ?>

                        <script type="text/javascript">

                            alert ("Data berhasil disimpan!");
                            window.location.href="edit_pegawai.php?id=<?php echo $tampil['id']; ?>"

                        </script>
                        <?php
                        
                    }
                    
                }

                ?>

<?php include('bottom.php'); ?>







