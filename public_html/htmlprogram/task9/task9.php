<html>
    <head>
    </head>
        <body>
            <?php
                    $products = array(
                                    "Electronics" => array(
                                                        "Television" => array(
                                                                            array(
                                                                                "id" => "PR001",
                                                                                "name" => "MAX-001",
                                                                                "brand" => "Samsung"
                                                                            ),
                                                                            array(
                                                                                "id" => "PR002",
                                                                                "name" => "BIG-301",
                                                                                "brand" => "Bravia"
                                                                            ),
                                                                            array(
                                                                                "id" => "PR003",
                                                                                "name" => "APL-02",
                                                                                "brand" => "Apple"
                                                                            )
                                                                        ),
                                                        "Mobile" => array(
                                                                            array(
                                                                                "id" => "PR004",
                                                                                "name" => "GT-1980",
                                                                                "brand" => "Samsung"
                                                                            ),
                                                                            array(
                                                                                "id" => "PR005",
                                                                                "name" => "IG-5467",
                                                                                "brand" => "Motorola"
                                                                            ),
                                                                            array(
                                                                                "id" => "PR006",
                                                                                "name" => "IP-8930",
                                                                                "brand" => "Apple"
                                                                            )
                                                                        )
                                                    ),
                                    "Jewelry" => array(
                                                        "Earrings" => array(
                                                                            array(
                                                                                "id" => "PR007",
                                                                                "name" => "ER-001",
                                                                                "brand" => "Chopard"
                                                                            ),
                                                                            array(
                                                                                "id" => "PR008",
                                                                                "name" => "ER-002",
                                                                                "brand" => "Mikimoto"
                                                                            ),
                                                                            array(
                                                                                "id" => "PR009",
                                                                                "name" => "ER-003",
                                                                                "brand" => "Bvlgari"
                                                                            )
                                                                        ),
                                                        "Necklaces" => array(
                                                                            array(
                                                                                "id" => "PR010",
                                                                                "name" => "NK-001",
                                                                                "brand" => "Piaget"
                                                                            ),
                                                                            array(
                                                                                "id" => "PR011",
                                                                                "name" => "NK-002",
                                                                                "brand" => "Graff"
                                                                            ),
                                                                            array(
                                                                                "id" => "PR012",
                                                                                "name" => "NK-003",
                                                                                "brand" => "Tiffany"
                                                                            )
                                                                        )                
                                                )
                                )
                    ?>
                    <body>
                    <table>
                    <tr><th>Category</th><th>subcategory</th><th>ID</th><th>Name</th><th>Brand</th></tr>
                    
                    
                    <?php 
                       
                            
                                 foreach($products as $category=>$categories)
                                 {
                                    
                                    foreach ($categories as $key => $value) {
                                        
                                        foreach($value as $x=>$y)
                                        {
                                            echo '<tr><td>'.$category.'</td>';
                                            echo '<td>'.$key.'</td>';
                                            echo '<td>'.$products[$category][$key][$x]['id'].'</td>';

                                           echo '<td>'.$products[$category][$key][$x]['name'].'</td>';
                                           echo '<td>'.$products[$category][$key][$x]['brand'].'</td>';
                                           echo '</tr>' ;

                                        }
                                   }
                                    
                                   
                                 }
                                   
                        
                        ?>
                        </tr>
                    </table>
                    <hr>
                    <table>
                          <tr><th>Category</th><th>subcategory</th><th>ID</th><th>Name</th><th>Brand</th></tr>
                    <?php
                           foreach($products as $category=>$categories)
                           {
                              foreach ($categories as $key => $value)
                               {
                                  if($key=='Mobile')
                                  {
                                    foreach ($value as $x => $y) 
                                       {
                                            echo '<tr><td>'.$category.'</td>';
                                            echo '<td>'.$key.'</td>';
                                            echo '<td>'.$products[$category][$key][$x]['id'].'</td>';

                                            echo '<td>'.$products[$category][$key][$x]['name'].'</td>';
                                            echo '<td>'.$products[$category][$key][$x]['brand'].'</td>';
                                            echo '</tr>' ;

                                        }
                                  }
                               }
 
                           }
                    ?>
                    </table>
                    <hr>
                    <div>
                    <?php
                         foreach($products as $category=>$categories)
                                 {
                                    
                                    foreach ($categories as $key => $value) 
                                    {
                                        
                                      foreach($value as $x=>$y) 
                                        {
                                         if($products[$category][$key][$x]['brand']=='Samsung')
                                         {
                                          echo '<b>Product Id :</b>'.$products[$category][$key][$x]["id"].'<br>';
                                          echo '<b>Product Name :</b>'.$products[$category][$key][$x]["id"].'<br>';
                                          echo '<b>Sub Category :</b>'.$key.'<br>';
                                          echo '<b>Category </b>:'.$category.'<br>';


                                            }
                                        }
                                     }
                                 }                     
                    ?>

                    
                    <hr>
                    <?php
                    foreach($products as $category=>$categories)
                                 {
                                    
                                    foreach ($categories as $key => $value) 
                                    {
                                        
                                        foreach($value as $x=>$y) 
                                        {
                                            if($products[$category][$key][$x]['id']=='PR003')
                                            {
                                               unset($products[$category][$key][$x]);
                                               reset($products);
                                            }
                                        }
                                     }
                                 }           
                    ?>
                     <table>
                    <tr><th>Category</th><th>subcategory</th><th>ID</th><th>Name</th><th>Brand</th></tr>

                    <?php 
                       
                            
                                 foreach($products as $category=>$categories)
                                 {
                                    
                                    foreach ($categories as $key => $value) {
                                        
                                        foreach($value as $x=>$y)
                                        {
                                            echo '<tr><td>'.$category.'</td>';
                                            echo '<td>'.$key.'</td>';
                                            echo '<td>'.$products[$category][$key][$x]['id'].'</td>';

                                           echo '<td>'.$products[$category][$key][$x]['name'].'</td>';
                                           echo '<td>'.$products[$category][$key][$x]['brand'].'</td>';
                                           echo '</tr>' ;

                                        }
                                   }
                                    
                                   
                                 }
                                   
                        
                        ?>
                        </tr>
                    </table>
                    <hr>
                    <?php
                    foreach($products as $category=>$categories)
                                 {
                                    
                                    foreach ($categories as $key => $value) 
                                    {
                                        
                                        foreach($value as $x=>$y) 
                                        {
                                            if($products[$category][$key][$x]['id']=='PR002')
                                            {
                                               $products[$category][$key][$x]['name']='BIG-555';
                                            }
                                        }
                                     }
                                 }           
                    ?>
                     <table>
                    <tr><th>Category</th><th>subcategory</th><th>ID</th><th>Name</th><th>Brand</th></tr>

                    <?php 
                       

                            
                                 foreach($products as $category=>$categories)
                                 {
                                    
                                    foreach ($categories as $key => $value) {
                                        
                                        foreach($value as $x=>$y)
                                        {
                                            echo '<tr><td>'.$category.'</td>';
                                            echo '<td>'.$key.'</td>';
                                            echo '<td>'.$products[$category][$key][$x]['id'].'</td>';

                                           echo '<td>'.$products[$category][$key][$x]['name'].'</td>';
                                           echo '<td>'.$products[$category][$key][$x]['brand'].'</td>';
                                           echo '</tr>' ;

                                        }
                                   }
                                    
                                   
                                 }
                                   
                        
                        ?>
                        </tr>
                    </table>
                     <?php print_r (sizeof($products));?>
                    </div>
                    </body>
                    </html>