<?php
    session_start();
    include "config.php";
    if(isset($_POST['id'])){
      $id=$_POST['id'];
    }
    
    $cart=array();
    $products=array();
    $dltArray=array();
    $stmt=$conn->prepare("SELECT * FROM product where id=?");
    $stmt->bind_param("i",$id);
        $stmt->bind_result($r_id,$r_name,$r_price,$r_image);
                  $stmt->execute();
                   // $stmt->close();
                    while($stmt->fetch()){
                     
                                            
                                                            
                                                          
                      $products=array(array("id"=>$r_id,
                                            "name"=>$r_name,
                                            "price"=>$r_price,
                                            "image"=>$r_image
                                          ));
                      if(isset($_SESSION['products'])){
                        array_push($_SESSION['products'], $products);
                      }
                        else{
                            $_SESSION['products']=$products;
                           }
                      }
                    function deleteProduct($did,$cart){
                       foreach($cart as $key=>$product){
                            if($cart[$key]['id']==$did){
                              unset($cart[$key]);
                              reset($cart);
                              return $cart;
                            }
                       }

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
                              global $products;
                                foreach ($cart as $key => $value) {
                                  if($cart[$key]['id']==$id){
                            
                                    $cart[$key]['quant']=$cart[$key]['quant']+1;
                                      foreach ($products as $k => $v) {
                                        if($v['id']==$cart[$key]['id']){

                                            $cart[$key]['price']=($cart[$key]['quant'])*($v['price']);

                                                return $cart;

                                                }

                                              }
                                                 
                                            }
                                               
                                          }
                                        }
                              if(!isset($_SESSION['cart'])){
                                $cart=getProduct($id,$cart);
                                    $_SESSION['cart']=$cart;
                                       echo json_encode(array('cart'=>$cart));
                                  }
                                  else{
                                    $cart=$_SESSION['cart'];
                                      
                                   
                                    
                                    if(productExistInCart($id,$cart))
                                      {
                                        $cart=updateProduct($id,$cart);

                                        $_SESSION['cart']=$cart;
                                          $cart=$_SESSION['cart'];
                                            echo json_encode(array('cart'=>$cart));
                                     }  
                                        else if(isset($_POST['dltid']))
                                      {
                                          $did=$_POST['dltid'];
                                         $cart=deleteProduct($did,$cart);
                                         $_SESSION['cart']=$cart;
                                           $cart=$_SESSION['cart'];
                                      }
                                      
                                      else {

                                          $cart=getProduct($id,$cart);
                                          
                                            $_SESSION['cart']=$cart;
                                             $cart=$_SESSION['cart'];
                                              echo json_encode(array('cart'=>$cart));
                                         }
                                       }
                                      ?>
                                         
                                      
                                  
                    
                     
                    
                
                  
                
                    

                                      
                                          

                                  
                         
                                        
                        
    
                                                     
      
                                 
  
                                
                     
                              

                                        
                                        
                                        
                                      


                                      
                              

                            


			

  					 
  				
    				
    				
    					 

       		
 
	
       
           

            
                
        
         




       
 