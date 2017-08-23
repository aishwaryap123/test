<?php
session_start();
global  $products;
$products=array(array('id'=>1,
						'name'=>"Product1",
						'price'=>"$150",
						'image'=>"football.png"
							),
						array('id'=>2,
							'name'=>"Product2",
							'price'=>"$120",
							'image'=>"tennis.png"
				             ),
               			array('id'=>3,
               				'name'=>"Product3",
               				'price'=>"$90",
               				'image'=>"basketball.png"
               				 ),
               			array('id'=>4,
               				'name'=>"Product4",
               				'price'=>"$110",
               				'image'=>"table-tennis.png"
               				),
               			array('id'=>5,
               				'name'=>"Product5",
               				'price'=>"$80",
               				'image'=>"soccer.png"

               				),
               			);
		$cart=array();

  					 
  				if(isset($_POST['Submit']))
   					{
   						$id=$_POST['p1'];
   					
   					}
    				
    				
    					 function getProduct($id,$cart){
	  							 global $products;
	   								 foreach ($products as $key => $value) 
             									{
 	            								 if($products[$key]['id']== $id)
 	            										{
 	            											$value['quant']=1;
                 											$cart[]=$value;
                 											
                 											
                 											return $cart;

                 										
                 										}

            									 }
            			 						
  											 }
    						 function productExistInCart($id,$cart){
       							foreach($cart as $key=>$product){
    	  							 if($cart[$key]['id']==$id){
    										return true;
    											}
    												
    											}
    											return false;
									}
									function updateProduct($id,$cart){
  										 foreach ($cart as $key => $value) {
      		  		 						 if($cart[$key]['id']==$id){
          										$cart[$key]['quant']=$cart[$key]['quant']+1;

          									return $cart;

         				                  }
   	
   										}
	
									}

       		?>

	<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){		
	if(!isset($_SESSION['cart']))
  	 {
  	 	
		$cart=getProduct($id,$cart);
		
	
		 $_SESSION['cart']=$cart;
         




		   
	}
	else{
		 $cart=$_SESSION['cart'];
		   
    	  
   		 if(productExistInCart($id,$cart))
   		 {
    		$cart=updateProduct($id,$cart);

	  	 	 $_SESSION['cart']=$cart;
	  	 	 $cart=$_SESSION['cart'];
	  	 }
	  	 else{

	  	 	$cart=getProduct($id,$cart);
	  	 	
	  	 	 $_SESSION['cart']=$cart;
	  	 	 $cart=$_SESSION['cart'];
	  	 }
		
	}

	
}	
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
				   if(isset($cart)){
          			foreach ($cart as $x => $y) {
 	  			?>
 	  			<tr>
 				<td><?php echo $y['id'];?></td>
 				<td><?php echo $y['name']; ?></td>
 				<td><?php echo $y['price']; ?></td>
 				<td><?php echo $y['quant']; ?></td>
 				<td><img src="images/<?php echo $y['image']; ?>"></td>




 				</tr>
 				<?php
          			
      			}
       		}
       		?>
     		</table>
		
	</div>
	<div id="main">
		<div id="products">
		 <?php foreach($products as $key=>$product) :
		  ?>
			<form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="POST">
				<div id='<?php echo $product['id']; ?>'class="product">
					<input type="hidden" name="p1" value="<?php echo $product['id']; ?>">
					<img src="images/<?php echo $product['image']; ?> ">
					<h3 class="title" ><a href="#"><?php echo $product['name']; ?></a></h3>
					<span name="price"><?php echo $product['price']; ?></span>
					<br>
					<input type="submit" name="Submit" value="Submit">
				</div>
			</form>

			<?php endforeach; ?>
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