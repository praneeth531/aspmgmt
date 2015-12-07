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
			<li class="active"><a href="#">HOME</a></li>
			<li><a href="#">ENROLLMENT</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">ACCOUNTS
					<span class="caret"></span>	
				</a>
				<ul class="dropdown-menu">
					<li><a href="addaccount">Add Account</a></li>
					<li><a href="#">Edit Account</a></li>
					<li><a href="myaccount">My Account</a></li>
				</ul>
			</li>
			<li><a href="#">E-MAIL</a></li>
			<li><a href="#">STUDENT</a></li>
			<li><a href="#">REPORTS</a></li>
		</ul><br><br>
		<div class="jumbotron">
			<table class="table">
				<thead>
					<tr>
						<th>#CRN</th>
					    <th>faculty</th>
					    <th>strength</th>
					</tr>
				</thead>
				<tbody>
				  <?php 
				    $sections = \DB::table('sections')->get();
                     foreach($sections as $section)
                     {
                     	echo "<tr>";
                         echo "<td>$section->CRN </td>";
                         echo "<td>$section->facultyname </td>";
                         echo "<td>$section->strength </td>";
                        echo "</tr>";

                     }
				   ?>			
				</tbody>
			</table>
		</div>
	</div>
</body>