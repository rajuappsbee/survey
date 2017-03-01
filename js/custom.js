function checkValidForm(){
	var name = $('#name').val();
	var email = $('#email').val();
	var phone = $('#phone').val();
	var address = $('#address').val();
	//$('#submbtn').attr('disabled',true);

	if(name && email && phone && address){
		$('form[name=serveyData]').submit();
	}else{
		$('.nameerrormsg').hide();
		$('.emlerrormsg').hide();
		$('.phnerrormsg').hide();
		$('.adderrormsg').hide();
		if(!name){
			$('.nameerrormsg').html('Please enter your name.').show();
		}else if(!email){
			$('.emlerrormsg').html('Please enter your email.').show();
		}else if(!phone){
			$('.phnerrormsg').html('Please enter your phone number.').show();
		}else if(!address){
			$('.adderrormsg').html('Please enter address.').show();
		}
	}
}

$(document).on('keyup','#email',function(e){
	e.preventDefault();
	var email = $('#email').val();
	if(!isEmail(email)){
		$('.emlerrormsg').html('Please enter valid email id.').show();
		$('#submbtn').attr('disabled',true);
	}else{
		$('.emlerrormsg').hide();
		$.ajax({
            type: "POST",
            dataType: 'json',
            data: {'email' : email},
            url: '/survey/services.php?action=checkUniqueEmail',
            success: function(res) {
              if(!res.status){
              	$('.emlerrormsg').html(res.message).show();
				$('#submbtn').attr('disabled',true);
              }else{
              	$('.emlerrormsg').hide();
				//$('#submbtn').attr('disabled',false);
				validatePhone();
              }
            }
      	});
	}
});

$(document).on('keyup','#phone',function(e){
	e.preventDefault();
	var phone = $('#phone').val();
	if(!isPhoneNumber(phone)){
		$('.phnerrormsg').html('Please enter valid phone number.').show();
		$('#submbtn').attr('disabled',true);
	}else{
		$('.phnerrormsg').hide();
		$.ajax({
            type: "POST",
            dataType: 'json',
            data: {'phone' : phone},
            url: '/survey/services.php?action=checkUniquePhone',
            success: function(res) {
              if(!res.status){
              	$('.phnerrormsg').html(res.message).show();
				$('#submbtn').attr('disabled',true);
              }else{
              	$('.phnerrormsg').hide();
				//$('#submbtn').attr('disabled',false);
				validateEmail();
              }
            }
      	});
	}
});

//email checking
function validateEmail(){
	var email = $('#email').val();
	if(!isEmail(email)){
		$('.emlerrormsg').html('Please enter valid email id.').show();
		$('#submbtn').attr('disabled',true);
	}else{
		$('.emlerrormsg').hide();
		$.ajax({
            type: "POST",
            dataType: 'json',
            data: {'email' : email},
            url: '/survey/services.php?action=checkUniqueEmail',
            success: function(res) {
              if(!res.status){
              	$('.emlerrormsg').html(res.message).show();
				$('#submbtn').attr('disabled',true);
              }else{
              	$('.emlerrormsg').hide();
				$('#submbtn').attr('disabled',false);
              }
            }
      	});
	}
}

//phone checking
function validatePhone(){
	var phone = $('#phone').val();
	if(!isPhoneNumber(phone)){
		$('.phnerrormsg').html('Please enter valid phone number.').show();
		$('#submbtn').attr('disabled',true);
	}else{
		$('.phnerrormsg').hide();
		$.ajax({
            type: "POST",
            dataType: 'json',
            data: {'phone' : phone},
            url: '/survey/services.php?action=checkUniquePhone',
            success: function(res) {
              if(!res.status){
              	$('.phnerrormsg').html(res.message).show();
				$('#submbtn').attr('disabled',true);
              }else{
              	$('.phnerrormsg').hide();
				$('#submbtn').attr('disabled',false);
              }
            }
      	});
	}
}

//email validation
function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

//phone number validation
function isPhoneNumber(inputPhone) {
	var phoneno = /^\d{10}$/;
	if(inputPhone.match(phoneno)){
		return true;
	}else{
		return false;
	}
}