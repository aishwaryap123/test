		<?php
		include 'config.php';
		session_start();
		
		
		


		if(isset($_POST['submit'])){
			
			$name=$_POST['product_name'];
			$price=$_POST['product_price'];
			$image="";

		}

		if(isset($_GET['d_id'])){
			$stmt = $conn->prepare("DELETE FROM product WHERE id=?");
	    		$stmt->bind_param("i", $_GET['d_id']);
	    			$stmt->execute();
	    				$stmt->close();
	    					header("location:task12.php");
		}
		if(isset($_GET['e_id'])){
			$_SESSION['id']=$_GET['e_id'];
				$stmt= $conn->prepare("SELECT * FROM product where id=? ");
					$stmt->bind_param("i",$_GET['e_id']);
						$stmt->execute();
							$stmt->bind_result($i1,$n1,$p1,$im1);
								while($stmt->fetch()){
										$i=$i1;
										$n=$n1;
										$p=$p1;
										$im=$im1;
									}
							$stmt->close();
			
		}
		if(isset($_POST['submit'])){
		
		$filename="";
			if(isset($_FILES['image'])){
			
				if(move_uploaded_file($_FILES['image']['tmp_name'],"images/".$_FILES['image']['name'])){
					$filename = $_FILES['image']['name'];
						$image=$filename;
			 }
			}

		}
		if(isset($_POST['edit'])){
			$stmt = $conn->prepare("UPDATE product SET name=?,price=? WHERE id=?");
				$stmt->bind_param("ssi", $_POST['product_name'],$_POST['product_price'],$_SESSION['id']);
					$stmt->execute();
						$stmt->close();
							unset($_SESSION['id']);
								session_destroy();
		}
		$html="";
			$stmt=$conn->prepare("INSERT INTO product (name,price,image) values (?,?,?)");
				$stmt->bind_param("sss",$name,$price,$image);
					$stmt->execute();
						$stmt->close();
							$stmt= $conn->prepare("SELECT * FROM product ");
								$stmt->execute();
									$stmt->bind_result($rowid,$rowname,$rowprice,$rowimage);
		
			while($stmt->fetch()){
				 $id = $rowid;
	             $name = $rowname;
	             $price = $rowprice;
	             $image=$rowimage;
	             

	           $html.= '<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$price.'</td><td><img src="'.$image.'"</td>
	          <td><a href="task12.php?d_id='.$id.'" >Delete</a></td> <td><a href="task12.php?e_id='.$id.'" >Edit</a></td></tr>';
	           

	              
	              
			
		}
		$stmt->close();
	?>	
	
<!DOCTYPE html>
<html>
<head>
	<title>jQuery</title>
	<link rel="stylesheet" type="text/css" href="style12.css">
	
	<!--<script type="text/javascript" src="task@8.js"></script>-->
</head>
<body>
	<div id="wrapper">
		<div id="add_product_form">
			<form action="task12.php" method="post"  enctype="multipart/form-data">
			<label for="product_name">
				<span>Product Name</span> 
				<input type="text" name="product_name" value="<?php if(isset($_GET['e_id'])){ echo $n; } ?>"
				id="product_name">
			</label>
			<label for="product_price">
				<span>Product Price</span> 
				<input type="text" name="product_price" value="<?php if(isset($_GET['e_id'])){ echo $p; } ?>"id="product_price">
			</label>
			<label for="product_image">
				<span>Product Image</span> 
				<input type="file" name="image" value="upload_image" id="imageToupload">
				
			</label>
			<p class="submit">
			<?php if(!isset($_GET['e_id'])){?>
				<input type="submit" name="submit" id="add_product" value="Add Product">
			<?php } else {?>
				<input type="submit" name="edit" id="edit_product" value="Edit Product">
				<?php }?>
			</p>
			
			</form>
			<div id="product">
			<table>
				<tr><th>Product Id</th><th>product Name</th><th>Product Price</th><th>product Image</th><th>Action
				</tr> <?php echo $html;?>
				</tr>
			</table>
			</div>
		</div>
