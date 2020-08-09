<!DOCTYPE html>
<html>
<head>
	<script language="JavaScript">
  var txt=" SIPAMAPA SMP NEGERI 7 KOTA BENGKULU"
  var kecepatan=500;var segarkan=null;function bergerak() { document.title=txt;
  txt=txt.substring(1,txt.length)+txt.charAt(0);
  segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
</script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="<?php echo base_url('asset/img/wave.png') ?>">
	<div class="container">
		<div class="img">
			<img src="<?php echo base_url('asset/img/bg.svg') ?>">
		</div>
		<div class="login-content">
			<form action="<?php echo base_url('login/ceklogin') ?>" >
				<img src="<?php echo base_url('asset/img/avatar.svg') ?>">
				<h2 class="title">LOGIN SIPAMAPA</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nama Pengguna</h5>
           		   		<input type="text" class="input" name="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Kata Sandi</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
            	<input type="submit" class="btn" value="Login">
              <a href="#">Kembali ke Halaman Utama</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url('asset/js/main.js')?>"></script>
</body>
</html>