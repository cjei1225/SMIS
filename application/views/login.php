<html>
	
	<head>
	 <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Heffy</title>
<?php  include($_SERVER['DOCUMENT_ROOT'].'/SMIS/application/views/header.php'); ?>
    <style type="text/css">
    .container
    {
    	margin-top: 17%;
    
   
    }
    </style>
	</head>
	<body style="background-color:#521812;color:white;">

		<div class="container col-md-3 col-md-offset-5" >
			<div class="bs-docs-section row">
				<div class="col-lg-6 col-md-offset-1">
					<div class="page-header">
						<h1 id="forms">Heffy SMS</h1>
					</div>
				</div>
				
				<div class="row">
					<div class="col-lg-8" >
						<div class=" bs-component">
							<form class="form-horizontal" method='post' action='index.php/welcome/login'>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input class="form-control" type="text" placeholder="Username" name='username' id="form_input_size">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
										<input class="form-control" type="password" placeholder="Password" name='password' id="form_input_size">
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<button type="submit" class="btn btn-block" style="background-color:#ded17d;color:black;">Login</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		

<?php  include($_SERVER['DOCUMENT_ROOT'].'/SMIS/application/views/scripts.php'); ?>
	</body>



</html>