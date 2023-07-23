     <?php
     include('koneksi.php');

     ?>
     <?php
$konek = $koneksi;
$sql    ="SELECT Count(id) AS total From data_pegawai";
$result=mysqli_query($konek,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
?>
<?php
$konek1 =  $koneksi;
$sql1    ="SELECT Count(id) AS total From tanggungan";
$result1=mysqli_query($konek1,$sql1);
$values1=mysqli_fetch_assoc($result1);
$num_rows1=$values1['total'];
?>
<?php
$konek2 =  $koneksi;
$sql2    ="SELECT Count(id) AS total From kawinsyah";
$result2=mysqli_query($konek2,$sql2);
$values2=mysqli_fetch_assoc($result2);
$num_rows2=$values2['total'];
$count=$num_rows+$num_rows1+$num_rows2;
?>
    <div class="banner">

        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 4
                $("#slider3").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: false,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });
            });
        </script>
        <div  id="top" class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <div class="banner1">
                        <div class="container">
                            <div class="banner-info">
                                <h3>SI-JANGKA<span> Solusi Pembuatan Surat Keterangan </span> Untuk Mendapatkan Pemberdayaan Tunjangan Keluarga</h3>
                                <p>SI-JANGKA merupakan aplikasi yang mencakup bidang administrasi yang dimana memanage data keluarga pegawai dengan detail</p>
                                <a href="#book" class="hvr-outline-out button2 scroll">Pelayanan Kami</a>
                            </div>
                        </div>
                    </div>
                </li> 
                <li>
                    <div class="banner2">
                        <div class="container">
                            <div class="banner-info2 text-center">
                                <h3>SI-JANGKA<span> Solusi Pembuatan Surat Keterangan </span> Untuk Mendapatkan Pemberdayaan Tunjangan Keluarga</h3>
                                <p>SI-JANGKA merupakan aplikasi yang mencakup bidang administrasi yang dimana memanage data keluarga pegawai dengan detail</p>
                                <a href="#book" class="hvr-outline-out button2 scroll">Pelayanan Kami</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="banner1">
                        <div class="container">
                            <div class="banner-info">
                                <h3>SI-JANGKA<span> Solusi Pembuatan Surat Keterangan </span> Untuk Mendapatkan Pemberdayaan Tunjangan Keluarga</h3>
                                <p>SI-JANGKA merupakan aplikasi yang mencakup bidang administrasi yang dimana memanage data keluarga pegawai dengan detail</p>
                                <a href="#book" class="hvr-outline-out button2 scroll">Pelayanan Kami</a>
                            </div>
                        </div>
                    </div>
                </li> 
                <li>
                    <div class="banner2">
                        <div class="container">
                            <div class="banner-info2 text-center">
                                <h3>SI-JANGKA<span> Solusi Pembuatan Surat Keterangan </span> Untuk Mendapatkan Pemberdayaan Tunjangan Keluarga</h3>
                                <p>SI-JANGKA merupakan aplikasi yang mencakup bidang administrasi yang dimana memanage data keluarga pegawai dengan detail</p>
                                <a href="#book" class="hvr-outline-out button2 scroll">Pelayanan Kami	</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //banner -->
    <!-- content -->
<!--     <div class="content">
        <div class="container">
            <div class="col-md-4 content_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <img class="img-responsive" src="images/pic1.jpg" alt=" " />
            </div>
            <div class="col-md-4 content_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.2s">
                <div class="welcome">
                    <h3>Selamat datang di<br> E-Hospital</h3>
                    <ul>
                        <li><a href="#">Apotik</a></li>
                        <li><a href="#">Konsultasi Kesehatan & Kehamilan</a></li>
                        <li><a href="#">Dokter Spesialis Anak</a></li>
                        <li><a href="#">Dokter Gigi</a></li>
                        <li><a href="#">Dokter Umum</a></li>
                        <li><a href="#">Dokter THT</a></li>
                        <li><a href="#">Khitanan</a></li>
                    </ul>
                </div>
            </div>
            <div id="book" class="col-md-4 content_middle wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.3s"> -->
                <!--<h3>Book An Appointment</h3>
                <form action="#" method="post">
                    <input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Name';}" required="">
                    <input type="text" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Email';}" required="">
                    <input class="date" name="19/10/2016" id="datepicker" type="text" value="19/10/2016" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = '19/10/2016';}" required="">
                    <select id="country" onchange="change_country(this.value)" class="frm-field required sect">
                        <option value="null">Select Department</option>
                        <option value="null">Health Care</option> 
                        <option value="null">Body Checkup</option>					
                        <option value="null">Out Patient</option>
                        <option value="null">Surgery</option>											
                    </select>
                    <input type="submit" value="Book Now">
                </form>-->
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //content -->
    <!-- services -->
    <div class="services">
        <div class="container">
            <div class="col-md-4 services_left wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0s">
                <h3>Pelayanan Kami</h3>
                <p class="ser-para" >Menyeciptakan pelayan yang baik dan nyaman ,serta memberikan lingkungan yang nyaman bagi desa dan masyarakat</p>
                <a href="http://dpmd.kuduskab.go.id" class="hvr-outline-out button2">See More About Us</a>
                <script>
                    // You can also use "$(window).load(function() {"
                    $(function () {
                        // Slideshow 4
                        $("#slider4").responsiveSlides({
                            auto: true,
                            pager: true,
                            nav: false,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                                $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                                $('.events').append("<li>after event fired.</li>");
                            }
                        });
                    });
                </script>
                <div  class="callbacks_container">
                    <ul class="rslides" id="slider4">
                        <li>
                            <div class="ser-bottom">
                                <h5>Dengan adanya SI-JANGKA semua urusan surat tunjangan jadi mudah dan transparan</h5>
                                <p>- Ananda Selvi</p>
                            </div>
                        </li>
                        <li>
                            <div class="ser-bottom">
                                <h5>Mudahnya akses di SI-JANGKA sangat bermanfaat</h5>
                                <p>- Rafi ahmad</p>
                            </div>
                        </li>
                        <li>
                            <div class="ser-bottom">
                                <h5>SI-JANGKA sesuatu sekali untuk memudah kan urusan pegawai</h5>
                                <p>- Sharini</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> 
            <div class="col-md-8 services_right ">
                <div class="list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.1s">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    <a href="http://dpmd.kuduskab.go.id"><h4>Sekilas Tentang DPMD</h4><a>
                    <p>Selayang pandang mengenai DPMD</p>
                </div>
                <div class="list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <span class="glyphicon glyphicon-scissors" aria-hidden="true"></span>
                    <a href="http://dpmd.kuduskab.go.id"><h4>Visi dan Misi</h4><a>
                    <p>Gambaran atau rencana masa depan</p>
                </div>
                <div class="list-left text-center no_marg wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <span class="glyphicon glyphicon-apple" aria-hidden="true"></span>
                    <a href="http://dpmd.kuduskab.go.id"><h4>Tugas Pokok dan Fungsi</h4><a><a>
                    <p>Tugas yang diemban Dinas PMD</p>
                </div>
                <div class="list-left text-center no_marg wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                    <a href="http://dpmd.kuduskab.go.id"><h4>Lokasi</h4><a>
                    <p>Alamat dan letak DPMD Kab.Kudus</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //services -->
    <!-- team -->
    <div class="ind-team">
        <div class="container">
            <h3>Struktur Organisasi</h3>
            <h3>Dinas Permasyarakatan dan Desa</h3>
            <h3>Kabupaten Kudus</h3>
            <div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="team-img">
                    <img class="img-responsive" src="images/pic1.jpg" width="30px" height="40px" alt=" "/>
                    <div class="team-info">
                        <ul>
                            <li class="hvr-rectangle-out"><a class="eco1" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco2" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco3" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco4" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco5" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <h4>Drs.ADI SADHONO M, MM</h4>
                <p>Kepala Dinas PMD</p>
            </div>
            <div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="team-img">
                    <img class="img-responsive" src="images/pic2A.jpg" alt=" "/>
                    <div class="team-info">
                        <ul>
                            <li class="hvr-rectangle-out"><a class="eco1" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco2" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco3" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco4" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco5" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <h4>Arief Budi Siswanto, ST</h4>
                <p>Sekretaris</p>

            </div>
            <div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="team-img">
                    <img class="img-responsive" src="images/pic3.jpg" alt=" "/>
                    <div class="team-info">
                        <ul>
                            <li class="hvr-rectangle-out"><a class="eco1" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco2" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco3" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco4" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco5" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <h4>Sri Edi Handayani, SH</h4>
                <p>Kasubbag. PEP dan Keuangan</p>
            </div>
<div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="team-img">
                    <img class="img-responsive" src="images/pic4.jpg" alt=" "/>
                    <div class="team-info">
                        <ul>
                            <li class="hvr-rectangle-out"><a class="eco1" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco2" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco3" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco4" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco5" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <h4>Ririk Juwariyah, SE</h4>
                <p>Kasubbag. Umum dan Kepegawaian</p>
            </div>
            <div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="team-img">
                    <img class="img-responsive" src="images/pic5.jpg" alt=" "/>
                    <div class="team-info">
                        <ul>
                            <li class="hvr-rectangle-out"><a class="eco1" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco2" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco3" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco4" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco5" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <h4>Saparni, SH, MM</h4>
                <p>Kabid. Pemberdayaan Masyarakat</p>

            </div>
            <div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="team-img">
                    <img class="img-responsive" src="images/pic6.jpg" alt=" "/>
                    <div class="team-info">
                        <ul>
                            <li class="hvr-rectangle-out"><a class="eco1" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco2" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco3" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco4" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco5" href="#"></a></li>
                        </ul>
                    </div>
               </div>
                <h4>Drs, M. Chasin, MT</h4>
                <p>Kabid. Pemerintahan Desa</p>
           
            </div>
            <div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="team-img">
                    <img class="img-responsive" src="images/pic7.jpg" alt=" "/>
                    <div class="team-info">
                        <ul>
                            <li class="hvr-rectangle-out"><a class="eco1" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco2" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco3" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco4" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco5" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <h4>Darwin Sugiarto, S.Pd</h4>
                <p>Kasi. Pembrd. Lemb. Kemasyarakatan</p>
            </div>
        
            <div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="team-img">
                    <img class="img-responsive" src="images/pic8.jpg" alt=" "/>
                    <div class="team-info">
                        <ul>
                            <li class="hvr-rectangle-out"><a class="eco1" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco2" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco3" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco4" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco5" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <h4>Dian Noor H, S.STP, MP</h4>
                <p>Kasi. Pemerintahan Desa dan BPD</p>
          
            </div>
            <div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="team-img">
                    <img class="img-responsive" src="images/pic9.jpg" alt=" "/>
                    <div class="team-info">
                        <ul>
                            <li class="hvr-rectangle-out"><a class="eco1" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco2" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco3" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco4" href="#"></a></li>
                            <li class="hvr-rectangle-out"><a class="eco5" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <h4>Dul Rokhim, S.IP</h4>
                <p>Kasi. Keuangan dan Aset Desa</p>
                </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- team -->
    <!-- capabilities -->
    <!-- <div class="capacity">
        <div class="container">
            <h3>Capabilities</h3>
            <div class="col-md-3 capabil_grid1 wow fadeInDownBig animated animated text-center" data-wow-delay="0.4s">
                <div class="capil_text">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $num_rows['total'] ?>' data-delay='.5' data-increment="100"> <?php echo $num_rows['total'] ?></div>
                    <p>Data Pegawai</p>	
                </div>
            </div>
            <div class="col-md-3 capabil_grid3 wow fadeInDownBig animated animated text-center" data-wow-delay="0.4s">
                <div class="capil_text">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $num_rows2['total'] ?>' data-delay='.5' data-increment="100"><?php echo $num_rows2['total'] ?> </div>               
                    <p>Data Suami/Istri</p>
                </div>
            </div>
            <div class="col-md-3 capabil_grid3 wow fadeInDownBig animated animated text-center" data-wow-delay="0.4s">
                <div class="capil_text">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $num_rows1['total'] ?>' data-delay='.5' data-increment="100"><?php echo $num_rows1['total'] ?> </div>               
                    <p>Data Anak</p>
                </div>
            </div>
            <div class="col-md-3 capabil_grid4 wow fadeInUpBig animated animated text-center" data-wow-delay="0.4s">
                <div class="capil_text">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $count?>' data-delay='.5' data-increment="1"><?php echo $count?> </div>
                    <p>Total Data</p>
                </div>
            </div> -->
             <div class="capacity">
        <div class="container">
            <h3>Capabilities</h3>
            <div class="col-md-3 capabil_grid1 wow fadeInDownBig animated animated text-center" data-wow-delay="0.4s">
                <div class="capil_text">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $num_rows ?> ' data-delay='.5' data-increment="100"><?php echo $num_rows?></div>
                    <p>Data Pegawai</p>    
                </div>
            </div>
            <div class="col-md-3 capabil_grid2 wow fadeInUpBig animated animated text-center" data-wow-delay="0.4s">
                <div class="capil_text">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $num_rows2 ?>' data-delay='.5' data-increment="5"><?php echo $num_rows2 ?></div>
                    <p>Data Suami Istri</p>    
                </div>
            </div>
            <div class="col-md-3 capabil_grid3 wow fadeInDownBig animated animated text-center" data-wow-delay="0.4s">
                <div class="capil_text">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $num_rows1 ?> ' data-delay='.5' data-increment="100"><?php echo $num_rows1 ?></div>              
                    <p>Data Anak</p>
                </div>
            </div>
            <div class="col-md-3 capabil_grid4 wow fadeInUpBig animated animated text-center" data-wow-delay="0.4s">
                <div class="capil_text">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $count?> ' data-delay='.5' data-increment="1"><?php echo $count?> </div>
                    <p>Total Data</p>
                    
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    </div>