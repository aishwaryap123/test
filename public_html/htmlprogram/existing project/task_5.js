var cart=[];
	    var prod1={};
	    prod1.name="football";
		prod1.pid=101;
		prod1.price="$150";
		prod1.quant=1;
		prod1.image=new Image();
		prod1.image.src="images/football.png";

		var prod2={};
		prod2.name="Tennis";
		prod2.pid=102;
		prod2.price="$120";
		prod2.quant=1;
		prod2.image=new Image();
		prod2.image.src="images/tennis.png";

		var prod3={};

		prod3.name="basketball";
		prod3.pid=103;
		prod3.price="$90";
		prod3.quant=1;
		prod3.image=new Image();
		prod3.image.src="images/basketball.png";


		var prod4={};
		prod4.name="table-tennis";
		prod4.pid=104;
		prod4.price="$110";
		prod4.quant=1;
		prod4.image=new Image();
		prod4.image.src="images/table-tennis.png";



		var prod5={};
		prod5.name="Soccer";
		prod5.pid=105;
		prod5.price="$80";
		prod5.quant=1;
		prod5.image=new Image();
		prod5.image.src="images/soccer.png";



      var products=[];
      products.push(prod1);
      products.push(prod2);
      products.push(prod3);
      products.push(prod4);
      products.push(prod5);
      
      
	function addCart(p)
	{
		 q=false;
		for(i=0;i<cart.length;i++)
		{
			if(cart[i].pid==p)
			{
				cart[i].quant++;
				q=true;
				break;
			}
		}
      if(q==false)
      {
      	for(j=0;j<products.length;j++)
      	{
      		if(products[j].pid==p)
      		{
      			cart.push(products[j]);
      			break;
      		}
      	}
      }
     
      var html=" ";
		 html+=
		 "<table><tr><th>Product Name</th> <th>Product ID</th> <th>product Price</th><th>Product quantity</th><th>product </th></tr> ";
		 for(i=0;i<cart.length;i++)
		 {
 html+="<tr> <td>"+cart[i].name+"</td><td>"+cart[i].pid+"</td><td>"+cart[i].price+"</td><td>"+cart[i].quant+"</td><td><img src="+cart[i].image.src+"></td></tr>";

		 }
		 
		 html+="</table>";
		 document.getElementById("wrapper").innerHTML=html;
	}