
$(document).ready(function(){
    $('.dt-button span').html('Export'); 
    
});

// if (window.location.href == 'http://localhost/Home_DB/functions/Service_History') {
//    $(location).attr('href','http://localhost/Home_DB/functions/show1');
// }



var ohk2 = []; 
var ohk1 = [];
var ohk = [];
$('.st').click(function(){
  // var jk = $('.st');
  $('.st').each(function() {
          if ($(this).is(":checked")) {
          ohk.push($(this).val());
                        // alert("Done");
      }

});
 ohk = ohk.toString();
 // $('#value5').val(ohk);
 // var r = ohk +'pt';
 alert(ohk);
 // $('.fill-ratings').width(r);
 
});





$('.star').click(function(){
  // var jk = $('.st');
  $('.star').each(function() {
          if ($(this).is(":checked")) {
          ohk1.push($(this).val());
                        // alert("Done");
      }

});
 ohk1 = ohk1.toString();
 
 alert(ohk1);
 // $('.fill-ratings').width(r);

});

$('.star1').click(function(){
  // var jk = $('.st');
  $('.star1').each(function() {
          if ($(this).is(":checked")) {
          ohk2.push($(this).val());
                        // alert("Done");
      }

});
 ohk2 = ohk2.toString();
 // $('.value5').val(ohk);
 alert(ohk2);
 var r = ((((+ohk) + (+ohk1) + (+ohk2))/3)*100)/10 + 'pt';
 alert(r);
 $('.fill-ratings').width(r);

});

if (window.location.href == 'http://localhost/Home_DB/functions/Service_History#v-pills-profile') {
  $("#v-pills-home").removeClass("show active");
  // $("#v-pills-home").removeClass("active");
   $("#v-pills-profile").addClass("show active");
   // $("#v-pills-messages").addClass("active");
}


if (window.location.href == 'http://localhost/Home_DB/functions/Service_History#v-pills-helo') {
  $("#v-pills-home").removeClass("show active");
  // $("#v-pills-home").removeClass("active");
  // 
   $("#v-pills-helo").addClass("show active");
   // $("#menu11").addClass("active");
   // $("#v-pills-messages").addClass("active");
}


if (window.location.href == 'http://localhost/Home_DB/functions/Service_History#v-pills-messages') {
  $("#v-pills-home").removeClass("show active");
  // $("#v-pills-home").removeClass("active");
   $("#v-pills-messages").addClass("show active");
   // $("#v-pills-messages").addClass("active");
}


$(window).on('load', function(){
//   var useid = $('#useid').val();
//   alert(useid);
// alert('hkj');
    $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/show',
//     // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
//     data: {
//     //   check: true,
//     //   serviceid1: serviceid1,
//     //   ratingto: ratingto,
//       // ratingfrom: ratingfrom
//       useid: useid,
//     //   comment: comment,
//     //   ontime: ontime,
//     //   friendly: friendly,
//     //   quality: quality,

//     },
    dataType: 'json',
//     // // alert("hello");
    cache: false,
    success: function(data){
      console.log(data.Message);
      if(data.status == "Success"){
//                     alert(data.id);
                    console.log('suc');
//                   
                    
                }else{
                    // alert('failer');
//                     console.log(data.Message);
                }
    },
//      error: function(XMLHttpRequest, textStatus, errorThrown) { 
//         console.log("Status: " + textStatus); console.log("Error: " + errorThrown); 
    });   
   
   
 });

// });




$('#card-number').on('keypress change blur', function () {
  $(this).val(function (index, value) {
    return value.replace(/[^a-z0-9]+/gi, '').replace(/(.{4})/g, '$1 ');
  });
});

$('#card-number').on('copy cut paste', function () {
  setTimeout(function () {
    $('#card-number').trigger("change");
  });
});


$('#card-exp').on('input',function(){
    var curLength = $(this).val().length;
    if(curLength === 2){
       var newInput = $(this).val();
        newInput += '/';
        $(this).val(newInput);
    }

});

// $('#apply').click(function(){
//   Swal.fire(
//   'Good job!',
//   'You clicked the button!',
//   'success'
// )
// });




// $(document).ready(function(){
//   $('#Add-form').hide();
// });

$('#v-pills-helo-tab').click(function(){
  $('#v-pills-home-tab').removeClass('active');
});

$('#v-pills-home-tab').click(function(){
  $('#v-pills-helo-tab').removeClass('active');
});

$(document).ready(function () {
      


      var color = [];
      $('.status1').each(function(){
        
        $('.compcompleted').css('background-color', 'red');
        $('.compCancelled').css('background-color', 'orange');
      
      });

});


 $('#Add').click(function(){
    $('#address-form').toggle();
    $('#Add').hide();
  });

 $('#cancel').click(function(){
    $('#address-form').hide();
    $('#Add').show();
  });



$("#PC").on("submit", function () {
  var pc_val = $('#PostalCode').val();
  if (pc_val.length == '') {
    $('#pcCheck').html("please enter PostalCode");
    $('#pcCheck').css("color", "red");
    $('#pcCheck').fadeOut("slow");
  }
  let PostalCode = $('#PostalCode').val();
  let data = { 
    check: true,
    PostalCode: PostalCode 
  }
  let form = $(this);
  // alert(form);

  $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/checkAvailability',
    data: form.serialize(),
    dataType: 'json',
    success: function (data) {
      console.log(data.Message);
      
      if (data.status == "Success") {
        $('a[href="#menu1"]').tab("show");
        $('#Pc').val(data.pc);
        localStorage.setItem("PostalCode", JSON.stringify(data));
      } else {
        console.log(data.Message);
      }
    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
      alert("something went wrong.")
      console.log(XMLHttpRequest, textStatus, errorThrown);
    }

  });

  return false;

});

$(document).ready(function () {

  // alert("okkkkkkkkkkkkkkk");
  
  $('#date').change(function () {
    var a = $(this).val();
    $('#Date').html(a);

  });

  $('#time').change(function () {
    var b = $(this).val()
    $('#Time').html("@ " + b + " pm");
  });

  $('#hrs').change(function () {
    var c = $(this).val()
    $('#Hr').html(c);
  });

  $("#img1").click(function(){
    if ($(this).attr("src") == "http://localhost/Home_DB/public/assets/images/book-service/1.png") {
      $(this).attr("src", "http://localhost/Home_DB/public/assets/images/book-service/1-green.png");
    }
    else{
      $(this).attr("src", "http://localhost/Home_DB/public/assets/images/book-service/1.png");
    }
    
  });

  $("#img2").click(function(){
    if ($(this).attr("src") == "http://localhost/Home_DB/public/assets/images/book-service/2.png") {
      $(this).attr("src", "http://localhost/Home_DB/public/assets/images/book-service/2-green.png");
    }
    else{
      $(this).attr("src", "http://localhost/Home_DB/public/assets/images/book-service/2.png");
    }
    
  });

  $("#img3").click(function(){
    if ($(this).attr("src") == "http://localhost/Home_DB/public/assets/images/book-service/3.png") {
      $(this).attr("src", "http://localhost/Home_DB/public/assets/images/book-service/3-green.png");
    }
    else{
      $(this).attr("src", "http://localhost/Home_DB/public/assets/images/book-service/3.png");
    }
    
  });

  $("#img4").click(function(){
    if ($(this).attr("src") == "http://localhost/Home_DB/public/assets/images/book-service/4.png") {
      $(this).attr("src", "http://localhost/Home_DB/public/assets/images/book-service/4-green.png");
    }
    else{
      $(this).attr("src", "http://localhost/Home_DB/public/assets/images/book-service/4.png");
    }
    
  });

  $("#img5").click(function(){
    if ($(this).attr("src") == "http://localhost/Home_DB/public/assets/images/book-service/5.png") {
      $(this).attr("src", "http://localhost/Home_DB/public/assets/images/book-service/5-green.png");
    }
    else{
      $(this).attr("src", "http://localhost/Home_DB/public/assets/images/book-service/5.png");
    }
    
  });



  $(".cb-services").click(function() {
    let text = $(this).val();
    let id = "extra-" + $(this).attr("id");
    let isChecked = $(this).is(':checked');

    if(isChecked) {
      let details = "<div id=" + id + ">";
      details += "<span>" + text + "</span>"
      details += '<span class="float-end"> 30 min </span>'
      details += "</div>";
  
      $(details).appendTo($("#extra-services"));
    }
    else {
      $("#" + id).remove();
    }
  });


   $('.cb-services').click(function() {
                    var checkboxes = $('input:checkbox:checked').length;
                    // alert(checkboxes);
                    if (checkboxes == 1) {
                      $('#thr').text("3.5 Hrs");
                      $('#thr1').text("100.00 €");
                    }
                    else if(checkboxes == 2){
                      $('#thr').text("4 Hrs");
                      $('#thr1').text("200.00 €");
                    }
                     else if(checkboxes == 3){
                      $('#thr').text("4.5 Hrs");
                    }
                     else if(checkboxes == 4){
                      $('#thr').text("5 Hrs");
                      $('#thr1').text("300.00 €");
                    }
                    else if(checkboxes == 5){
                      $('#thr').text("5.5 Hrs");
                      $('#thr1').text("400.00 €");
                    }
                    else{
                      $('#thr').text("0.0 Hrs");
                      $('#thr1').text("0.00 €");
                    }
                });

             $('.add').click(function(){
              var helo = $(this).val();
              // $('#h1').html(helo);

              $.ajax({
                type: 'post',
                url: 'http://localhost/Home_DB/functions/radio',
                data:{
                  check: true,
                  helo: helo,
                },
                dataType: 'json',
              // alert("hello");
              cache: false,
              success: function(data){
                console.log(data.Message);
                if(data.status == "Success"){
                              alert('success');
                              helo = data.helo;
                              console.log(helo);
                              // $('a[href="#menu2"]').tab("show");
                              localStorage.setItem("data", JSON.stringify(data));
                          }else{
                              // alert('failer');
                              alert(data.Message);
                          }
              },
               error: function(XMLHttpRequest, textStatus, errorThrown) { 
                  alert("Status: " + textStatus); alert("Error: " + errorThrown); 
              }   
              });

              return false;
            
            });



              $('.selectsp').click(function(){
              var id = $(this).val();
              // $('#h1').html(helo);

              $.ajax({
                type: 'post',
                url: 'http://localhost/Home_DB/functions/spid',
                data:{
                  check: true,
                  id: id,
                },
                dataType: 'json',
              // alert("hello");
              cache: false,
              success: function(data){
                console.log(data.Message);
                if(data.status == "Success"){
                              alert('success');
                              $('#r_Val').val(data.sid);
                              // $('a[href="#menu2"]').tab("show");
                              // localStorage.setItem("data", JSON.stringify(data));
                          }else{
                              // alert('failer');
                              alert(data.Message);
                          }
              },
               error: function(XMLHttpRequest, textStatus, errorThrown) { 
                  alert("Status: " + textStatus); alert("Error: " + errorThrown); 
              }   
              });

              return false;
            
            });



});



$("#schedule").on("submit", function(){
   //Code: Action (like ajax...)
   var date_val = $('#date').val();
  if (date_val.length == '') {
    $('#dateCheck').html("please enter date");
    $('#dateCheck').css("color", "red");
    $('#dateCheck').fadeOut("slow");
  }
   var date = $('#date').val();
   var time = $('#time').val();
   var hrs = $('#hrs').val();
   // var extras = $('.cb-services').val();
   var cmt = $('#cmt').val();
    var insert = [];
                $('.cb-services').each(function() {
                    if ($(this).is(":checked")) {
                        insert.push($(this).val());
                    }
                });
                insert = insert.toString();
  // alert(extras);
  // alert(insert);


  $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/schedule',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
      date: date,
      time: time,
      hrs: hrs,
      // extras: extras,
      insert: insert,
      cmt: cmt,

    },
    dataType: 'json',
    // alert("hello");
    cache: false,
    success: function(data){
      console.log(data.Message);
      if(data.status == "Success"){
                    // alert('success');
                    $('a[href="#menu2"]').tab("show");
                    // localStorage.setItem("data", JSON.stringify(data));
                    // var hdhfu = JSON.parse(localStorage.getItem("data"));
                    // if (arr != null) {
                      // let html = '';
                      // for(let k in hdhfu){
                        // html = html + $hdhfu[k];
                      // }
                      // console.log(hdhfu.date, hdhfu.ex);
                      // $('#r_Val').val(hdhfu.date);
                    // }
                }else{
                    // alert('failer');
                    console.log(data.Message);
                }
    },
     error: function(XMLHttpRequest, textStatus, errorThrown) { 
        console.log("Status: " + textStatus); console.log("Error: " + errorThrown); 
    }   
   
   
 });

  return false;

});


$("#Add-form").on('submit', function(){
   //Code: Action (like ajax...)
   // e.preventDefault();
   var street = $('#street').val();
   var HN = $('#HN').val();
   var Pc = $('#Pc').val();
   var mobile = $('#mobile').val();
   var city = $('#city').val();
   var Userid = $('#Userid').val();
   
  $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/address',
    data: {
      check: true,
      street: street,
      HN: HN,
      Pc: Pc,
      Userid: Userid,
      mobile: mobile,
      city: city,

    },
    dataType: 'json',
    // alert("a");
    cache: false,
    success: function(data){
      console.log(data.Message);
      if(data.status == "Success"){
                    // alert('success');
                    console.log('success');
                    $('#add2').show();
                    // $('#address1').html('Address');
                    // $('#colon').html(':');
                    // $('#colon').html(':');
                    // $('phone1').html('Phone number');
                    var s_val = $('#street').val();
                     $('#Street').html(s_val);
                     var h_val = $('#HN').val();
                     $('#Hn').html(h_val);
                     var p_val = $('#Pc').val();
                     $('#pc1').html(p_val);
                     var c_val = $('#city').val();
                     $('#City').html(c_val);
                     var m_val = $('#mobile').val();
                     $('#Mobile').html(m_val);
                     $('#address-form').hide();
                      $('#Add').show();
                    // $('a[href="#menu3"]').tab("show");
                }else{
                    // alert('failer');
                    alert(data.Message);
                }
    },
     error: function(XMLHttpRequest, textStatus, errorThrown) { 
        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
    }   
   
   
 });

  return false;

});


// $("#ok").on("submit", function(){
//   $('a[href="#menu3"]').tab("show");
// })
$('#ok').click(function(){
  $('a[href="#menu3"]').tab("show");
});


// function myFunction(){
//   alert('helo');
//   // alert('helo');
//   // var ohk1 = [];
//   // $('#helook').each(function(){
    
//   //     ohk1.push($(this).val());
    
//   // });
//   // ohk1 = ohk1.toString();
//   // ohk2 = "<?php echo '$values->ServiceRequestId';?>";
//   // console.log(ohk2);
//   // alert(ohk2);
//   // console.log(ohk1);
//    var serviceid1 = $('#serviceid1').val();
//    var ratingto = $('#ratingtosp').val();
//    var helook = $('#helook').val();
//    var ratingfrom = $('#ratingfrom').val();
//    var comment = $('#commentsp').val();
//    // var cmt = $('#cmt').val();
//     var ontime = [];
//                 $('.st').each(function() {
//                     if ($(this).is(":checked")) {
//                         ontime.push($(this).val());
//                     }
//                 });
//                 ontime = ontime.toString();
//    var friendly = [];
//                 $('.star').each(function() {
//                     if ($(this).is(":checked")) {
//                         friendly.push($(this).val());
//                     }
//                 });
//                 friendly = friendly.toString();
//     var quality = [];
//                 $('.star1').each(function() {
//                     if ($(this).is(":checked")) {
//                         quality.push($(this).val());
//                     }
//                 });
//                 quality = quality.toString();
//                 alert(helook);

//   $.ajax({
//     type: 'post',
//     url: 'http://localhost/Home_DB/functions/Rate',
//     // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
//     data: {
//       check: true,
//       serviceid1: serviceid1,
//       helook: helook,
//       ratingfrom: ratingfrom,
//       comment: comment,
//       ontime: ontime,
//       friendly: friendly,
//       quality: quality,

//     },
//     dataType: 'json',
//     // alert("hello");
//     cache: false,
//     success: function(data){
//       console.log(data.Message);
//       if(data.status == "Success"){
//                     // alert('success');
//                     console.log('suc');
//                     // $('a[href="#menu2"]').tab("show");
//                     $('#value5').val(data.var5);
//                      var o = $('#value5').val();
//                       var r = o +'pt';
//                        $('.fill-ratings').width(r);
//                     localStorage.setItem("data", JSON.stringify(data));
                    
//                 }else{
//                     // alert('failer');
//                     console.log(data.Message);
//                 }
//     },
//      error: function(XMLHttpRequest, textStatus, errorThrown) { 
//         console.log("Status: " + textStatus); console.log("Error: " + errorThrown); 
//     }   
   
   
//  });

//   return false;
// };

// function ok(){
//   alert('heyy');
//   var serviceid1 = $('#serviceid1').val();
//    var ratingtosp = $('#ratingtosp').val();
//    var ratingfrom = $('#ratingfrom').val();
//    var commentsp = $('#commentsp').val();
//    // var cmt = $('#cmt').val();
//     var ontime = [];
//                 $('.st').each(function() {
//                     if ($(this).is(":checked")) {
//                         ontime.push($(this).val());
//                     }
//                 });
//                 ontime = ontime.toString();
//    var friendly = [];
//                 $('.star').each(function() {
//                     if ($(this).is(":checked")) {
//                         friendly.push($(this).val());
//                     }
//                 });
//                 friendly = friendly.toString();
//     var quality = [];
//                 $('.star1').each(function() {
//                     if ($(this).is(":checked")) {
//                         quality.push($(this).val());
//                     }
//                 });
//                 quality = quality.toString();
//                 alert(ratingtosp);

//   $.ajax({
//     type: 'post',
//     url: 'http://localhost/Home_DB/functions/Rate',
//     // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
//     data: {
//       check: true,
//       serviceid1: serviceid1,
//       ratingtosp: ratingtosp,
//       ratingfrom: ratingfrom,
//       commentsp: commentsp,
//       ontime: ontime,
//       friendly: friendly,
//       quality: quality,

//     },
//     dataType: 'json',
//     // alert("hello");
//     cache: false,
//     success: function(data){
//       console.log(data.Message);
//       if(data.status == "Success"){
//                     // alert('success');
//                     console.log('suc');
//                     // $('a[href="#menu2"]').tab("show");
//                     $('#value5').val(data.var5);
//                      var o = $('#value5').val();
//                       var r = o +'pt';
//                        $('.fill-ratings').width(r);
//                     localStorage.setItem("data", JSON.stringify(data));
                    
//                 }else{
//                     // alert('failer');
//                     console.log(data.Message);
//                 }
//     },
//      error: function(XMLHttpRequest, textStatus, errorThrown) { 
//         console.log("Status: " + textStatus); console.log("Error: " + errorThrown); 
//     }   
   
   
//  });

//   return false;
// };

// $("#save55").click(function(){
   //Code: Action (like ajax...)
   // e.preventDefault();
   // alert('helo');
   // var serviceid1 = $('#serviceid1').val();
   // var ratingto = $('#ratingto').val();
   // var ratingfrom = $('#ratingfrom').val();
   // var comment = $('#comment').val();
   // // var cmt = $('#cmt').val();
   //  var ontime = [];
   //              $('.st').each(function() {
   //                  if ($(this).is(":checked")) {
   //                      ontime.push($(this).val());
   //                  }
   //              });
   //              ontime = ontime.toString();
   // var friendly = [];
   //              $('.star').each(function() {
   //                  if ($(this).is(":checked")) {
   //                      friendly.push($(this).val());
   //                  }
   //              });
   //              friendly = friendly.toString();
   //  var quality = [];
   //              $('.star1').each(function() {
   //                  if ($(this).is(":checked")) {
   //                      quality.push($(this).val());
   //                  }
   //              });
   //              quality = quality.toString();

 //  $.ajax({
 //    type: 'post',
 //    url: 'http://localhost/Home_DB/functions/Rate',
 //    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
 //    data: {
 //      check: true,
 //      serviceid1: serviceid1,
 //      ratingto: ratingto,
 //      ratingfrom: ratingfrom,
 //      comment: comment,
 //      ontime: ontime,
 //      friendly: friendly,
 //      quality: quality,

 //    },
 //    dataType: 'json',
 //    // alert("hello");
 //    cache: false,
 //    success: function(data){
 //      console.log(data.Message);
 //      if(data.status == "Success"){
 //                    // alert('success');
 //                    console.log('suc');
 //                    // $('a[href="#menu2"]').tab("show");
 //                    $('#value5').val(data.var5);
 //                     var o = $('#value5').val();
 //                      var r = o +'pt';
 //                       $('.fill-ratings').width(r);
 //                    localStorage.setItem("data", JSON.stringify(data));
                    
 //                }else{
 //                    // alert('failer');
 //                    console.log(data.Message);
 //                }
 //    },
 //     error: function(XMLHttpRequest, textStatus, errorThrown) { 
 //        console.log("Status: " + textStatus); console.log("Error: " + errorThrown); 
 //    }   
   
   
 // });

 //  return false;

// });



$("#updateprofile").on("submit", function(){
   //Code: Action (like ajax...)
   var fname = $('#fname').val();
   var lname = $('#lname').val();
   var e_mail = $('#e-mail').val();
   // var extras = $('.cb-services').val();
   var mobilenum = $('#mobilenum').val();
   var uid = $('#uid').val();
    
  // alert(extras);
  // alert(insert);


  $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/updatepro',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
      fname: fname,
      lname: lname,
      e_mail: e_mail,
      // extras: extras,
      mobilenum: mobilenum,
      uid: uid,
      // cmt: cmt,

    },
    dataType: 'json',
    // alert("hello");
    cache: false,
    success: function(data){
      console.log(data.Message);
      if(data.status == "Success"){
                    alert('success');
                    // $('a[href="#menu2"]').tab("show");
                    // localStorage.setItem("data", JSON.stringify(data));
                    // var hdhfu = JSON.parse(localStorage.getItem("data"));
                    // if (arr != null) {
                      // let html = '';
                      // for(let k in hdhfu){
                        // html = html + $hdhfu[k];
                      // }
                      // console.log(hdhfu.date, hdhfu.ex);
                      // $('#r_Val').val(hdhfu.date);
                    // }
                }else{
                    // alert('failer');
                    console.log(data.Message);
                }
    },
     error: function(XMLHttpRequest, textStatus, errorThrown) { 
        console.log("Status: " + textStatus); console.log("Error: " + errorThrown); 
    }   
   
   
 });

  return false;

});






// $('#Edit').click(function(){
//    //Code: Action (like ajax...)
//    var street2 = $('#street2').val();
//    var HN2 = $('#HN2').val();
//    var Pc2 = $('#Pc2').val();
//    var mobile2 = $('#mobile2').val();
//    var city2 = $('#city2').val();
//    var Userid2 = $('#Userid2').val();
//    var Addid2 = $('#Addid2').val();
   
//   $.ajax({
//     type: 'post',
//     url: 'http://localhost/Home_DB/functions/addupdate',
//     data: {
//       check: true,
//       street2: street2,
//       HN2: HN2,
//       Pc2: Pc2,
//       Userid2: Userid2,
//       mobile2: mobile2,
//       city2: city2,
//       Addid2: Addid2,

//     },
//     dataType: 'json',
//     // alert("a");
//     cache: false,
//     success: function(data){
//       console.log(data.Message);
//       if(data.status == "Success"){
//                     // alert('success');
//                     console.log('success');
                    
//                     // $('a[href="#menu3"]').tab("show");
//                 }else{
//                     // alert('failer');
//                     alert(data.Message);
//                 }
//     },
//      error: function(XMLHttpRequest, textStatus, errorThrown) { 
//         alert("Status: " + textStatus); alert("Error: " + errorThrown); 
//     }   
   
   
//  });

//   return false;

// });



// function helo55(){
//    //Code: Action (like ajax...)
//    alert('helo');
//    // var Addid3 = $('#Addid3').val();
//    var Addid3 = [];
//    $('.Addid3').each(function(){
//     Addid3.push($(this).val());
//    });
//    console.log(Addid3);
//    // Addid3 = Addid3.toString();
//    // alert(Addid3);
//    console.log(Addid3);
   
//   $.ajax({
//     type: 'post',
//     url: 'http://localhost/Home_DB/functions/adddelete',
//     data: {
//       check: true,
//       Addid3: Addid3,

//     },
//     dataType: 'json',
//     // alert("a");
//     cache: false,
//     success: function(data){
//       console.log(data.Message);
//       if(data.status == "Success"){
//                     // alert('success');
//                     console.log('success');
                    
//                     // $('a[href="#menu3"]').tab("show");
//                 }else{
//                     // alert('failer');
//                     alert(data.Message);
//                 }
//     },
//      error: function(XMLHttpRequest, textStatus, errorThrown) { 
//         alert("Status: " + textStatus); alert("Error: " + errorThrown); 
//     }   
   
   
//  });

//   return false;

// };


$('#changepass').click(function(){
   //Code: Action (like ajax...)
   alert('helo');
   var oldpass = $('#oldpass').val();
   var newpass = $('#newpass').val();
   var confirmpass = $('#confirmpass').val();
   var dbpass = $('#dbpass').val();
   var changeid = $('#changeid').val();
   
  $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/changepass',
    data: {
      check: true,
      oldpass: oldpass,
      newpass: newpass,
      confirmpass: confirmpass,
      dbpass: dbpass,
      changeid: changeid,

    },
    dataType: 'json',
    // alert("a");
    cache: false,
    success: function(data){
      console.log(data.Message);
      if(data.status == "Success"){
                    // alert('success');
                    console.log('success');
                    
                    // $('a[href="#menu3"]').tab("show");
                }else{
                    // alert('failer');
                    alert(data.Message);
                }
    },
     error: function(XMLHttpRequest, textStatus, errorThrown) { 
        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
    }   
   
   
 });

  return false;

});


$("#bookservice").on("submit", function(){
   //Code: Action (like ajax...)
  //  var date_val = $('#date').val();
  // if (date_val.length == '') {
  //   $('#dateCheck').html("please enter date");
  //   $('#dateCheck').css("color", "red");
  //   $('#dateCheck').fadeOut("slow");
  // }
   var card = $('#card-number').val();
   var radio_val = $('#r_Val').val();
   // var time = $('#time').val();
   // var hrs = $('#hrs').val();
   // var extras = $('.cb-services').val();
   // var cmt = $('#cmt').val();
    // var insert = [];
    //             $('.cb-services').each(function() {
    //                 if ($(this).is(":checked")) {
    //                     insert.push($(this).val());
    //                 }
    //             });
    //             insert = insert.toString();
  // alert(extras);
  // alert(insert);


  $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/book',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
      // date: date,
      // time: time,
      // hrs: hrs,
      // extras: extras,
      // insert: insert,
      // cmt: cmt,
      card: card,
      radio_val: radio_val,

    },
    dataType: 'json',
    // alert("hello");
    cache: false,
    success: function(data){
      console.log(data.Message);
      if(data.status == "Success"){
        console.log('success');
                    
                }else{
                    // alert('failer');
                    console.log(data.Message);
                }
    },
     error: function(XMLHttpRequest, textStatus, errorThrown) { 
        console.log("Status: " + textStatus); console.log("Error: " + errorThrown); 
    }   
   
   
 });

  return false;

});




// 
$( document ).ajaxStart(function() {
    $('.loading-overlay').show();
});

// Hide loading overlay when ajax request completes
$( document ).ajaxStop(function() {
    $('.loading-overlay').hide();
});


$("#blockunblock").on("submit", function(){
   //Code: Action (like ajax...)
   var targetid = $('#targetid').val();
   var userid = $('#userid').val();
    
  alert(targetid);
  // alert(insert);


  $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/favunfav',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
     targetid: targetid,
     userid: userid,

    },
    dataType: 'json',
    // alert("hello");
    cache: false,
    success: function(data){
      console.log(data.Message);
      if(data.status == "Success"){
                    alert('success');
                    // $('a[href="#menu2"]').tab("show");
                    // localStorage.setItem("data", JSON.stringify(data));
                    // var hdhfu = JSON.parse(localStorage.getItem("data"));
                    // if (arr != null) {
                      // let html = '';
                      // for(let k in hdhfu){
                        // html = html + $hdhfu[k];
                      // }
                      // console.log(hdhfu.date, hdhfu.ex);
                      // $('#r_Val').val(hdhfu.date);
                    // }
                }else{
                    // alert('failer');
                    console.log(data.Message);
                }
    },
     error: function(XMLHttpRequest, textStatus, errorThrown) { 
        console.log("Status: " + textStatus); console.log("Error: " + errorThrown); 
    }   
   
   
 });

  return false;

});

