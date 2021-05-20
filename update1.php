<?php 
include 'conn1.php';
if(count($_POST)!=0)
{
	extract($_POST);
	extract($_GET);
  $query="UPDATE admin SET fullname='$fullname',email='$email',password='$password' WHERE id='$id'";
	$result=mysqli_query($conn1,$query);
	if($result==true)
	{
		echo "Record Inserted";
	}
	else
	{
		echo "fail";
	}
}

 ?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
  <div class="container">
  	<div class="row">
  		<div class="col-lg-6 m-auto">
  			<form method="post">
  			<div class="card">
  				<div class="card-header bg-danger">
  					<h1 class="text-center">Update</h1>
  				</div>
  				<div class="form-group">
  					<label for="name">Name</label>
  					<input type="text" class="form-control" name="fullname">
  				</div>
          <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="text" class="form-control" name="email">
          </div>
  				<div class="form-group">
  					<label for="password">Password</label>
  					<input type="password" class="form-control" name="password">
  				</div>
  				<button type="submit" class="btn btn-success">Submit</button>
  			</div>
  		    </form>
  		    
           <h4><a href="display1.php"><input type="button"  class="btn btn-primary" value="View users"></a></h4>
  		</div>
  	</div>
  </div>
</body>
</html>