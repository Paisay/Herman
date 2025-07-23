<?php
	date_default_timezone_set('Asia/Jakarta');
	error_reporting(0);

	// status
	$maintenance = 0; //Ganti jadi 1 jika sedang MT
	if($maintenance == 1) {
		header("location: /offline"); //Ganti dengan landing page maintenance Anda
	}

	// database
	$config['db'] = array(
		'host' => 'localhost',
		'name' => 'requimeb_demo', //Ganti dengan nama database anda
		'username' => 'requimeb_ppob', //Ganti dengan username database anda
		'password' => '#robbi291006#' //Ganti dengan password database anda
	);

	$conn = mysqli_connect($config['db']['host'], $config['db']['username'], $config['db']['password'], $config['db']['name']);
	if(!$conn) {
		die("Koneksi Gagal : ".mysqli_connect_error());
	}

	// Konfigurasi url domain
	$config['web'] = array(
		'url' => 'https://demo.requimeboost.id/', //diakhiri garis miring. ex: https://requime.com/
		'url_canonical' => 'https://demo.requimeboost.id' //tanpa garis miring. ex: https://requime.com
	);

	// date & time
	$date = date("Y-m-d");
	$time = date("H:i:s");

	// API google captcha v2 Checkbox: https://www.google.com/recaptcha/admin/create
	$config['captcha'] = array(
		'sitekey' => '6LeeAoYrAAAAADhpDBY2TnfSiEr_JuZ7WSRv-9s8',
		'secretkey' => '6LeeAoYrAAAAAD5hyCjdF7oxGiHLTxISuHJxW8PF'
	);

	// Email SMTP, Keamanan SSL, PORT 465
	// EMAIL MAILER INI DIREKOMENDASIKAN MENGGUNAKAN EMAIL SMTP HOSTING
	// INFORMASI PORT DAN HOST DIDAPAT SETELAH MEMBUAT EMAIL DI CPANEL
	$config['email'] = array(
		'enkripsi' => 'ssl', //ssl atau tls, direkomendasikan ssl
		'mailhost' => 'HOST EMAIL', //host mail, ex: mail.kincaiseluler.my.id
		'mailport' => 'PORT EMAIL', //port email, ex: 465
		'mailusername' => 'EMAIL PENGIRIM', //email, ex: support@kincaiseluler.my.id
		'mailpassword' => 'PASSWORD EMAIL' //password email
	);

	// versi
	$versi = '719';

	require("lib/function.php");

?>