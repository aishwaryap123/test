var prod=[];
	function getList()
	{

		var product={ };
		   product.pid =document.getElementById("p_id").value;
		product.pname =document.getElementById("p_name").value;
		product.price = document.getElementById("p_price").value;
	
		 
		 prod.push(product);
		 var html=" ";
		 html+=
		 "<table><tr><th>Product Type</th> <th>Product name</th> <th>product Price</th></tr> ";
		 for(i=0;i<prod.length;i++)
		 {
		       html+="<tr> <td>"+prod[i].pid+"</td><td>"+prod[i].pname+"</td><td>"+prod[i].price+"</tr>";

		 }
		 
		 html+="</table>"
		 document.getElementById("wrapper").innerHTML=html;


	}