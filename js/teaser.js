// JavaScript Document
$("#emailSubmit").click(function(){
	var email = $("#emailInput").val();
	submitEmail(email);
	
});

$("#emailInput").keydown(function(e){
	if(e.keyCode == 13){
		var email = e.target.value;
		submitEmail(email);
	}
});

function submitEmail(email){
	$.ajax({
		url:"email.php",
		data:{waitEmail : email},
		beforeSend:function(){return checkEmail(email)},
		success:function(data){
			if(data == 1){
				$("#emailSuccess").animate({opacity:1});
				$("#emailInput").val('');
				updateNumber('email');
			}
		}
	});
}


function checkEmail(email){
	var emailError = $("#emailError");
	var regString = new RegExp(/[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/);
   if(regString.test(email) && $.trim(email) != ''){
            emailError.animate({opacity:0},'slow');
			$("#emailInput").removeClass('inputError');
        return true;
    }else{
            emailError.animate({opacity:1},'slow');
			$("#emailInput").addClass('inputError');
        return false;
    }
}

function createUploader(){            
	var uploader = new qq.FileUploader({
		element: document.getElementById('uploader'),
		action: 'upload.php',
		debug: true,
		allowedExtensions: ['jpg', 'jpeg', 'png', 'gif'],
		sizeLimit: 10*1024*1024,
		onComplete: function(){updateNumber('image')},
	});           
}

function updateNumber(method){
	$.ajax({
		url:"update.php",
		data:{method : method},
		dataType:"json",
		success:function(data){
			if(method == "email"){
				$("#usercount").html(data.value);
				$("#usercount").effect('highlight','slow');
				
			}else if(method == "image"){
				$("#imagecount").html(data.value);
				$("#imagecount").effect('highlight','slow');
			}
		}
	});
}

   