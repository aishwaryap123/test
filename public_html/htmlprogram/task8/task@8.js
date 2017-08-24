var products = [];
//to add the product in product array
  function addProduct(){
    var prod={};
    prod.sku=$("#product_sku").val();
    prod.name=$("#product_name").val();
    prod.price=$('#product_price').val();
    prod.quantity=$('#product_quantity').val();
    
     
          var c=0;
         if(prod.sku==''||prod.name==''||prod.price==''||prod.quantity=='')
         {
            alert("fill the values");
            c++;
         }
         
          for(var i=0;i<products.length;i++)
         {
        
                if(products[i].sku==prod.sku){
                alert("already added");
            
                c++;
             }
         } 
    
                if(c==0){
        
                           products.push(prod);
                           $('.success').show();
                         }
          else{ $('.error').show();}
    
                $('.close').click(function(){
                $('.success').hide(); 
                $('.error').hide(); 
                    

         });  
                 showProduct(); 
                 $('#add_product').val("Add Product");
    }
  //for showing the added product
  function showProduct(){
             var html="";
             html+= "<table><tr><th>Product sku</th> <th>Product name</th> \
              <th>product price</th><th>Product quantity</th><th>Action</th></tr> ";
              for(var j=0;j<products.length;j++)
              {
                 html+= '<tr><td>'+products[j].sku+'</td><td>'+products[j].name+'</td>\
                 <td>'+products[j].price+'</td><td>'+products[j].quantity+'</td><td>\
                 <a  id="'+products[j].sku+'" href="#" class="edit" onclick="updateProduct(this.id)">Edit</a><a id="'+products[j].sku+'" href="#" class="delete" onclick="deleteProduct(this.id)">Delete</a></td></tr>';
              }
               $("#product_list").html(html);
  
  } 
//to delete product
   function deleteProduct(p){

    var x=p;
    console.log(x);
    
    for(i=0;i<products.length;i++)
    {
        if(products[i].sku==x){
                var c=confirm("do you want to delete");
            if(c==true){
                products.splice(i,1);
            }
            
        }

    }
     showProduct();
      
   }
   //to update product
   function updateProduct(q){
       for(i=0;i<products.length;i++)
       {
        if(products[i].sku==q){
            $('#add_product').val("Update");
            $("#product_sku").val(products[i].sku);
            $("#product_name").val(products[i].name);
            $("#product_price").val(products[i].price);
            $("#product_quantity").val(products[i].quantity);
            products.splice(i,1);

        }
        
       }
      
   }

        
        $(document).ready(function(){
            $("#add_product").click(function(){
                   addProduct();
                   console.log(products);
                   

            });


        });