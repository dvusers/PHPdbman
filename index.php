<!DOCTYPE html>
<html>
<head>
	<title>tes database</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="shortcut icon" type=image/png" href="favicon.ico">
	<script src="javas.js"></script>
	<style type="text/css">
	@font-face{
		font-family:"product sans";
		src:url('ProductSansBold.ttf');
	}
	@font-face{
		font-family:"arial";
		src:url('arial.ttf');
	}
	</style>
</head>
<body>
 <font face="Product sans">
 </font>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password yang anda masukan tidak sesuai !</div>";
		}
	}
	?>
	
<div class="kotak_login">
       
           
		 <p class="tulisan_login">Silahkan login</p>
         
			<br/>
		<form action="cek_login.php" method="post">&nbsp;&nbsp;&nbsp
		 <div class="id"> 
		 
		 <label></label>Masukan Username </div>
          <br/>
	        <center><input type="text" name="username" align="center" class="form_login"autofocus required title="Mohon Masukan Nama Pengguna Yang Benar" 
			placeholder="Nama Pengguna .."></center>
	<br/>
			
			 <br/>
		 <div class="pw"><label></label>Masukan Kata Sandi</div>
		 <br/>
			<center><input type="password" name="password" class="form_login"autofocus required title="Mohon Masukan Kata Sandi Yang benar" 
			
			placeholder="Kata Sandi .."></center>
			
			
			<br/>
			<br/>
			
			<center><input type="submit" class="tombol_login" value="LOGIN"></center>
             
			   
			<br/> 
		
		</form>
		
	</div>

</body>
</html>