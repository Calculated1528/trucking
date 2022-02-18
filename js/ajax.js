var 
emailStat;
    
$(function() {
    $("#email").change(function(){
		email = $("#email").val();
		var expEmail = /[-0-9a-z_]+@[-0-9a-z_]+\.[a-z]{2,6}/i;
		var resEmail = email.search(expEmail);
		if(resEmail == -1){
			$("#email").next().hide().text("Некорректный Email").css("color","red").fadeIn(400);
			emailStat = 0;
			buttonOnAndOff();
		}else{
			$.ajax({
			    url: "validation.php",
			    type: "GET",
			    data: "email=" + email,
			    cache: false,			
			    success: function(response){
				    if(response == "no"){
                        $("#email").next().hide().text("Пользователь с таким email адресом уже существует").css("color","red").fadeIn(400);				
						emailStat = 0;
						buttonOnAndOff();
					}else{					
						$("#email").next().text("");
						emailStat = 1;
						buttonOnAndOff();
				    }					
			    }
		    });

		}
    });	
            
	$("#email").keyup(function(){
		$("#email").next().text("");
    });
	
	function buttonOnAndOff(){
		if(emailStat == 1){
			$("#submit").removeAttr("disabled");
		}else{
			$("#submit").attr("disabled","disabled");
		}
    }
	});