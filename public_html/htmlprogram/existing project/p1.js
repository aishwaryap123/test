
	function getList()
	{
		var pid=document.getElementById("p_id").value;
		var pname=document.getElementById("p_name").value;
		var pprice=document.getElementById("p_price").value;
		document.getElementById("i1").innerHTML=pid;
		document.getElementById("i2").innerHTML+=pname;
		document.getElementById("i3").innerHTML+=pprice;

	}
	