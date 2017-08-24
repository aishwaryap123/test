<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style@1.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php

if(isset($_POST['p1']))
{$id=$_POST['p1'];}
$cart=array();
 
   		$products=array(array('id'=>1,
								'name'=>"Product1",
								'price'=>"$150",
								'quant'=>1),
						array('id'=>2,
							'name'=>"Product2",
							'price'=>"$120",
							'quant'=>1),
               			array('id'=>3,
               				'name'=>"Product3",
               				'price'=>"$90",
               				'quant'=>1),
               			array('id'=>4,
               				'name'=>"Product4",
               				'price'=>"$110",
               				'quant'=>1),
               			array('id'=>5,
               				'name'=>"Product5",
               				'price'=>"$80",
               				'quant'=>1),
               			);
   		if ($_SERVER["REQUEST_METHOD"] == "POST"){
     	$i=0;
     	if(isset($_SESSION['cart']))
        {    
              $cart=$_SESSION['cart'];
     	     foreach ($cart as $key => $value) 
             {
 	             if($cart[$key]['id']== $id)
 	             {
                         $cart[$key]['quant']=$cart[$key]['quant']+1;
                         $i=1;
                         $_SESSION['cart']=$cart; 
                         	 print_r($cart);  
                 }
             }
         }
         if($i==0)
 	     {
 	         foreach ($products as $key => $value) 
             {
 	             if($products[$key]['id']== $id)
 	             {
                 	 $cart[]=$value;
                 	 $_SESSION['cart']=$cart;

                 }
             }
         }
     }
//print_r($_SESSION['cart']);
     
    
     
?>
	<div id="header">
		<h1 id="logo">Logo</h1>
		<nav>
			<ul id="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
	</div>
	<div id="div2">
		<table>
     		<tr><th><h2>Id</h2></th><th><h2>Product Name</h2></th><th><h2>Price</h2></th><th><h2>Quantity</h2></th></tr>
      		<?php
      			if ($_SERVER["REQUEST_METHOD"] == "POST")
      			{
          			foreach ($cart as $x => $y) {
 	  		?>
 			<tr>
 			<td><?php echo $y['id'];?></td>
 			<td><?php echo $y['name']; ?></td>
 			<td><?php echo $y['price']; ?></td>
 			<td><?php echo $y['quant']; ?></td>
 			</tr>
      		<?php
          			}
      			}
       		?>
         </table>
		
	</div>
	<div id="main">
		<div id="products">

			<form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="POST">
				<div id="product-101" class="product">
					<input type="hidden" name="p1" value="1">
					<img src="images/football.png">
					<h3 class="title" ><a href="#">Product 101</a></h3>
					<span name="price">Price: $150.00</span>
					<br>
					<input type="submit" name="Submit" value="Submit">
				</div>
			</form>
			<form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="post">
				<div id="product-101" class="product">
					<input type="hidden" name="p1" value="2">
					<img src="images/tennis.png">
					<h3 class="title"><a href="#">Product 102</a></h3>
					<span>Price: $120.00</span>
					<br>
					<input type="submit" name="Submit" value="Submit">
				</div>
			</form>
			<form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="post">
				<div id="product-101" class="product">
					<input type="hidden" name="p1" value="3">
					<img src="images/basketball.png" name="image" value="images/basketball.png">
					<h3 class="title"><a href="#">Product 103</a></h3>
					<span>Price: $90.00</span>
					<br>
					<input type="submit" name="Submit" value="Submit">
				</div>
			</form>
			<form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="post">
				<div id="product-101" class="product">
					<input type="hidden" name="p1" value="4">
					<img src="images/table-tennis.png">
					<h3 class="title"><a href="#">Product 104</a></h3>
					<span>Price: $110.00</span>
					<br>
					<input type="submit" name="SUBMIT" value="Submit">
				</div>
			</form>
			<form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="post">
				<div id="product-101" class="product">
					<input type="hidden" name="p1" value="5">
					<img src="images/soccer.png">
					<h3 class="title"><a href="#">Product 105</a></h3>
					<span>Price: $80.00</span>
					<br>
					<input type="submit" name="Submit" value="Submit">
				</div>
			</form>
		</div>
	</div>
	<div id="footer">
		<nav>
			<ul id="footer-links">
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Declaimers</a></li>
			</ul>
		</nav>
	</div>
	
</body>
</html>
