$(document).ready(function(){
	$('#B1').attr('disabled','');
	var emailok = false;
	var boxes = $(".input_s1_normal");
	var myForm = $("#sis"), username = $("#username"), email = $("#email"), emailInfo = $("#emailInfo");
	
	
	
	//Form Validation
	myForm.submit(function(){
		if(username.attr("value") == "")
		{
			alert("Enter Username");
			username.focus();
			return false;
		}
		if(email.attr("value") == "")
		{
			alert("Enter Email");
			email.focus();
			return false;
		}
		if(!emailok)
		{
			alert("Check Email");
			email.attr("value","");
			email.focus();
			return false;
		}
	});
	
	//send ajax request to check email
	username.blur(function(){
		$.ajax({
			type: "POST",
			data: "username="+$(this).attr("value"),
			url: "proses/username.php",
			beforeSend: function(){
				emailInfo.html("<font color='blue'>Checking username...</font>");
			},
			success: function(data){
				
				else if(data != "0")
				{
					emailok = false;
					emailInfo.html("<font color='red'>Email Already Exist</font>");
				}
				else
				{
					emailok = true;
					emailInfo.html("<font color='green'>Email OK</font>");
				}
			}
		});
	});
});