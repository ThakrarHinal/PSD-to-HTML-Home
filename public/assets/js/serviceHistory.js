function responsive_menu(){
    var e = document.getElementById('menu_small');
    if(e.className === 'list1'){
        e.className += 'responsive';
    }
    else{
        e.className = 'list1';
    }
};



// if ( {}

// function responsive_menu(){
//     var e = document.getElementById('menu_small');
//     if(e.className === 'list1'){
//         e.className += 'responsive';
//     }
//     else{
//         e.className = 'list1';
//     }
// }
// function get_details(){
//     var PostalCode = $('#PostalCode').val();
//     if (PostalCode == '') {
//         alert("hello");
//     }
//     else{
//         jQuery.ajax({
//             url: 'set_up.php',
//             type: 'post',
//             data: 'pincode='+pincode,
//             success: function(data){
//                 console.log(data);
//             }
//         })
//     }
// }

// $(document).ready(function(){
//   // var proid = $('#proid').val();
//   var proid = [];
//                 $('.proid').each(function() {
//                     proid.push($(this).val());
//                 });
//                 proid = proid.toString();
  
//   // let PostalCode = $('#PostalCode').val();
//   // let data = { 
//   //   check: true,
//   //   proid: proid, 
//   // }
//   // let form = $(this);
//   alert(proid);

//   $.ajax({
//     type: 'post',
//     url: 'http://localhost/Home_DB/functions/userlogin',
//     data: {check: true, proid: proid,},
//     dataType: 'json',
//     success: function (data) {
//       console.log(data.Message);
      
//       if (data.status == "Success") {
//         // $('a[href="#menu1"]').tab("show");
//         // $('#Pc').val(data.pc);
//         console.log(data);
//         alert('success');
//         localStorage.setItem("PostalCode", JSON.stringify(data));
//       } else {
//         alert(data.Message);
//       }
//     },
//     error: function (XMLHttpRequest, textStatus, errorThrown) {
//       alert("something went wrong.")
//       console.log(XMLHttpRequest, textStatus, errorThrown);
//     }

//   });

//   return false;

// });
