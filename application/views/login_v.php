
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
		<title>Simpla Admin | Sign In</title>
		
	<?php $this->load->view ('template_admin/admin_header')?>	
	</head>
  
	<body id="login">
		
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
			
				<h1>Simpla Admin</h1>
				<!-- Logo (221px width) -->
				<img id="logo" src="<?php echo base_url()?>asset/resources/images/logo.png" alt="Simpla Admin logo" />
			</div> <!-- End #logn-top -->
			<div id="login-content">
				<form action="index.html">
			<div id="infoMessage"><?php echo $message;?></div>
				<?php echo form_open("auth/login");?>
					<div class="notification information png_bg">
					<div>
							Just click "Sign In". No password needed.
					</div>
					</div>		
					<p>
						<label>Email</label>
						<?php echo form_input($email);?>
					</p>
					<div class="clear"></div>
					<p>
						<label>Password</label>
						<?php echo form_input($password);?>
					</p>
					
					<div class="clear"></div>
					<p>
						<input class="button" type="submit" value="Sign In" />
					</p>
					
				</form>
			</div> <!-- End #login-content -->
			
		</div> <!-- End #login-wrapper -->
		
  </body>
  
</html>

