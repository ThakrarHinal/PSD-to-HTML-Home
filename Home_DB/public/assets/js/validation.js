jQuery('#contact').validate({
	rules:{
		First_name: "requierd",
		First_name: {
			required: true
		},
		Last_name: "requierd",
		Last_name: {
			required: true
		},
		Mobile_number: "requierd",
		Mobile_number: {
			required: true
		},
		Email: "requierd",
		Email: {
			required: true
		},
	},messages:{
		First_name: "Please enter first name",
		Last_name: "Please enter last name",
		Mobile_number: "Please enter mobile number",
		Email: "Please enter email"
	},
})




$(".submit1").click(function(){
	if (!$('#email').val().length == 0 ) {
			$(".toast").css('opacity', '1') ;
            $('#message').text("Email has been sent to your account");
        }
        else{
        	$(".toast").css('opacity', '1');
        	 $('#message').text("please complete the form !");
        }
    })

$(".btn-close").click(function(){
	$(".toast").css('opacity', '0');
})
  
// });

$
