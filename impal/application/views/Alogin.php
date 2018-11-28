<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>img/body.css">
</head>
<body>
<?php 
  if ($this->session->flashdata('sukses')){
		$pesan = $this->session->flashdata('sukses');
		echo "<script> alert('$pesan');</script>";
	}
?>
	<div class="container-fluid" style="padding-left: 0;padding-right: 0;">
		<div class="container">
			<div class="container">
				<div class="container">
					<div class="container">
						<div class="row" style="margin-top: 150px;margin-bottom: 170px;opacity: 0.9">
							<div class="col-md-2 rounded-left" style="background-color: black;">
							
							</div>
							<div class="col-md-8" style="background-color: black;">
								<h1 style="text-align: center;margin-top: 20px;color: #C0C0C0;">Login</h1>
								<form method="post" action="<?php echo base_url();?>Calogin/login">
								  <div class="form-group">
								    <label for="uname" style="color: #C0C0C0;"><b>Username</b></label>
								    <input type="text" class="form-control" id="uname" name="uname" aria-describedby="unamehelp" placeholder="username">
								  </div>
								  <div class="form-group">
								    <label for="pass" style="color: #C0C0C0;"><b>Password</b></label>
								    <input type="password" class="form-control" id="pass" name="pass" placeholder="password">
								  </div>
								  <button type="submit" class="btn btn-block btn-secondary" style="margin-bottom: 20px;px;float: right;background-color:#C0C0C0;color: black;"><b>Masuk</b></button>
								</form>
							</div>
							<div class="col-md-2 rounded-right" style="background-color: black;">
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer" style="background-color: black;">
			<div class="container-fluid">
				<div class="row" style="color: #C0C0C0;">
					<div class="col-md-4">
						<p style="text-align: left;margin-top: 10px;">PT. Cah Kereta</p>
					</div>
					<div class="col-md-4">
						<p style="text-align: center;margin-top: 10px;margin-top: 10px;">Copyright © CK</p>
					</div>
					<div class="col-md-4">
						<p style="text-align: right;margin-top: 10px;">Download the android version here <a href="#"><img src="img/playstore.png"></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
 </body>
</html>