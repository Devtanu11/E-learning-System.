<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<table class="table table-dark">
			  <thead>
			    <tr>
			      
			      <th scope="col">Fullname</th>
			      <th scope="col">Email</th>
			      <th scope="col">Password</th>
			      <th scope="col">Delete</th>
			      <th scope="col">Update</th>
			    </tr>
			  </thead>
			  <?php 
			  	include 'conn1.php';
			  	$query="SELECT * FROM admin";
			  	$result=mysqli_query($conn1,$query);
			  	while($res=mysqli_fetch_array($result))
			  	{	
			    ?> 
			  <tbody>
			    <tr>
			      
			      
			      <td><?php echo $res['fullname']?></td>
			      <td><?php echo $res['email']?></td>
			      <td><?php echo $res['password']?></td>
			      <td><a href="delete1.php?id=<?php echo $res['id']?>"><input type="button" class="btn btn-warning" value="Delete"></a></td>
			      <td><a href="update1.php?id=<?php echo $res['id']?>"><input type="button" class="btn btn-warning" value="Update"></a></td>
			   
			    </tr>
			    
			  </tbody>
			   <?php } ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>