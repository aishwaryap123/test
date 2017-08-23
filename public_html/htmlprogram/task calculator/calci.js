

var temp='';

var result="";
var clear='';
var answer='';
var op='';
$(document).ready(function(){
		$(".textfield").val();
	
    $("#div1").on('click','.load',function(){
    
      
	        temp="";
			op="";
			result="";
			$(".textfield").val(clear);
	  

  });
  		$("#div1").on('click','.operator',function(){
  			
     
	 	 if (op=="+")
		{ 
			result=parseFloat(result)+parseFloat(temp);
		}
		else if(op=="")
	 	{
	 		result=temp;
	 	}
		else if (op=="-")
		{ 
			result=parseFloat(result)-parseFloat(temp);
		}
		else if (op=="*")
		{ 
			result=parseFloat(result)*parseFloat(temp);
		}
		else if(op== "/")
		{
			result=parseFloat(result)/parseFloat(temp);
		}
		else(op== "=")
		{
			op=$(this).val();
			$(".textfield").val(result);
			temp="";
		}

     	
});
  		$("#div1").on('click','.number',function(){
   
		
	     temp+=$(this).val();
		$(".textfield").val(temp);
});

});