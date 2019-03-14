<!DOCTYPE html>
<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "productform";
try{
	$con = mysqli_connect($servername, $username,$password,$dbname);
	//echo("successful in connection");
}catch(MySQLi_Sql_Exception $ex){
	echo("error in connection");
}
if(isset($_POST['submit'])){
	$protitle =$_POST['protitle'];
	$prodesc =$_POST['prodesc'];
	$procost = $_POST['procost'];
	$prosell =$_POST['prosell'];
	$image =$_POST['image'];
 
}

?>
<html>
<head>
  <title>product</title>
</head>
<body>
    <form class="form-inline" action="abc.php" target="_blank" method="post" style="text-align: center;"> 
       <div class="form-group">    
         <label >Product title: </label> 
          <input type="text" name="txtname" class="form-control mx-sm-3"> 
        </div><br>
         <div class="form-group">  
           <label >Product Description:</label> 
           <input type="text" name="description"> 
         </div><br>
         <div class="form-group">
          <label >Production cost price:</label>
          <input type="text" name="txtcost"> <br>
        </div><br>
          <div class="form-group">
            <label >Production selling price:</label>
            <input type="text" name="txtsell">
        </div><br>
        <div class="form-group">
          <label for="fileselect">Multiple images for the product:</label> 
          <input type="file" name="upload" id="fileselect">
        </div><br><br>
        <div>
          <input type="Submit" value="Submit"> 
        </div>
</form>  

</body>
</html>

