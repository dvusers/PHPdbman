<!DOCTYPE html>
   <html>
   <head>
   <title>PHPdbman</title>
   <link rel="stylesheet" type="text/css" href="CSS/index.css">
   <link rel="shortcut icon" type=image/png" href="favicon.ico">
   
   <style type="text/css">
   @font-face{
   font-family:"product sans";src:url('typeface/ProductSansBold.ttf');}
   @font-face{font-family:"arial";src:url('typeface/arial.ttf');}
   </style>
   </head>
   <body>
 
	<!--CHECK LOGIN DATA --------------->
	<?php 
	if(isset($_GET['pesan'])){
	if($_GET['pesan']=="gagal")
	{echo "<div class='alert'>Incorrect Username/Password!</div>";}}?>
	

	    <!--THIS IS LOGIN BOX --------------->
      <div class="login_box"> 
	  <center>	 
	  <p class="login_title">Login</p><br/>

		  <!--POST DATA TO check_login.php ----->
		  <form action="check_login.php" method="post">
		  
		   

		    <!--USERNAME FORM -------------------->
		    <div class="id"> <label></label>Enter Username </div><br/>
	        <input type="text" name="username" class="form_login"placeholder="Username"><br/><br/>

		    <!--PASSWORD FORM--------------------->
		    <div class="pw"><label></label>Enter Password</div><br/>
		    <input type="password" name="password" class="form_login"placeholder="Password"><br/><br/>

		    <!--SUBMIT DATA TO check_login.php -->
		    <input type="submit" class="login_button" value="LOGIN">

		   </center><br/> 
		 </form>
	  </div>

 </body>
</html>