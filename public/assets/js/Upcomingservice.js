 $(document).ready(function() {
   tablename = $('#example9').DataTable( {
        "order": [[ 3, "desc" ]],
         dom: 'Bfrtip',
        buttons: [
            'excel'
        ],
        "processing" : true,
    
    "ajax" : {
     url:"http://localhost/Home_DB/functions/Showdata",
     type:"POST"
    },
    "order" : [],
    "columnDefs": [
    {
            "targets": 0,
            "data": "ServiceRequestId"
        },
        {
            "targets": 1,
            "data": "ServiceStartDate",
            'render': function (data, type, row, meta) {
      return '<img src="http://localhost/Home_DB/public/assets/images/upcomingServices/cal.png" alt="" /> '+data.split(" ", 1)+'<br> <img src="http://localhost/Home_DB/public/assets/images/upcomingServices/time.png" alt="" />  '+data.substr(11, 18)+'';
                        }
        },
         {
                "targets": 2,
                // "data": "First_name"
                "render": function (data, type, row) {
                   var result =  row["First_name"] + "&nbsp" + row["Last_name"] + 
                   "<img src=\"http://localhost/Home_DB/public/assets/images/upcomingServices/home.png\" alt=\"\" /> " + row["AddressLine1"] ;
                   console.log(result);
                        return result;
                    },
                    // "targets": 0,
            },
            {
                "targets": 3,
                "data": "TotalCost",
                'render': function (data, type, row, meta) {
      return ' <td class="txt2"> '+ row["TotalCost"] +' &nbsp€</td>';
                // "visible": false
            },
            },
            {
            "targets": 4,
            "data": null,
            "defaultContent": "<button class=\"btn btn1 border\" id=\"acceptbtn\" name=\"acceptbtn\">Accept</button",


        },
    ]
    } );

   $('#example9 tbody').on('click', '[id*=acceptbtn]', function () {
        var data_row = tablename.row( $(this).parents('tr') ).data(); // here is the change
    

        // alert("ofdk");
        var serviceid = data_row.ServiceRequestId; 
        var userid = data_row.Serviceproviderid; 
        var stime = data_row.ServiceStartDate.substr(11, 18); 

        $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/accept',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
      serviceid: serviceid,
      userid: userid,
      stime: stime,
     
    },
    dataType: 'json',
    // alert("hello");
    cache: false,
    success: function(data){
      console.log(data.Message);
      if(data.status == "Success"){
                    // alert('success');
                    console.log('suc');
                    
                    
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


    } );

     upcoming = $('#example8').DataTable( {
        "order": [[ 3, "desc" ]],
         dom: 'Bfrtip',
        buttons: [
            'excel'
        ],
         "processing" : true,
    
    "ajax" : {
     url:"http://localhost/Home_DB/functions/Showdatainit",
     type:"POST"
    },
    "order" : [],
    "columnDefs": [
    {
            "targets": 0,
            "data": "ServiceRequestId"
        },
        {
            "targets": 1,
            "data": "ServiceStartDate",
            'render': function (data, type, row, meta) {
      return '<img src="http://localhost/Home_DB/public/assets/images/upcomingServices/cal.png" alt="" /> '+data.split(" ", 1)+'<br> <img src="http://localhost/Home_DB/public/assets/images/upcomingServices/time.png" alt="" />  '+data.substr(11, 18)+'';
                        }
        },
         {
                "targets": 2,
                // "data": "First_name"
                "render": function (data, type, row) {
                   var result =  row["First_name"] + "&nbsp" + row["Last_name"] + 
                   "<img src=\"http://localhost/Home_DB/public/assets/images/upcomingServices/home.png\" alt=\"\" /> " + row["AddressLine1"] ;
                   console.log(result);
                        return result;
                    },
                    // "targets": 0,
            },
            {
                "targets": 3,
                "data": "TotalCost",
                'render': function (data, type, row, meta) {
      return ' <td class="txt2"> '+ row["TotalCost"] +' &nbsp€</td>';
                // "visible": false
            },
            },
            {
            "targets": 4,
            "data": null,
            'render': function (data, type, row, meta) {
          var date =  moment().format("YYYY-MM-DD");
          var time = moment().format("hh:mm:ss");
          if(row["ServiceStartDate"].split(" ", 1) < date && row["endTime"] < time)
            { 
             return '<button id="completesr" class="btn btn1 border">Complete</button>'; 
            }
            else{
              return '<button id="cancelsr"  type="submit" class="btn btn1 border">Cancel</button>' ;
            } +' &nbsp€</td>';
            },


        },
    ]
    } );

     $('#example8 tbody').on('click', '[id*=cancelsr]', function () {
        var data_row = upcoming.row( $(this).parents('tr') ).data(); // here is the change
    

        // alert("ofdk");
        var srid = data_row.ServiceRequestId; 
        // var userid = data_row.Serviceproviderid; 
        // var stime = data_row.ServiceStartDate.substr(11, 18); 

        $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/chancelsr',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
      srid: srid,
      // userid: userid,
      // stime: stime,
     
    },
    dataType: 'json',
    // alert("hello");
    cache: false,
    success: function(data){
      console.log(data.Message);
      if(data.status == "Success"){
                    // alert('success');
                    console.log('suc');
                   
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


    } );


     $('#example8 tbody').on('click', '[id*=completesr]', function () {
        var data_row = upcoming.row( $(this).parents('tr') ).data(); // here is the change
    

        // alert("ofdk");
        var srid1 = data_row.ServiceRequestId; 
        // var userid = data_row.Serviceproviderid; 
        // var stime = data_row.ServiceStartDate.substr(11, 18); 

        $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/complerelsr',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
      srid1: srid1,
      // userid: userid,
      // stime: stime,
     
    },
    dataType: 'json',
    // alert("hello");
    cache: false,
    success: function(data){
      console.log(data.Message);
      if(data.status == "Success"){
                    // alert('success');
                    console.log('suc');
                   
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


    } );
     $('#example7').DataTable( {
        "order": [[ 2, "desc" ]],
         dom: 'Bfrtip',
        buttons: [
            'excel'
        ],
        "processing" : true,
    
    "ajax" : {
     url:"http://localhost/Home_DB/functions/initialfun",
     type:"POST"
    },
    "order" : [],
    "columnDefs": [
    {
            "targets": 0,
            "data": "ServiceRequestId"
        },
        {
            "targets": 1,
            "data": "ServiceStartDate",
            'render': function (data, type, row, meta) {
      return '<img src="http://localhost/Home_DB/public/assets/images/upcomingServices/cal.png" alt="" /> '+data.split(" ", 1)+'<br> <img src="http://localhost/Home_DB/public/assets/images/upcomingServices/time.png" alt="" />  '+data.substr(11, 18)+'';
                        }
        },
         {
                "targets": 2,
                // "data": "First_name"
                "render": function (data, type, row) {
                   var result =  row["First_name"] + "&nbsp" + row["Last_name"] + 
                   "<img src=\"http://localhost/Home_DB/public/assets/images/upcomingServices/home.png\" alt=\"\" /> " + row["AddressLine1"] ;
                   console.log(result);
                        return result;
                    },
                    // "targets": 0,
            },
            ],
    } );

      $('#example6').DataTable( {
        "order": [[ 2, "desc" ]],
         dom: 'Bfrtip',
        buttons: [
            'excel'
        ], 
        "processing" : true,
    
    "ajax" : {
     url:"http://localhost/Home_DB/functions/ratedata",
     type:"POST"
    },
    "order" : [],
    "columnDefs": [
    {
            "targets": 0,
            // "data": "ServiceRequestId"
            'render': function (data, type, row, meta) {
              return row["ServiceRequestId"] + "<br>" + row["First_name"] + "&nbsp" + row["Last_name"]
      },
    },
    {
            "targets": 1,
            "data": "ServiceStartDate",
            'render': function (data, type, row, meta) {
      return '<img src="http://localhost/Home_DB/public/assets/images/upcomingServices/cal.png" alt="" /> '+data.split(" ", 1)+'<br> <img src="http://localhost/Home_DB/public/assets/images/upcomingServices/time.png" alt="" />  '+data.substr(11, 18)+'';
                        }
        },
        {
                "targets": 2,
                // "data": null,
                // "defaultContent": null,
                "render": function (data, type, row, meta) {
                   var result =  "<div class=\"star-ratings\"><div class=\"fill-ratings\" style=\"width:"+ row["ratings"] + "% !important;\"><span id=\"st5\" class=\"star5\">★★★★★</span></div><div class=\"empty-ratings\"><span id=\"st51\" class=\"star5\">★★★★★</span></div></div>";
                        return result;
                    },
                   // console.log(result);
                   // if (row["First_name"] != null && row["Last_name"] != null) {
                    // return result;
                   // }
                    },
                    
                    // "targets": 0,
            // },
      ] 
    } );


      blcdata = $('#userblc').DataTable( {
        "order": [[ 2, "desc" ]],
         dom: 'Bfrtip',
        buttons: [
            'excel'
        ], 
         "processing" : true,
    
    "ajax" : {
     url:"http://localhost/Home_DB/functions/userdata",
     type:"POST"
    },
    "order" : [],
    "columnDefs": [
    {
            "targets": 0,
            // "data": "ServiceRequestId"
            'render': function (data, type, row, meta) {
      if (row['isblockd'] != 1) {
        return '<div ><span class="col-sm-2 float-start card text-center"><div class="col-auto card-body"><span><div><img class="img1"src="http://localhost/Home_DB/public/assets/images/book-service/forma-1-copy-19.png"alt=""></div></span></div><div class="div1">'+ row['First_name'] + row['Last_name'] + '<div class="call1"><span><button class="border gbtn ohk5 selectsp1" id="block" type="submit" name="block" >Block</button></span><span>';
        // return helo;
      }
      if (row['isblockd'] == 1) {
        return '<div ><span class="col-sm-2 float-start card text-center"><div class="col-auto card-body"><span><div><img class="img1"src="http://localhost/Home_DB/public/assets/images/book-service/forma-1-copy-19.png"alt=""></div></span></div><div class="div1">'+ row['First_name'] + row['Last_name'] + '<div class="call1"><span><button class="border gbtn ohk5 selectsp1 " id="unblock" type="submit" name="unblock" >unBlock</button></span>';
      }
        },
      },
        ] 
    } );


       $('#userblc tbody').on('click', '[id*=block]', function () {
        var data_row = blcdata.row( $(this).parents('tr') ).data(); // here is the change
        var targetid = data_row.UserId;
        var Srid = data_row.Serviceproviderid;

         $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/blockby',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
      targetid: targetid,
      Srid: Srid,
      // userid: userid,
      // stime: stime,
     
    },
    dataType: 'json',
    // alert("hello");
    cache: false,
    success: function(data){
      console.log(data.Message);
      if(data.status == "Success"){
                    // alert('success');
                    console.log('suc');
                   
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


    } );


       $('#userblc tbody').on('click', '[id*=unblock]', function () {
        var data_row = blcdata.row( $(this).parents('tr') ).data(); // here is the change
        var targetid = data_row.UserId;
        var Srid = data_row.Serviceproviderid;

         $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/unblockuser',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
      targetid: targetid,
      Srid: Srid,
      // userid: userid,
      // stime: stime,
     
    },
    dataType: 'json',
    // alert("hello");
    cache: false,
    success: function(data){
      console.log(data.Message);
      if(data.status == "Success"){
                    // alert('success');
                    console.log('suc');
                   
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


    } );
} );






$('#v-pills-helo-tab').click(function(){
  $('#v-pills-home-tab').removeClass('active');
});

$('#v-pills-home-tab').click(function(){
  $('#v-pills-helo-tab').removeClass('active');
});



$('#acceptbtn').click(function(){
  // e.preventDefault();
  var status = $('#statusid').val();
  if (status == "Accepted") {
      alert(status);
  }
  else{
    alert('helo');
  }
  // $('imp77').html('done');

  // $('imp77').show();
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







$("#updateprofile22").on("submit", function(){
   //Code: Action (like ajax...)
   var fname = $('#fname').val();
   var lname = $('#lname').val();
   var e_mail = $('#e-mail').val();
   var mobilenum = $('#mobilenum').val();
   var streetname = $('#streetfor').val();
   var Housenum = $('#Housenumfor').val();
   var postalcode = $('#postalcodefor').val();
   var city = $('#cityfor').val();
   var uid22 = $('#uid22').val();
   var avtarfam = [];
                $('.avtar').each(function() {
                    if ($(this).is(":checked")) {
                        avtarfam.push($(this).val());
                    }
                });
                avtarfam = avtarfam.toString();
                alert(avtarfam);
               


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
      avtarfam: avtarfam,
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





// $(document).ready(function(){
    // $("#v-pills-messages3-tab").on('click', function(){
    //     $('.fc-today-button').click();
    // });
// })







