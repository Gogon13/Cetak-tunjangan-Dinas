<?php
session_start();
include("koneksi.php");
include('top.php');
?>
<div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Pegawai
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control" name="nama" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>N.I.P</label>
                                            <input type="text"  maxlength="18" minlength="17" class="form-control" name="nip" onkeypress="return Angkasaja(event)"/>
                                            *Masukkan 18 digit angka NIP Anda
                                        </div>
                                        <html>


<script type="text/javascript">
function Angkasaja(evt) {
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;
return true;
}
</script>
                                        <div class="form-group">
                                            <label>Pangkat </label>
                                            <input class="form-control" name="pangkat" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Golongan.Tmt</label>
                                            <input class="form-control" name="pangkat2" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat / Tanggal Lahir</label>
                                            <input class="form-control" name="tpt_tgl" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jekel" value="<?php echo $tampil['jekel']; ?>">
                                                <option value="" ></option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Perkawinan</label>
                                            <select class="form-control" name="statuskw" />
                                            <option value="" ></option>
                                            <option value="Belum Kawin"> Belum Kawin</option>
                                            <option value=" Kawin"> Kawin</option>
                                            <option value="Duda"> Duda</option>
                                            <option value="Janda"> Janda</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Agama / Kebangsaan</label>
                                            <select class="form-control" name="agama" >
                                                <option value="" ></option>
                                                <option value="Islam / Indonesia" > Islam / Indonesia</option>
                                                <option value="Kristen / Indonesia" > Kristen / Indonesia</option>
                                                <option value="Katholik / Indonesia" > Katholik / Indonesia</option>
                                                <option value="Hindu / Indonesia" > Hindu / Indonesia</option>
                                                <option value="Buddha / Indonesia" > Buddha / Indonesia</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Lengkap</label>
                                            <input class="form-control" name="alamat" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>T.M.T Capeg</label>
                                            <input class="form-control" name="tmtcapeg" type="date" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Status Kepegawaian</label>
                                            <select class="form-control" name="statuspegawai"  />
                                            <option value="" ></option>
                                            <option value="CPNS" > CPNS</option>
                                            <option value="PNS" > PNS</option>
                                            <option value="PHD" > PHD</option>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label>Digaji Menurut (PP/SK)</label>
                                            <input class="form-control" name="gajim" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Besarnya Penghasilan</label>
                                            <input class="form-control" name="penghasilan" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <input class="form-control" name="jabatan" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Keluarga Tertanggung</label>
                                            <select class="form-control" name="jkt" placeholder="">
                                                <option value="" ></option>
                                                <option value="1 (satu)">1 (satu)</option>
                                                <option value="2 (dua)">2 (dua)</option>
                                                <option value="3 (tiga)">3 (tiga)</option>
                                                <option value="4 (empat)">4 (empat)</option>
                                                <option value="5 (lima)">5 (lima)</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>S.K Terakhir yang dimiliki</label>
                                            <input class="form-control" name="skakhir" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Masa Kerja Golongan</label>
                                            <input class="form-control" name="mkg" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Masa Kerja Keseluruhan</label>
                                            <input class="form-control" name="mkk" placeholder="" />
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
                $simpanpass = $_POST ['simpan'];
                if ($simpan) {
                    $sql = $koneksi -> query ("insert into data_pegawai (nama, nip, pangkat, pangkat2, tpt_tgl, jekel, statuskw, agama, alamat, tmtcapeg, statuspegawai, gajim, penghasilan, jabatan, jkt, skakhir, mkg, mkk) values ('$nama', '$nip', '$pangkat', '$pangkat2', '$tpt_tgl', '$jekel', '$statuskw', '$agama','$alamat','$tmtcapeg', '$statuspegawai', '$gajim', '$penghasilan', '$jabatan', '$jkt', '$skakhir', '$mkg', '$mkk')");
                    
                    $sql = $koneksi -> query ("insert into login (username, password, level, status) values ('$nip', '$nip', 'pegawai', '1')");
                    
                    if ($sql) {
                        ?>

                        <script type="text/javascript" class="alert-info" >

                            alert ("Data berhasil disimpan!");
                            window.location.href="view_pegawai.php"

                        </script>
                        <?php
                        
                    }
                    
                }

                ?>

<?php
include('bottom.php');






