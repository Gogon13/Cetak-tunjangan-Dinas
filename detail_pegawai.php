<?php
include("koneksi.php");
include('top.php');

$id = $_GET ['id'];
$sql = $koneksi->query("select*from data_pegawai where id='$id'");
$tampil = $sql -> fetch_assoc();

?>
<div class="panel panel-default">
                        <div class="panel-heading">
                            Detail Data Pegawai
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input readonly class="form-control" name="nama" value="<?php echo $tampil['nama']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>N.I.P</label>
                                            <input readonly class="form-control" name="nip" maxlength="18" minlength="17" value="<?php echo $tampil['nip']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pangkat </label>
                                            <input readonly class="form-control" name="pangkat" value="<?php echo $tampil['pangkat']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label> Golongan</label>
                                            <input readonly class="form-control" name="pangkat2" value="<?php echo $tampil['pangkat2']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat / Tanggal Lahir</label>
                                            <input readonly class="form-control" name="tpt_tgl" value="<?php echo $tampil['tpt_tgl']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <input readonly class="form-control" name="jekel" value="<?php echo $tampil['jekel']; ?>">
                                               
                                        </div>
                                        <div class="form-group">
                                            <label>Status Perkawinan</label>
                                            <input readonly class="form-control" name="statuskw" value="<?php echo $tampil['statuskw']; ?>"  />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Agama / Kebangsaan</label>
                                            <input readonly class="form-control" name="agama" value="<?php echo $tampil['agama']; ?>"/>
                                               
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Lengkap</label>
                                            <input readonly class="form-control" name="alamat" value="<?php echo $tampil['alamat']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>T.M.T Capeg</label>
                                            <input readonly class="form-control" name="tmtcapeg"  value="<?php echo $tampil['tmtcapeg']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Kepegawaian</label>
                                            <input readonly class="form-control" name="statuspegawai" value="<?php echo $tampil['statuspegawai']; ?>" />
                                         
                                        </div>
                                        <div class="form-group">
                                            <label>Digaji Menurut (PP/SK)</label>
                                            <input readonly class="form-control" name="gajim" value="<?php echo $tampil['gajim']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Besarnya Penghasilan</label>
                                            <input readonly class="form-control" name="penghasilan" value="<?php echo $tampil['penghasilan']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <input readonly class="form-control" name="jabatan" value="<?php echo $tampil['jabatan']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Keluarga Tertanggung</label>
                                            <input readonly class="form-control" name="jkt" value="<?php echo $tampil['jkt']; ?>">
                                               
                                        </div>
                                        <div class="form-group">
                                            <label>S.K Terakhir yang dimiliki </label>
                                            <input readonly class="form-control" name="skakhir" value="<?php echo $tampil['skakhir']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Masa Kerja Golongan</label>
                                            <input readonly class="form-control" name="mkg" value="<?php echo $tampil['mkg']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Masa Kerja Keseluruhan</label>
                                            <input readonly class="form-control" name="mkk" value="<?php echo $tampil['mkk']; ?>"/>
                                        </div>
                                       <div class="row text-center">
                                            <label>.:&nbspCetak Surat Keterangan&nbsp:.</th>
                                            <div class="row text-center">
                <a  target="blank" href="cetak1.php?id=<?php echo $tampil['id'];?>" class="btn btn-info">Halaman Depan</a>
                <a target="blank" href="tabel.php?id=<?php echo $tampil['id'];?>" class="btn btn-info">Halaman Belakang</a>
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







