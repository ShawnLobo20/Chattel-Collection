<?php
  include "connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Storing Login details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <style>
		*{
			box-sizing:border-box;
		}
		
		.row{
			width:100%;
			height:200px;
			border:1px solid black;
			background:url(page1.jpg);
			background-repeat: repeat;
			
			
		}
	
		#t 
		{
			
			background-color:#950909;
			height:100px;
			border-radius:10px;
			margin-left:-30px;
			margin-right: -1%;
			margin-top:-1%;
			box-shadow: 2px 3px #D6D1CB;
		}
	
		#he 
		{
			color:white;
			font-size:80px;
			font-style:italic;
			
		}
		
		#bo
		{	
			background-color:gray;
			border-radius:20px;
			margin-left:300px;
			margin-right:300px;
		}
		
		.centered 
		{
			position: absolute;
			top: 30%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
		
		
		ul.oo
		{
			list-style-type: none;
			margin-top: 7px;
			margin-left: -10px;
			margin-right: -10px;
			padding: 0;
			overflow: hidden;
			background-color: #333;
		}		

		li 
		{
			float: left;
		}

		li a 
		{
			display: block;
			color: white;
			text-align: center;
			padding: 14px 80px;
			text-decoration: none;
		}

		li a:hover:not(.active) 
		{
			background-color: #111;
		}

		.active 
		{
			background-color: #4CAF50;
		}
		
		
		header{
			text-align:center;
		}
		
		footer{
			text-align:right;

			opacity:0.5;
			
		}
		
		
		.mul{
			
			height:200px;
			width:300px;
			float:right;
			margin-top:-87px;
			background: url(furniturepng.png);
			background-repeat: no-repeat;
			background-size:contain;
			background-position: top right;
			
			
		}
		
		
		
		
		body { background-color:#dfcd9f; }
		
		
		
		@media (max-width:767px){
				 
				.col-sm-12{ 
					float:left; 
					width:100%; 
					
				}
				
				
				#bo{
				
					background-color: gray;
					border-radius:20px;
					margin-left:30px;
					margin-right:30px;
					overflow:auto;
				}
				
				
				#t{
					
					background-color:#950909;
					height:200px;
					border-radius:10px;
					margin-left:-1%;
					margin-right: -1%;
					margin-top:-1%;
					box-shadow: 2px 3px #D6D1CB;
				}
		}
		
	
	</style>


</head>
<body>

<div id="t">
        <header id="he"> Chattel Collection </header> 
</div>


<div class="container">
  <div class="col-lg-4">
  <h2>Item Cart</h2>
  <form action="" name="form1" method="post">

    <div class="form-group">
      <label for="Item Name">Item Name:</label>
      <input type="text" class="form-control" id="iname" placeholder="Enter Item Name" name="iname">
    </div>
    <div class="form-group">
      <label for="Item Price">Item Price:</label>
      <input type="text" class="form-control" id="iprice" placeholder="Enter Item Price" name="iprice">
    </div>
    <div class="form-group">
      <label for="Quantity">Item Quantity:</label>
      <input type="text" class="form-control" id="iquantity" placeholder="Enter Item Quantity" name="iquantity">
    </div>
    <div class="form-group">
      <label for="Color">Color:</label>
      <input type="text" class="form-control" id="icolor" placeholder="Enter Item Colour" name="icolor">
    </div>
      <br><br>
      Enter user id for updation, deletion or searching the user's records:
      <br><br> <input type="text" class="form-control" id="tid" placeholder="Enter item id" name="tid"> <br> <br>
      
      
    <button type="submit" name="insert" class="btn btn-default">Insert</button>
    <button type="submit" name="update" class="btn btn-default">Update</button>
    <button type="submit" name="delete" class="btn btn-default">Delete</button>
    <button type="submit" name="search" class="btn btn-default">Search</button>
    <br><br>
  </form>
</div>
</div>
<div class="col-lg-12">
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Item Id</th>
        <th>Item Name</th>
        <th>Item Price</th>
        <th>Item Quantity</th>
        <th>Item Color</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $res=mysqli_query($link,"select * from items");
      while($row=mysqli_fetch_array($res))
      {
        echo "<tr>";
        echo "<td>"; echo $row["id"];echo "</td>";
        echo "<td>"; echo $row["iname"];echo "</td>";
        echo "<td>"; echo $row["iprice"];echo "</td>";
        echo "<td>"; echo $row["iquantity"];echo "</td>";
        echo "<td>"; echo $row["icolor"];echo "</td>";
        echo "</tr>";
      }

      ?>
    </tbody>
  </table>

<h3>the searched record is:</h3><br>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>Item Id</th>
        <th>Item Name</th>
        <th>Item Price</th>
        <th>Item Quantity</th>
        <th>Item Color</th>
      </tr>
    </thead>

    <tbody>

<?php
      $res=mysqli_query($link,"select * from items where id='$_POST[tid]'");
      while($row=mysqli_fetch_array($res))
      {
        echo "<tr>";
        echo "<td>"; echo $row["id"];echo "</td>";
        echo "<td>"; echo $row["iname"];echo "</td>";
        echo "<td>"; echo $row["iprice"];echo "</td>";
        echo "<td>"; echo $row["iquantity"];echo "</td>";
        echo "<td>"; echo $row["icolor"];echo "</td>";
        echo "</tr>";
      }

  ?>

    </tbody>

    </table>

</div>

<div class="cent" style="margin-left:45%"><a href="index.html"> <img src="back.png" height="5%" width="5%"/> Back to Home</a> </div>

<footer> Copyrights &copy; 2020, All Rights Reserved.
    </footer >
    <hr style=" margin-left:-10%; margin-top:50px; width:200%; height:50px; background-color:#950909; color:#950909">


</body>


<?php
if(isset($_POST["insert"]))
{
  mysqli_query($link,"insert into items values(NULL,'$_POST[iname]','$_POST[iprice]','$_POST[iquantity]','$_POST[icolor]')");
?>
<script type="text/javascript">
  window.location.href= window.location.href;
</script>
<?php
}
if(isset($_POST["delete"]))
{
  mysqli_query($link,"delete from items where id='$_POST[tid]'");
?>
<script type="text/javascript">
  window.location.href= window.location.href;
</script>
<?php
}
if(isset($_POST["update"]))
{
  mysqli_query($link,"update items set iname='$_POST[iname]', iprice='$_POST[iprice]', iquantity='$_POST[iquantity]', icolor='$_POST[icolor]' where id='$_POST[tid]'");
?>
<script type="text/javascript">
  window.location.href= window.location.href;
</script>
<?php
}

if(isset($_POST["search"]))
{
  mysqli_query($link,"select * from items where id='$_POST[tid]'");
?>

<?php
}
?>

</html>