
$('#v-pills-helo-tab').click(function(){
  $('#v-pills-home-tab').removeClass('active');
});

$('#v-pills-home-tab').click(function(){
  $('#v-pills-helo-tab').removeClass('active');
});



function responsive_menu(){
    var e = document.getElementById('menu_small');
    if(e.className === 'list1'){
        e.className += 'responsive';
    }
    else{
        e.className = 'list1';
    }
}




function cancelsr1(){
   //Code: Action (like ajax...)
   alert('helo');
   var srid = $('#srid').val();
   alert(srid);
   
 //  $.ajax({
 //    type: 'post',
 //    url: 'http://localhost/Home_DB/functions/chancelsr',
 //    data: {
 //      check: true,
 //      srid: srid,

 //    },
 //    dataType: 'json',
 //    // alert("a");
 //    cache: false,
 //    success: function(data){
 //      console.log(data.Message);
 //      if(data.status == "Success"){
 //                    // alert('success');
 //                    console.log('success');
                    
 //                    // $('a[href="#menu3"]').tab("show");
 //                }else{
 //                    // alert('failer');
 //                    alert(data.Message);
 //                }
 //    },
 //     error: function(XMLHttpRequest, textStatus, errorThrown) { 
 //        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
 //    }   
   
   
 // });

 //  return false;

};


$("#updateprofile22").on("submit", function(){
   //Code: Action (like ajax...)
   var fname = $('#fname').val();
   var lname = $('#lname').val();
   var e_mail = $('#e-mail').val();
   var mobilenum = $('#mobilenum').val();
   var streetname = $('#streetname').val();
   var Housenum = $('#Housenum').val();
   var postalcode = $('#postalcode').val();
   var city = $('#city').val();
   var uid22 = $('#uid22').val();
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
    url: 'http://localhost/Home_DB/functions/profileUpdate',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
      fname: fname,
      lname: lname,
      e_mail: e_mail,
      mobilenum: mobilenum,
      streetname: streetname,
      Housenum: Housenum,
      postalcode: postalcode,
      city: city,
      uid22: uid22,

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
    console.log("Status: " + textStatus); 
    console.log("Error: " + errorThrown); 
    }   
   
   
 });

  return false;

});
