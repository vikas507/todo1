var user = document.getElementById("user");
var pass = document.getElementById("pass");



function mail1()
{
	if(user.value.indexOf("@")==-1 || user.value.indexOf(".")==-1)
	{
		document.getElementById("v1").innerHTML = "enter valid email";

	}
	else
	{
		document.getElementById("v1").innerHTML = "good";
	}
}



function password()
{

	if(pass.value.length <=5)
	{

		document.getElementById("v2").innerHTML = "length should be between 4-8";
	}
else
	{
	document.getElementById("v2").innerHTML = "Good";
	
	}
}
