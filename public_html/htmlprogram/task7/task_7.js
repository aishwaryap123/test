 var products = [{
        "id": "101",
        "name": "Moto X",
        "brand": "Motorola",
        "os": "Android"
         },
        {
            "id": "102",
            "name": "iPhone 6",
            "brand": "Apple",
            "os": "iOS"
        },
        {
            "id": "103",
            "name": "Samsung Galaxy S",
            "brand": "Samsung",
            "os": "Android"
        },
        {
            "id": "104",
            "name": "Google Nexus",
            "brand": "ASUS",
            "os": "Android"
        },
        {
            "id": "105",
            "name": "Surface",
            "brand": "Microsoft",
            "os": "Windows"
        }];
         var brands=[];
        var oss=[];
          var Product_to_display=[]; 

        
       
       function showProduct(){

            var br=$("#PBrand").val();
            var o_s=$("#OS").val();
            var html="";
            html+= "<table><tr><th>Product id</th> <th>Product name</th> <th>product brand</th><th>Product Os</th></tr> ";
            
            for(var m=0;m<products.length;m++)
        {
            if(br==0 && o_s==0)
            {
                alert("test");
            html+= '<tr><td>'+products[m].id+'</td><td>'+products[m].name+'</td><td>'+products[m].brand+'</td><td>'+products[m].os+'</td></tr>';    
            
            }
           else if(o_s==0 && products[m].brand==br)
           {
             html+= '<tr><td>'+products[m].id+'</td><td>'+products[m].name+'</td><td>'+products[m].brand+'</td><td>'+products[m].os+'</td></tr>';  
           }
           else if(o_s==products[m].os && br==0)
           {
             html+= '<tr><td>'+products[m].id+'</td><td>'+products[m].name+'</td><td>'+products[m].brand+'</td><td>'+products[m].os+'</td></tr>';  
           }
           else if(o_s==products[m].os && br==products[m].brand)
           {
             html+= '<tr><td>'+products[m].id+'</td><td>'+products[m].name+'</td><td>'+products[m].brand+'</td><td>'+products[m].os+'</td></tr>'; 
           }
          
        }

             html+= '</table>';
            $("#div2").html(html);
        }
            

            for(var i=0;i<products.length;i++)
            {
                
                if(brands.indexOf(products[i].brand)===-1)
                {
                    brands.push(products[i].brand);
                }

                
                
            } 

            for(var j=0;j<products.length;j++)
            {
                if(oss.indexOf(products[j].os)===-1)
                {
                    oss.push(products[j].os);
                }
            }
       
 $(document).ready(function(){
     
     
     var d1= '<select id="OS">';
     d1+="<option value='0' >select OS</option>"

        for(var k=0;k<oss.length;k++)
        {
         d1+='<option value='+oss[k]+' >'+oss[k]+'</option>';
        }
        d1+='</select>';


         var d2= '<select id="PBrand">';
           d2+="<option value='0' >select brands</option>"
        for(var l=0;l<brands.length;l++)
        {
         d2+='<option value='+brands[l]+'>'+brands[l]+'</option>';
        }
        d2+='</select>';
        $("#div1").html(d1);
         $("#div1").append(d2);
         $("#div1").on('change','#OS',function(){

        
        
            showProduct();
          
         });
        
         $("#div1").on('change','#PBrand',function(){
        
           
           showProduct();
       });
          
         });
                 
           
    
                

    
     
