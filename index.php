<?php
//
//SC	:	KM Panel - SMM & PPOB
//Dev	:	BlackRose
//By	:	401XD Group Indonesia
//Email	:	401xdssh@gmail.com
//
//▪ http://mycoding.net
//▪ http://youtube.com/c/MyCodingXD
//▪ http://instagram.com/MyCodingXD
//▪ http://facebook.com/MyCodingXD
//
//Hak cipta 2017
//Terakhir dikembangkan 2020
//Dilarang mengubah/menghapus copyright ini!
//

session_start();
require("config.php");

if (!isset($_SESSION['user'])) {    
	exit(header("Location: ".$config['web']['url']."home"));

} else {     
	require("lib/header.php");  
	$sess_username = $_SESSION['user']['username'];
	?>

<?php
include_once 'lib/SEOSecretIDN-meta-homepageonly.php';
?>

<div class="row" id="beranda">
	<div class="col-sm-12 col-lg-6">
		<div class="row">
			<div class="col-12">
				<div class="card card-body">
					<div class="row">
						<div class="col-6">
							<h5 class="mb-0 text-primary" style="margin-top: -10px !important; margin-bottom: -10px !important;"><i class="ti-android"></i> Android App</h5>
						</div>
						<div class="col-6 text-right" style="margin-top: -10px !important; margin-bottom: -10px !important;">
							<a href="/halaman/platform-aplikasi" class="btn btn-xs btn-primary"> <i class="fa fa-download"></i> Download </a>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-6">
							<h5 class="mb-0 text-primary" style="margin-top: -10px !important; margin-bottom: -10px !important;"><i class="ti-wallet"></i> Rp.<?php echo number_format($data_user['saldo'],0,',','.'); ?> </h5>
						</div>
						<div class="col-6 text-right" style="margin-top: -10px !important; margin-bottom: -10px !important;">
							<a style="margin-top:2.5px; margin-bottom:2.5px;" href="/pay" class="btn btn-xs btn-primary"> <i class="fas fa-plus-circle"></i> Deposit </a> <a style="margin-top:2.5px; margin-bottom:2.5px;" href="/user/setting" class="btn btn-xs btn-primary"> <i class="fa fa-cog fa-spin"></i> Profil </a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="assets/images/slide/kincaimediaslide0.png" alt="Layanan Terbaik 0">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="assets/images/slide/kincaimediaslide1.jpg" alt="Layanan Terbaik 1">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="assets/images/slide/kincaimediaslide2.jpg" alt="Layanan Terbaik 2">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="assets/images/slide/kincaimediaslide3.jpg" alt="Layanan Terbaik 3">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="assets/images/slide/kincaimediaslide4.jpg" alt="Layanan Terbaik 4">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="assets/images/slide/kincaimediaslide5.jpg" alt="Layanan Terbaik 5">
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="fa fa-arrow-left" style="font-size:24px;color:#000;background-color:#FFF;border-radius:50%" aria-hidden="true"></span>
							<span class="sr-only">Sebelumnya</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="fa fa-arrow-right" style="font-size:24px;color:#000;background-color:#FFF;border-radius:50%" aria-hidden="true"></span>
							<span class="sr-only">Selanjutnya</span>
						</a>
					</div>
				</div>    
			</div>
		</div> 
		<div class="row">
			<div class="col-12">
				<div class="card text-center">
					<table class="table table-bordered mb-0">
						<tbody>
							<tr>
								<th>
									<a href="/pemesanan/sosial-media">
										<img src="/assets/images/produk/sosialmedia.png" height="60" width="60">
										<a href="/pemesanan/sosial-media"><h5>Sosial Media</h5></a>
									</a>
								</th>
								<th>
									<a href="/pemesanan/pulsa">
										<img src="/assets/images/produk/pulsa.png" height="60" width="60">
										<a href="/pemesanan/pulsa"><h5>Pulsa Reguler</h5></a>
									</a>
								</th>
								<th>
									<a href="/pemesanan/pln">
										<img src="/assets/images/produk/tokenlistrikpln.png" height="60" width="60">
										<a href="/pemesanan/pln"><h5>Token PLN Prabayar</h5></a>
									</a>
								</th>
							</tr>

							<tr>
							    <th>
									<a href="/pemesanan/telepon-sms">
										<img src="/assets/images/produk/telkom.png" height="60" width="60">
										<a href="/pemesanan/telepon-sms"><h5>Telepon & SMS</h5></a>
									</a>
								</th>
							    <th>
									<a href="/pemesanan/voucher">
										<img src="/assets/images/produk/voucher.png" height="60" width="60">
										<a href="voucher"><h5>Voucher Digital</h5></a>
									</a>
								</th>
								<th>
									<a href="/pemesanan/paket">
										<img src="/assets/images/produk/paketinternet.png" height="60" width="60">
										<a href="/pemesanan/paket"><h5>Paket Internet</h5></a>
									</a>
								</th>
							</tr>

							<tr>
								<th>
									<a href="/pemesanan/e-money">
										<img src="/assets/images/produk/emoney.png" height="60" width="60">
										<a href="/pemesanan/e-money"><h5>Top Up E-Money</h5></a>
									</a>
								</th>
								<th>
									<a href="/pemesanan/game">
										<img src="/assets/images/produk/vouchergame.png" height="60" width="60">
										<a href="/pemesanan/game"><h5>Top Up Game</h5></a>
									</a>
								</th>
								<th>
									<a href="/pemesanan/lainnya">
										<img src="/assets/images/produk/produklainnya.png" height="60" width="60">
										<a href="/pemesanan/lainnya"><h5>Provider Global</h5></a>
									</a>
								</th>
							</tr>

							<tr>
								<th>
									<a href="/pemesanan/netflix">
										<img src="/assets/images/produk/netflixpremium.png" height="60" width="60">
										<a href="/pemesanan/netflix"><h5>Netflix Premium</h5></a>
									</a>
								</th>
								<th>
									<a href="/pemesanan/spotify">
										<img src="/assets/images/produk/spotifypremium.png" height="60" width="60">
										<a href="/pemesanan/spotify"><h5>Spotify Premium</h5></a>
									</a>
								</th>
								<th>
									<a href="/pemesanan/youtube">
										<img src="/assets/images/produk/youtubepremium.png" height="60" width="60">
										<a href="/pemesanan/youtube"><h5>Youtube Premium</h5></a>
									</a>
								</th>
							</tr>

                            <tr>
								<th>
									<a href="/pemesanan/vidio">
										<img src="/assets/images/produk/vidio.png" height="60" width="60">
										<a href="/pemesanan/vidio"><h5>Vidio Platinum</h5></a>
									</a>
								</th>
								<th>
									<a href="/pemesanan/bstation">
										<img src="/assets/images/produk/bstation.png" height="60" width="60">
										<a href="/pemesanan/bstation"><h5>Bstation</h5></a>
									</a>
								</th>
								<th>
									<a href="/pemesanan/hbogo">
										<img src="/assets/images/produk/hbogo.png" height="60" width="60">
										<a href="/pemesanan/hbogo"><h5>HBO GO</h5></a>
									</a>
								</th>
							</tr>
							
								<tr>
								<th>
									<a href="/pemesanan/canva">
										<img src="/assets/images/produk/canva.png" height="60" width="60">
										<a href="/pemesanan/canva"><h5>Canva Pro</h5></a>
									</a>
								</th>
								<th>
									<a href="/pemesanan/disney">
										<img src="/assets/images/produk/disney.png" height="60" width="60">
										<a href="/pemesanan/disney"><h5>Disney+ Hotstar</h5></a>
									</a>
								</th>
								<th>
									<a href="<?php echo $data['url_whatsapp']; ?>">
										<img src="/assets/images/produk/wacs2.png" height="60" width="60">
										<a href="<?php echo $data['url_whatsapp']; ?>"><h5>WA CS</h5></a>
									</a>
								</th>
							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-12 col-lg-6">
		<div class="row">
			<div class="col-sm-12">
				<div class="card-box">
					<center><h4 class="header-title text-dark"><i class=" mdi mdi-newspaper "></i><b> BERITA & INFORMASI</h4></b></center>
					<div class="table-responsive" style="display: inline-grid;">
						<table class="able table-striped table-hovered nowrap mb-0">
							<tbody>
								<?php $check_news = $conn->query("SELECT * FROM berita ORDER BY id DESC LIMIT 6"); ?>
								<?php while ($data_news = $check_news->fetch_assoc()) { ?>
									<?php
									if ($data_news['tipe'] == "INFORMASI") $btn = "info";
									if ($data_news['tipe'] == "PERINGATAN") $btn = "warning";
									if ($data_news['tipe'] == "PENTING") $btn = "danger";
									if ($data_news['tipe'] == "LAYANAN") $btn = "success";
									if ($data_news['tipe'] == "PERBAIKAN") $btn = "primary";
									?>
									<tr>
										<td width="20">
											<a href="<?= $config['web']['url']; ?>user/news?id=<?= $data_news['id']; ?>" class="btn btn-xs btn-<?= $btn; ?>"Ganti Password Akun ><i class="fas fa-info-circle"></i>
											</a>
										</td>
										<td style="padding-left: 5px;">
											<a href="<?= $config['web']['url']; ?>user/news?id=<?= $data_news['id']; ?>" class="text-dark"><?= $data_news['subjek']; ?>
											</a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
						<div class="text-center">
							<a href="<?= $config['web']['url']; ?>user/news" class="btn btn-xs btn-primary"Ganti Password Akun > <i class="fa fa-info-circle"></i> Lihat semua</a>
						</div>
					</div>
				</div>
				<div class="card-box">
					<center><h4 class="header-title text-dark"><i class="mdi mdi-cart"></i><b> RIWAYAT SOSMED</h4></b></center>
					<div class="table-responsive">
						<table class="table table-striped table-hovered nowrap mb-0">
							<thead>
								<tr>
									<th>Status</th>
									<th>Layanan</th>
									<th>Harga</th>
								</tr>
							</thead>
							<tbody>
								<?php $cek_pesanan = $conn->query("SELECT * FROM pembelian_sosmed WHERE user = '$sess_username' ORDER BY id DESC LIMIT 3"); ?>
								<?php while ($data_pesanan = $cek_pesanan->fetch_assoc()) { ?>
									<?php if ($data_pesanan['status'] == "Success"){ $color = "success"; }
									else if ($data_pesanan['status'] == "Pending"){ $color = "warning"; }
									else if ($data_pesanan['status'] == "Error"){ $color = "danger"; }
									else if ($data_pesanan['status'] == "Partial"){ $color = "danger"; }
									else if ($data_pesanan['status'] == "Processing"){ $color = "info";
								} ?>
								<tr>
									<td><label class="badge badge-<?= $color; ?>"><?= $data_pesanan['status']; ?></label></td>
									<td><?= $data_pesanan['layanan']; ?></td>
									<td><?= $data_pesanan['harga']; ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
						<div class="text-center">
							<a href="<?= $config['web']['url']; ?>riwayat/pemesanan-sosmed" class="btn btn-xs btn-primary"Ganti Password Akun > <i class="fa fa-info-circle"></i> Lihat semua</a>
						</div>
					</div>
				</div>
				<div class="card-box">
					<center><h4 class="header-title text-dark"><i class="mdi mdi-cart"></i><b> RIWAYAT PPOB</h4></b></center>
					<div class="table-responsive">
						<table class="table table-striped table-hovered nowrap mb-0">
							<thead>
								<tr>
									<th>Status</th>
									<th>Produk</th>
									<th>Harga</th>
								</tr>
							</thead>
							<tbody>
								<?php $cek_pesanan = $conn->query("SELECT * FROM pembelian_pulsa WHERE user = '$sess_username' ORDER BY id DESC LIMIT 3"); ?>
								<?php while ($data_pesanan = $cek_pesanan->fetch_assoc()) { ?>
									<?php if ($data_pesanan['status'] == "Success"){ $color = "success"; }
									else if ($data_pesanan['status'] == "Pending"){ $color = "warning"; }
									else if ($data_pesanan['status'] == "Error"){ $color = "danger"; }
									else if ($data_pesanan['status'] == "Partial"){ $color = "danger"; }
									else if ($data_pesanan['status'] == "Processing"){ $color = "info";
								} ?>
								<tr>
									<td><label class="badge badge-<?= $color; ?>"><?= $data_pesanan['status']; ?></label></td>
									<td><?= $data_pesanan['layanan']; ?></td>
									<td><?= $data_pesanan['harga']; ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
						<div class="text-center">
							<a href="/riwayat/pemesanan-pulsa" class="btn btn-xs btn-primary"Ganti Password Akun > <i class="fa fa-info-circle"></i> Lihat semua </a>
						</div>
					</div>
				</div>
				<div class="card-box">
					<center><h4 class="header-title text-dark"><i class="mdi mdi-cart"></i><b> RIWAYAT DIGITAL</h4></b></center>
					<div class="table-responsive">
						<table class="table table-striped table-hovered nowrap mb-0">
							<thead>
								<tr>
									<th>Status</th>
									<th>Produk</th>
									<th>Harga</th>
								</tr>
							</thead>
							<tbody>
								<?php $cek_pesanan = $conn->query("SELECT * FROM pembelian_digital WHERE user = '$sess_username' ORDER BY id DESC LIMIT 3"); ?>
								<?php while ($data_pesanan = $cek_pesanan->fetch_assoc()) { ?>
									<?php if ($data_pesanan['status'] == "Success"){ $color = "success"; }
									else if ($data_pesanan['status'] == "Pending"){ $color = "warning"; }
									else if ($data_pesanan['status'] == "Error"){ $color = "danger"; }
									else if ($data_pesanan['status'] == "Partial"){ $color = "danger"; }
									else if ($data_pesanan['status'] == "Processing"){ $color = "info";
								} ?>
								<tr>
									<td><label class="badge badge-<?= $color; ?>"><?= $data_pesanan['status']; ?></label></td>
									<td><?= $data_pesanan['layanan']; ?></td>
									<td><?= $data_pesanan['harga']; ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
						<div class="text-center">
							<a href="/riwayat/pemesanan-digital" class="btn btn-xs btn-primary"Ganti Password Akun > <i class="fa fa-info-circle"></i> Lihat semua </a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end row -->
	</div>
</div>

<div class="row" id="monitoring">
    <div class="col-sm-12 col-lg-6">
    	<div class="row">
    		<div class="col-sm-12">
		        <div class="card-box">
		        	<center><h4 class="header-title text-dark"><i class="fa fa-spinner fa-spin text-dark"></i><b> MONITORING SOSMED</h4></b></center>
	                <div class="table-responsive">
	                    <table class="table table-striped table-bordered nowrap m-0">
	                        <thead>
	                            <tr>
	                            	<th>Status <a href="/halaman/status-order" target="_blank"><b><i class="fa fa-question-circle"></i></b></a></th>
	                                <th>Layanan</th>
	                                <th>Harga</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <?php 
	                                // start paging config
	                                if (isset($_GET['cari'])) {
	                                    $cari_oid = $conn->real_escape_string(filter($_GET['cari']));
	                                    $cari_status = $conn->real_escape_string(filter($_GET['status']));
	                                    $cek_pesanan = "SELECT * FROM pembelian_sosmed WHERE oid LIKE '%$cari_oid%' AND status LIKE '%$cari_status%' ORDER BY id DESC"; // edit
	                                } else {
	                                    $cek_pesanan = "SELECT * FROM pembelian_sosmed ORDER BY id DESC"; // edit
	                                    }
	                                if (isset($_GET['cari'])) {
	                                    $cari_urut = $conn->real_escape_string(filter($_GET['tampil']));
	                                    $records_per_page = $cari_urut; // edit
	                                } else {
	                                    $records_per_page = 5; // edit
	                                    }

	                                $starting_position = 0;
	                                if(isset($_GET["halaman"])) {
	                                    $starting_position = ($conn->real_escape_string(filter($_GET["halaman"]))-1) * $records_per_page;
	                                    }
	                                    $new_query = $cek_pesanan." LIMIT $starting_position, $records_per_page";
	                                    $new_query = $conn->query($new_query);
	                                // end paging config
	                                while ($data_pesanan = $new_query->fetch_assoc()) {
	                                if ($data_pesanan['status'] == "Pending") {
	                                    $badge = "warning";
	                                } else if ($data_pesanan['status'] == "Partial") {
	                                    $badge = "danger";
	                                } else if ($data_pesanan['status'] == "Error") {
	                                    $badge = "danger";    
	                                } else if ($data_pesanan['status'] == "Processing") {
	                                    $badge = "info";    
	                                } else if ($data_pesanan['status'] == "Success") {
	                                    $badge = "success";    
	                                }
	                            ?>
	                            <tr>
	                                <td><badge class="badge badge-<?php echo $badge; ?>"><?php echo $data_pesanan['status']; ?></badge>
	                                </td>
	                                <td><?php echo $data_pesanan['layanan']; ?></td>
	                                <td>Rp. <?php echo number_format($data_pesanan['harga'],0,',','.'); ?></td>
	                            </tr>
	                            <?php } ?>
	                        </tbody>
	                    </table>
	                </div>
	                <div class="text-center">
	                	<a href="/panel/monitoring-sosmed" class="btn btn-xs btn-primary"Ganti Password Akun > <i class="fa fa-info-circle"></i> Lainnya </a>
	                </div>
		        </div>
	        </div>
    	</div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="row">
        	<div class="col-sm-12">
	            <div class="card-box">
	            	<center><h4 class="header-title text-dark"><i class="fa fa-spinner fa-spin text-dark"></i><b> MONITORING PPOB</h4></b></center>
	                <div class="table-responsive">
	                    <table class="table table-striped table-bordered nowrap m-0">
	                        <thead>
	                            <tr>
	                            	<th>Status <a href="/halaman/status-order" target="_blank"><b><i class="fa fa-question-circle"></i></b></a></th>
	                                <th>Produk</th>
	                                <th>Harga</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <?php 
	                                // start paging config
	                                if (isset($_GET['cari'])) {
	                                    $cari_oid = $conn->real_escape_string(filter($_GET['cari']));
	                                    $cari_status = $conn->real_escape_string(filter($_GET['status']));
	                                    $cek_pesanan = "SELECT * FROM pembelian_pulsa WHERE oid LIKE '%$cari_oid%' AND status LIKE '%$cari_status%' ORDER BY id DESC"; // edit
	                                } else {
	                                    $cek_pesanan = "SELECT * FROM pembelian_pulsa ORDER BY id DESC"; // edit
	                                    }
	                                if (isset($_GET['cari'])) {
	                                    $cari_urut = $conn->real_escape_string(filter($_GET['tampil']));
	                                    $records_per_page = $cari_urut; // edit
	                                } else {
	                                    $records_per_page = 5; // edit
	                                    }

	                                $starting_position = 0;
	                                if(isset($_GET["halaman"])) {
	                                    $starting_position = ($conn->real_escape_string(filter($_GET["halaman"]))-1) * $records_per_page;
	                                    }
	                                    $new_query = $cek_pesanan." LIMIT $starting_position, $records_per_page";
	                                    $new_query = $conn->query($new_query);
	                                // end paging config

	                                while ($data_pesanan = $new_query->fetch_assoc()) {
	                                if ($data_pesanan['status'] == "Pending") {
	                                    $badge = "warning";
	                                } else if ($data_pesanan['status'] == "Partial") {
	                                    $badge = "danger";
	                                } else if ($data_pesanan['status'] == "Error") {
	                                    $badge = "danger";    
	                                } else if ($data_pesanan['status'] == "Processing") {
	                                    $badge = "info";    
	                                } else if ($data_pesanan['status'] == "Success") {
	                                    $badge = "success";    
	                                }
	                            ?>
	                            <tr>
	                            	<td><badge class="badge badge-<?php echo $badge; ?>"><?php echo $data_pesanan['status']; ?></badge>
	                                </td>
	                                <td><?php echo $data_pesanan['layanan']; ?></td>
	                                <td>Rp. <?php echo number_format($data_pesanan['harga'],0,',','.'); ?></td>
	                            </tr>
	                            <?php } ?>
	                        </tbody>
	                    </table>
	                </div>
	                <div class="text-center">
	                	<a href="/panel/monitoring-pulsa" class="btn btn-xs btn-primary"Ganti Password Akun > <i class="fa fa-info-circle"></i> Lainnya </a>
	                </div>    
	            </div>
            </div>
        </div>
    </div>
        <div class="col-sm-12 col-lg-6">
        <div class="row">
        	<div class="col-sm-12">
	            <div class="card-box">
	            	<center><h4 class="header-title text-dark"><i class="fa fa-spinner fa-spin text-dark"></i><b> MONITORING DIGITAL</h4></b></center>
	                <div class="table-responsive">
	                    <table class="table table-striped table-bordered nowrap m-0">
	                        <thead>
	                            <tr>
	                            	<th>Status <a href="/halaman/status-order" target="_blank"><b><i class="fa fa-question-circle"></i></b></a></th>
	                                <th>Produk</th>
	                                <th>Harga</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <?php 
	                                // start paging config
	                                if (isset($_GET['cari'])) {
	                                    $cari_oid = $conn->real_escape_string(filter($_GET['cari']));
	                                    $cari_status = $conn->real_escape_string(filter($_GET['status']));
	                                    $cek_pesanan = "SELECT * FROM pembelian_digital WHERE oid LIKE '%$cari_oid%' AND status LIKE '%$cari_status%' ORDER BY id DESC"; // edit
	                                } else {
	                                    $cek_pesanan = "SELECT * FROM pembelian_digital ORDER BY id DESC"; // edit
	                                    }
	                                if (isset($_GET['cari'])) {
	                                    $cari_urut = $conn->real_escape_string(filter($_GET['tampil']));
	                                    $records_per_page = $cari_urut; // edit
	                                } else {
	                                    $records_per_page = 5; // edit
	                                    }

	                                $starting_position = 0;
	                                if(isset($_GET["halaman"])) {
	                                    $starting_position = ($conn->real_escape_string(filter($_GET["halaman"]))-1) * $records_per_page;
	                                    }
	                                    $new_query = $cek_pesanan." LIMIT $starting_position, $records_per_page";
	                                    $new_query = $conn->query($new_query);
	                                // end paging config

	                                while ($data_pesanan = $new_query->fetch_assoc()) {
	                                if ($data_pesanan['status'] == "Pending") {
	                                    $badge = "warning";
	                                } else if ($data_pesanan['status'] == "Partial") {
	                                    $badge = "danger";
	                                } else if ($data_pesanan['status'] == "Error") {
	                                    $badge = "danger";    
	                                } else if ($data_pesanan['status'] == "Processing") {
	                                    $badge = "info";    
	                                } else if ($data_pesanan['status'] == "Success") {
	                                    $badge = "success";    
	                                }
	                            ?>
	                            <tr>
	                            	<td><badge class="badge badge-<?php echo $badge; ?>"><?php echo $data_pesanan['status']; ?></badge>
	                                </td>
	                                <td><?php echo $data_pesanan['layanan']; ?></td>
	                                <td>Rp. <?php echo number_format($data_pesanan['harga'],0,',','.'); ?></td>
	                            </tr>
	                            <?php } ?>
	                        </tbody>
	                    </table>
	                </div>
	                <div class="text-center">
	                	<a href="/panel/monitoring-digital" class="btn btn-xs btn-primary"Ganti Password Akun > <i class="fa fa-info-circle"></i> Lainnya </a>
	                </div>    
	            </div>
            </div>
        </div>
    </div>
</div>

<?php 
}
require 'lib/footer.php';
?>