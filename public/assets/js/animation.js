AOS.init({

	 offset: 10,
	 easing: 'ease',
	 duration: 1000,
	 // startEvent: 'DOMContentLoaded', 
});

$(window).scroll(function(){
	$('nav').toggleClass('scrolled',$(this).scrollTop()>50);
});

$('#finalizeSchedules1').click(function(){
	$('#modalcontainer').css('opacity', '0');

});

$('#login').click(function(){
	// $('#modalcontainer1').css('opacity', '0') &&
	$('#modalcontainer').css('opacity', '1');
})


$("#userlogin").on("submit", function(e){
   //Code: Action (like ajax...)
   e.preventDefault();
  
  var password = $('#password').val();
  var email = $('#email').val();
  


   if (password.length == '') {
    $('#namecheck4').html("please enter PostalCode").css("color", "red").fadeOut('slow');
  }

   if (email.length == '') {
    $('#namecheck5').html("please enter PostalCode").css("color", "red").fadeOut('slow');
  }



  $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/userlogin',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
	  	email: email,
	  	password: password,
    },
    dataType: 'json',
    // alert("hello");
    cache: false,
    success: function(data){
      console.log(data.typeid);
      if(data.status == "Success"){
                    // alert('success');
                    console.log("success");
                    console.log(data.typeid);
                    if (data.typeid == 0) {
                    	$(location).attr('href','http://localhost/Home_DB/functions/Service_History');
                    }
                    if (data.typeid == 1) {
                    	$(location).attr('href','http://localhost/Home_DB/functions/Upcoming_Service');
                    }
                    
                }else{
                    // alert('failer');
                    console.log(data.Message);
                    $("#ok2").html('<div class="alert alert-danger">' + data.Message + "</div>");
                }
    },
     error: function(XMLHttpRequest, textStatus, errorThrown) { 
        console.log("Status: " + textStatus); console.log("Error: " + errorThrown); 
    }   
   
   
 });

  return false;

});









$("#fpass").on("submit", function(e){
   //Code: Action (like ajax...)
   e.preventDefault();
  var Email = $('#Email').val();
  
   if (Email.length == '') {
    $('#namecheck5').html("please enter PostalCode").css("color", "red").fadeOut('slow');
  }



  $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/pass',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
	  	Email: Email,
    },
    dataType: 'json',
    // alert("hello");
    cache: false,
    success: function(data){
      console.log(data.Message);
      if(data.status == "Success"){
                    // alert('success');
                    console.log("success");
                    $("#ok3").html('<div class="alert alert-success">' + data.Message + "</div>");
                }else{
                    // alert('failer');
                    console.log(data.Message);
                    $("#ok3").html('<div class="alert alert-danger">' + data.Message + "</div>");
                }
    },
     error: function(XMLHttpRequest, textStatus, errorThrown) { 
        console.log("Status: " + textStatus); console.log("Error: " + errorThrown); 
    }   
   
   
 });

  return false;

});

