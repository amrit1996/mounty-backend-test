<!DOCTYPE html>

<html>
<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	  
</head>
<body class="container">
	<h1 class="text-center text-danger mb-5" > Product </h1>

	<div class="row">
	<?php
		$con =mysqli_connect('localhost','root');
		mysqli_select_db($con,'productform');
		$name=$_POST["txtname"];
		$description=$_POST["description"];
		$txtcost=$_POST["txtcost"];
		$txtsell=$_POST["txtsell"];
		$upload=$_POST["upload"];
		$query2="INSERT INTO `prodform`(`protitle`, `prodesc`, `procost`, `prosell`, `image`) VALUES 
		('$name','$description','$txtcost','$txtsell','$upload')";
		$queryfire2 = mysqli_query($con,$query2);
		$query ="SELECT  `protitle`, `prodesc`, `procost`, `prosell`, `image` FROM `prodform` order by id ASC";

		$queryfire = mysqli_query($con,$query);


		$num = mysqli_num_rows($queryfire);

		if($num>0)
		{
			while($produ =mysqli_fetch_array($queryfire)){
				?>

				<div class="col-lg-3 col-md-3 col-sm-12">
					<form>
						<div id="result" class="card">
							<h6 class="card-title bg-info text-white p-2 text-uppercase"><?php 
							  echo $produ['protitle'];?></h6>
							<div class="card-body">
								<img src ="<?php 
							  echo $produ['image'];?>  "
							  alt="phone" class="img-fluid mb-2">
							  <h6>&#8377;<?php 
							  echo $produ['procost'];?></h6>
							  <h6><label>Description:</label><br>
							  	<?php 
							  echo $produ['prodesc'];?></h6>
							</div>

							<div>
								<button class="btn btn-success" onclick="addtocart(<?=$produ['id'];?>)" role="button"> Add to cart</button>
							</div>
						</div>
					</form>
					
				</div>




		<?php

			}
		}




		?>




	  		

     		
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</body>
<script type="text/javascript">
	function addToCart(pid){
		$.ajax({
			url: "action.php",
			data:"pid=" +pid+ "&action=add",
			method: "post"
		}).done(function(response){
			$('#result').html(response);
		})
	}
</script>
</html>