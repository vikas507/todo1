var user2 = document.getElementById("user2");
//var myname = document.getElementById("myname");
var mob = document.getElementById("mob");
var pass1 = document.getElementById("pass1");



function mail2()
{
	if(user2.value.indexOf("@")==-1 || user2.value.indexOf(".")==-1)
	{
		document.getElementById("v3").innerHTML = "enter valid email";

	}
	else
	{
		document.getElementById("v3").innerHTML = "good";
	}
}







function checkmob()
{
	if(mob.value.length >=11)
	{

		document.getElementById("v5").innerHTML = " ";
		alert("invalid mobile number");
	}

	else
	{
		document.getElementById("v5").innerHTML="enter number ";


	}

}







function password1()
{

	if(pass1.value.length <=4)
	{

		document.getElementById("v6").innerHTML = "length should be between 4-8";
	}
else
	{
	document.getElementById("v6").innerHTML = "Good";
	
	}
}
