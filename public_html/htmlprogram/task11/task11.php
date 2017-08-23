<?php
              session_start();
              global $products;
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

                              function getProduct($id,$cart){
                                      global $products;
                                          foreach ($products as $key => $value) 
                                            {
                                                if($products[$key]['id']== $id)
                                                 {
                                                     $cart[]=$value;
                                                     return $cart;         
                                                                     
                                                 }
                                            }
                                       }
                                                       
                                function productExistInCart($id,$cart){
                                                          foreach($cart as $key=>$product)
                                                          {
                                                            if($cart[$key]['id']==$id)
                                                            {
                                                              return true;
                                                            }
                                                          }
                                                           return false;
                                                       }                               
                                         
                                             
                                      
                                  $cart=array();

                                    if(isset($_POST['id'])){
                                      $pid=$_POST['id'];
                                          
                                            
                                      if ($_SERVER["REQUEST_METHOD"] == "POST"){    
                                      
                                      
                                      
                                       if(!isset($_SESSION['cart']))
                                       {

                                         $cart=getProduct($pid,$cart);
                                          $_SESSION['cart']=$cart;
                                           echo json_encode(array('cart'=>$cart));

                                        }
                                      
                                        else{
                                              $cart=$_SESSION['cart'];
                                      
                                      
                                                   if(productExistInCart($pid,$cart))
                                                   {
                                                

                                                      $var="Prod Exist";
                                                        echo json_encode(array("val" =>$var));
                                                   }
                                                       else{

                                                          $cart=getProduct($pid,$cart);
                                                            $_SESSION['cart']=$cart;
                                                              $cart=$_SESSION['cart'];
                                                                echo json_encode(array('cart'=>$cart));
                                      
                                                  
                                                    }                                                  
                                                  }
                                                }
                                              }
                                                  
                                                 else if(isset($_POST['did'])){
                                                     $id1=$_POST['did'];
                                                      
                                                       $cart=$_SESSION['cart'];
                                                       alert("in delete");
                                                     
                                                        foreach($cart as $key=>$value){
                                                          if($id1==$cart[$key]['id']){
                                                            unset($cart[$key]);
                                                          
                                                             //reset($cart);
                                                              $var=array_values($cart);
                                                              $_SESSION['cart']=$var;
                                                              $var=$_SESSION['cart'];

                                                                echo json_encode(array('cart'=>$var));
                                                               
                                                      }
                                                    }
                                                  }
                                                 // echo json_encode(array('cart'=>$var));
                                                            
?>
                                            
                                                       
                                          

                                                            
                                                              
                                                       
                                                    
                                                                     
                                                                      
                                                                      

                                                                 
                                 
                         
                                
                                                  
                                          
                                       
                                   
                             

