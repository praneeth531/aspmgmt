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
					<li><a href="myaccount">My Account</a></li>
				</ul>
			</li>
			<li><a href="#">E-MAIL</a></li>
			<li><a href="#">STUDENT</a></li>
			<li><a href="#">REPORTS</a></li>
		</ul><br><br>

		<!-- <form role="class"> -->
		{!! Form::model($user, array('url' =>'/myaccount', 'class'=>'form-horizontal', 'method' => 'POST')) !!}
			<div class="form-group">
				<div class="row">
					<label class="col-md-2 control-label">Userid</label>
					     <div class="col-md-4"> 
                            {!! Form::text('userid', Input::old('userid'), array('class' => 'form-control')) !!}
           		    </div> 
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<label class="col-md-2 control-label">Firstname</label>
					    <div class="col-md-4">
                           {!! Form::text('firstname', Input::old('firstname'), array('class' => 'form-control')) !!}
       				
					</div>
				</div>
			</div>


			<div class="form-group">
				<div class="row">
					<label class="col-md-2 control-label">Lastname</label>
					    <div class="col-md-4">
                           {!! Form::text('lastname', Input::old('lastname'), array('class' => 'form-control')) !!}
           
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<label class="col-md-2 control-label">Email-Id</label>
					    <div class="col-md-4">
                           {!! Form::text('email', Input::old('email'), array('class' => 'form-control')) !!}
           
					</div>
				</div>
			</div>


			<div class="form-group">
				<div class="row">
					<label class="col-md-2 control-label">Password</label>
					    <div class="col-md-4">
                          {!! Form::text('password', Input::old('password'), array('class' => 'form-control')) !!}      				
					</div>
				</div>
			</div>


			<div class="form-group">
				<div class="row">
					    <div class="col-md-6 col-md-offset-2">
                               <button type="submit" class="btn btn-primary">
									save	
					</div>
				</div>
	
   
	</div>
</body>		
