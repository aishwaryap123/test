
			
			function checkWeight() 
			{
				var n = document.getElementById("user").value;
			var a  = document.getElementById("age1").value;
			
			var w = document.getElementById("weight1").value;
			
				
					if(a>4 && a<=7)
					{
						
						 if(w<15)
					
						{
						  document.getElementById("demo").innerHTML="hello!! "+n+" !!! you are under weighted.";
						}
							else if(w>20)
							{
							
						     document.getElementById("demo").innerHTML="hello!!!  "+n+" !!! you are over weighted.";
							
							}
							else
					     {
						  document.getElementById("demo").innerHTML="hello!!! "+n+" !!! your weight is fine.";
						 }
						
                    }
					
						
				

				else if(a>7 && a<=10)
				{
					
					 if(w<21)
					
						{
						  document.getElementById("demo").innerHTML="hello"+n+" !!! you are under weighted.";
						
						}
							else if(w>25)
							{
							
						     document.getElementById("demo").innerHTML="hello"+n+" !!! you are over weighted.";
							
							}
							else
					     {
						  document.getElementById("demo").innerHTML="hello"+n+" !!! your weight is fine.";
						 }
						
				}
				else if(a>10 && a<=15)
				{
					
					 if(w<26)
					
						{
						  document.getElementById("demo").innerHTML="hello"+n+" !!! you are under weighted.";
						
						}
							else if(w>30)
							{
							
						     document.getElementById("demo").innerHTML="hello"+n+" !!! you are over weighted.";
							
							}
							else
					     {
						  document.getElementById("demo").innerHTML="hello"+n+" !!! your weight is fine.";
						 }
						
				}
				else if(a>15 && a<=20)
				{
					
					 if(w<31)
					
						{
						  document.getElementById("demo").innerHTML="hello"+n+" !!! you are under weighted.";
						
						}
							else if(w>40)
							{
							
						     document.getElementById("demo").innerHTML="hello"+n+" !!! you are over weighted.";
							
							}
							else
					     {
						  document.getElementById("demo").innerHTML="hello"+n+" !!! your weight is fine.";
						 }
				}
				
			}


			