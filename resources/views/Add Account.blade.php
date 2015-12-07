<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<ul class="nav nav-tabs">
			<li><a href="#">HOME</a></li>
			<li><a href="#">ENROLLMENT</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">ACCOUNTS
					<span class="caret"></span>	
				</a>
				<ul class="dropdown-menu">
					<li><a href="#">Add Account</a></li>
					<li><a href="#">Edit Account</a></li>
					<li><a href="#">My Account</a></li>
				</ul>
			</li>
			<li><a href="#">E-MAIL</a></li>
			<li><a href="#">STUDENT</a></li>
			<li><a href="#">REPORTS</a></li>
		</ul><br><br>
		<form role="form" action="" method="">
			<div class="form-group">
				<div class="row">
					<div class="col-md-4">
						FirstName:<input type="text" class="form-control">
						LastName: <input type="text" class="form-control">
						ID:       <input type="text" class="form-control">
						Password: <input type="text" class="form-control">
						          <input type="submit" value="Add" class="btn btn-primary">
					</div>
				</div>
			</div>
		</form>
	</div>
</body>		
</html>
