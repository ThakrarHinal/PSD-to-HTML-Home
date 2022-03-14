




$("#contactform").on("submit", function(e){
   //Code: Action (like ajax...)
   e.preventDefault();
  
  var First_name = $('#First_name').val();
  var Last_name = $('#Last_name').val();
  var Mobile_number = $('#Mobile_number').val();
  var Subject = $('#sub').val();
  var Message = $('#Message').val();
  var Email = $('#email').val();
  var fd = new FormData();
  var f11 = $('#file').val();
  alert(f11);
  var files = $('#file')[0].files;
  fd.append('file',files[0]);

  var f4 = '';
  fd1 = JSON.stringify(fd);
  for (var i = 0; i < files.length; i++) {
      console.log(files[i].name);
      var f4 = files[i].name
    }
  alert(f4);


  // if (First_name.length == '') {
  //   $('#namecheck').html("please enter PostalCode").css("color", "red");
  //   // $('#namecheck').css("color", "red");
  //   // $('#namecheck').fadeOut("slow");
  // }



  $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/insert',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
     First_name: First_name,
	  	Last_name: Last_name,
	  	Mobile_number: Mobile_number,
	  	Subject: Subject,
	  	Message: Message,
	  	Email: Email,
	  	files: f4,
    },
    dataType: 'json',
    // alert("hello");
    cache: false,
    success: function(data){
      console.log(data.Message);
      if(data.status == "Success"){
                    alert('success');
                    $("#ok2").html('<div class="alert alert-success">' + data.Message  + "</div>");
                    
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




$("#createuser").on("submit", function(e){
   //Code: Action (like ajax...)
   e.preventDefault();
  
  var First_name1 = $('#First_name1').val();
  var Last_name1 = $('#Last_name1').val();
  var mobile1 = $('#mobile1').val();
  // var Subject = $('#sub').val();
  var pass1 = $('#pass1').val();
  var Repeat_password = $('#Repeat_password').val();
  // var Message = $('#Message').val();
  var email1 = $('#email1').val();
  


  if (Last_name1.length == '') {
    $('#namecheck1').html("please enter PostalCode").css("color", "red").fadeOut('slow');
  }

   if (First_name1.length == '') {
    $('#namecheck').html("please enter PostalCode").css("color", "red").fadeOut('slow');
  }

   if (mobile1.length == '') {
    $('#namecheck2').html("please enter PostalCode").css("color", "red").fadeOut('slow');
  }

   if (pass1.length == '') {
    $('#namecheck3').html("please enter PostalCode").css("color", "red").fadeOut('slow');
  }

   if (Repeat_password.length == '') {
    $('#namecheck4').html("please enter PostalCode").css("color", "red").fadeOut('slow');
  }

   if (email1.length == '') {
    $('#namecheck5').html("please enter PostalCode").css("color", "red").fadeOut('slow');
  }



  $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/UserInsert',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
     First_name1: First_name1,
	  	Last_name1: Last_name1,
	  	mobile1: mobile1,
	  	// Subject: Subject,
	  	// Message: Message,
	  	email1: email1,
	  	pass1: pass1,
	  	Repeat_password: Repeat_password,
	  	// files: f4,
    },
    dataType: 'json',
    // alert("hello");
    cache: false,
    success: function(data){
      console.log(data.Message);
      if(data.status == "Success"){
                    alert('success');
                    // window.navigate("page.html");
                    $(location).attr('href','http://localhost/Home_DB/');
                    $("#ok2").html('<div class="alert alert-success">' + data.Message  + "</div>");
                    
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




$("#forgetPass").on("submit", function(e){
   //Code: Action (like ajax...)
   e.preventDefault();
  var new_pass = $('#new_pass').val();
  var con_pass = $('#con_pass').val();
  var token = $('#token').val();
  alert(new_pass);
  
  //  if (Email.length == '') {
  //   $('#namecheck5').html("please enter PostalCode").css("color", "red").fadeOut('slow');
  // }



  $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/forgetPass',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
	  	new_pass: new_pass,
	  	con_pass: con_pass,
	  	token: token,
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
                    $(location).attr('href','http://localhost/Home_DB');
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














