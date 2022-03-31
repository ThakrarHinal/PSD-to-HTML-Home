       $(document).ready(function() {




   table =  $('#example').DataTable( {
        "order": [[ 3, "desc" ]],
         dom: 'Bfrtip',
        buttons: [
            'Export'
        ],
        // "responsive": true,
        "processing" : true,
    
    "ajax" : {
     url:"http://localhost/Home_DB/functions/showData1",
     type:"POST"
    },
    "order" : [],
  "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<button class=\"btn btn1 border\" id=\" hue \">Reschedule</button>  <button name=\"login\"  id=\"close\" class=\"btn btn2 border\">cancel</button>",


        },
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
                   var result =  "<span><img class=\"img1\" src=\"" + row['avtar'] + "\" alt=\"\"></span> " + row["First_name"] + "&nbsp" + row["Last_name"] + 
                   "<div class=\"star-ratings container rate5\"><div class=\"fill-ratings\" style=\"width: 0% !important;\"><span id=\"st5\" class=\"star5\">★★★★★</span></div><div class=\"empty-ratings\"><span id=\"st51\" class=\"star5\">★★★★★</span></div></div>";
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
                "visible": false,
                "data": "Serviceproviderid"
            },
            {
                "targets": 6,
                "visible": false,
                "data": "ServiceHours"
            },
            {
                "targets": 7,
                "visible": false,
                "data": "ExtraServices"
            },
            {
                "targets": 8,
                "visible": false,
                "data": "Mobile"
            },
            {
                "targets": 9,
                "visible": false,
                "data": "Email"
            },
            {
                "targets": 5,
                "visible": false,
                "data": "AddressLine1"
            }

         ],

        
        
    } );


   $('#example tbody').on('click', 'tr', function () {
         var name = $('td', this).eq(2).text();
        $('#modalcontainer').modal("show");
        // $('.text-center').text(name);
        var data = table.row( this ).data();
        // alert( 'You clicked on '+data['ServiceRequestId']+'\'s row' );
        $('#mail').text(data['Email']);
         $('#date').text(data['ServiceStartDate']);
          $('#time').text(data['ServiceHours']);
          $('#srid').text(data[4]);
          $('#ex').text(data['ExtraServices']);
          $('#net').text(data['TotalCost']);
          $('#add').text(data['AddressLine1']);
          $('#mob').text(data['Mobile']);


          // $('#modalcontainer').modal('show');
    // $('#modalcontainer').on('show.bs.modal', function (e) {
    //    var res = e.returnValue = true;
    //    return res;
    //   });

    } );


    $('#example tbody').on('click', '[id*=hue]', function () {
       // $("#modalcontainer").removeClass("in");

        var data_row = table.row( $(this).parents('tr') ).data(); // here is the change
        $('#modalcontainer').on('show.bs.modal', function (e) {
         var result =  e.returnValue = false;
         return result;
      });
    $("#modal1").modal('show');


    $('#modal1').on('shown.bs.modal', function() {

       $('#cancelid1').val(data_row.ServiceRequestId);
       $('#proid1').val(data_row.Serviceproviderid);
        $('#date1').val(data_row.ServiceStartDate.split(" ", 1));
        $('#time1').val(data_row.ServiceStartDate.substr(11, 18));

    });

  } );



    $('#example tbody').on('click', '[id*=close]', function () {
        var data_row = table.row( $(this).parents('tr') ).data(); // here is the change
    $("#modal2").modal('show');

    $('#modal2').on('shown.bs.modal', function() {

        // alert("ofdk");
       $('#cancelid').val(data_row.ServiceRequestId);
       $('#cancelproid').val(data_row.Serviceproviderid);
       //  $('#date1').val(data_row.ServiceStartDate.split(" ", 1));
       //  $('#time1').val(data_row.ServiceStartDate.substr(11, 18));

    });


    } );

    // $('#hue').click(alert('jik')); 

    

    table1 = $('#example1').DataTable( {
        "order": [[ 3, "desc" ]],
         dom: 'Bfrtip',
        buttons: [
            'excel'
        ],
        "processing" : true,
    
    "ajax" : {
     url:"http://localhost/Home_DB/functions/showData2",
     type:"POST"
    },
    "order" : [],
    "columnDefs": [{
      "targets": 0,
            "data": "ServiceStartDate",
            'render': function (data, type, row, meta) {
      return '<img src="http://localhost/Home_DB/public/assets/images/upcomingServices/cal.png" alt="" /> '+data.split(" ", 1)+'<br> <img src="http://localhost/Home_DB/public/assets/images/upcomingServices/time.png" alt="" />  '+data.substr(11, 18)+'';
                        },
    },
    {
                "targets": 1,
                // "data": null,
                "defaultContent": null,
                "render": function (data, type, row) {
                   var result =  "<span><img class=\"img1\" src=\"http://localhost/Home_DB/public/assets/images/serviceHistory/hat.png\" alt=\"\"></span> " + row["First_name"] + "&nbsp" + row["Last_name"] + 
                   "<div class=\"star-ratings container rate5\"><div class=\"fill-ratings\" style=\"width:"+ row["ratings"] +"% !important;\"><span id=\"st5\" class=\"star5\">★★★★★</span></div><div class=\"empty-ratings\"><span id=\"st51\" class=\"star5\">★★★★★</div></div></span><span>"+ row["ratings"] + "</span>";
                   console.log(result);
                   if (row["First_name"] != null && row["Last_name"] != null) {
                    return result;
                   }
                    },
                    
                    // "targets": 0,
            },
            {
                "targets": 2,
                "data": "TotalCost",
                'render': function (data, type, row, meta) {
      return ' <td class="txt2"> '+ row["TotalCost"] +' &nbsp€</td>';
                // "visible": false
            },
          },
          {
            "targets": 3,
            "data": "Status",
            'render': function (data, type, row, meta) {
      // return ' <button class=\"border gbtn status1\"> '+ data +' </button>';
            if (row['Status'] == 'Cancelled') {
              return ' <button class=\"border gbtn status1\"> '+ data +' </button>'
            }
            if (row['Status'] == 'completed') {
              return ' <button class=\"border btn-success status1\"> '+ data +' </button>'
            }
        },
        },
        {
            "targets": 4,
            // "data": null,
            // "defaultContent": "<button type=\"button\" class=\"btn btn1 border\" id=\" RateSp \">Rate SP</button>",
                      'render': function (data, type, row, meta) {
      // return ' <button class=\"border gbtn status1\"> '+ data +' </button>';
            if (row['Status'] == 'Cancelled') {
              return '<button type=\"button\" class=\"disabled btn btn1 border\" id=\" RateSp \">Rate SP</button>'
            }
            if (row['Status'] == 'completed') {
              return '<button type=\"button\" class=\"btn btn1 border\" id=\" RateSp \">Rate SP</button>'
            }
        },

        },
      ]
    } );

     $('#example1 tbody').on('click', '[id*=RateSp]', function () {
        var data_row = table1.row( $(this).parents('tr') ).data(); // here is the change
        // alert('jdh');
    $('#Modal3').modal("show");

    $('#Modal3').on('shown.bs.modal', function() {

        // alert("ofdk");
       $('#serviceid1').val(data_row.ServiceRequestId);
       $('#helook').val(data_row.Userid);
        $('#ratingfrom').val(data_row.UserId);
       //  $('#time1').val(data_row.ServiceStartDate.substr(11, 18));

    });

  });

     fab = $('#example2').DataTable( {
        "order": [[ 3, "desc" ]],
         dom: 'Bfrtip',
        buttons: [
            'excel'
        ],
        "processing" : true,
    
    "ajax" : {
     url:"http://localhost/Home_DB/functions/fav",
     type:"POST"
    },
    "order" : [],
    "columnDefs": [{
      "targets": 0,
            // "data": "ServiceStartDate",
            'render': function (data, type, row, meta) {
      if (row['isblockd'] != 1 && row['isfavourite'] != 1) {
        return '<div ><span class="col-sm-2 float-start card text-center"><div class="col-auto card-body"><span><div><img class="img1"src="http://localhost/Home_DB/public/assets/images/book-service/forma-1-copy-19.png"alt=""></div></span></div><div class="div1">'+ row['First_name'] + row['Last_name'] + '</div><div class="star-ratings container rate5"><div class="fill-ratings" style="width: 25% !important;"><span id="st5" class="star5">★★★★★</span></div><div class="empty-ratings"><span id="st51" class="star5">★★★★★</span></div></div><span class="hu5">'+ row['ratings'] +'</span>  <br><div class="call1"><span><button class="border gbtn ohk5 selectsp1" id="block" type="submit" name="block" >Block</button></span><span><button type="submit" name="fav" id="Fav" class="btn btn2 btn1 border selectsp1 selectsp22">Favourite</button></span>';
        // return helo;
      }
      if (row['isblockd'] == 1 && row['isfavourite'] == 1) {
        return '<div ><span class="col-sm-2 float-start card text-center"><div class="col-auto card-body"><span><div><img class="img1"src="http://localhost/Home_DB/public/assets/images/book-service/forma-1-copy-19.png"alt=""></div></span></div><div class="div1">'+ row['First_name'] + row['Last_name'] + '</div><div class="star-ratings container rate5"><div class="fill-ratings" style="width: 25% !important;"><span id="st5" class="star5">★★★★★</span></div><div class="empty-ratings"><span id="st51" class="star5">★★★★★</span></div></div><span class="hu5">'+ row['ratings'] +'</span>  <br><div class="call1"><span><button class="border gbtn ohk5 selectsp1 " id="unblock" type="submit" name="unblock" >unBlock</button></span><span><button type="submit" name="fav" id="unFav" class="btn btn2 btn1 border selectsp1 selectsp22">unFavourite</button></span>'
      }
      if (row['isblockd'] != 1 && row['isfavourite'] == 1) {
        return '<div ><span class="col-sm-2 float-start card text-center"><div class="col-auto card-body"><span><div><img class="img1"src="http://localhost/Home_DB/public/assets/images/book-service/forma-1-copy-19.png"alt=""></div></span></div><div class="div1">'+ row['First_name'] + row['Last_name'] + '</div><div class="star-ratings container rate5"><div class="fill-ratings" style="width: 25% !important;"><span id="st5" class="star5">★★★★★</span></div><div class="empty-ratings"><span id="st51" class="star5">★★★★★</span></div></div><span class="hu5">'+ row['ratings'] +'</span>  <br><div class="call1"><span><button class="border gbtn ohk5 selectsp1" id="block" type="submit" name="block" >Block</button></span><span><button type="submit" id="unFav" name="fav" class="btn btn2 btn1 border selectsp1 selectsp22">unFavourite</button></span>';
        // return helo;
      }
      if (row['isblockd'] == 1 && row['isfavourite'] != 1) {
        return '<div ><span class="col-sm-2 float-start card text-center"><div class="col-auto card-body"><span><div><img class="img1"src="http://localhost/Home_DB/public/assets/images/book-service/forma-1-copy-19.png"alt=""></div></span></div><div class="div1">'+ row['First_name'] + row['Last_name'] + '</div><div class="star-ratings container rate5"><div class="fill-ratings" style="width: 25% !important;"><span id="st5" class="star5">★★★★★</span></div><div class="empty-ratings"><span id="st51" class="star5">★★★★★</span></div></div><span class="hu5">'+ row['ratings'] +'</span>  <br><div class="call1"><span><button class="border gbtn ohk5 selectsp1 " id="unblock" type="submit" name="unblock" >unBlock</button></span><span><button type="submit" id="Fav" name="fav" class="btn btn2 btn1 border selectsp1 selectsp22">Favourite</button></span>'
      }
           
        },
           
    },
    ],
    } );

    $('#example2 tbody').on('click', '[id*=block]', function () {
        var data_row = fab.row( $(this).parents('tr') ).data(); // here is the change
        var targetid = data_row.Userid;
        var custid = data_row.UserId;

         $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/Block',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
      targetid: targetid,
      custid: custid,
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


      $('#example2 tbody').on('click', '[id*=unblock]', function () {
        var data_row = fab.row( $(this).parents('tr') ).data(); // here is the change
        var targetid = data_row.Userid;
        var custid = data_row.UserId;

         $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/unBlock',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
      targetid: targetid,
      custid: custid,
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


      $('#example2 tbody').on('click', '[id*=Fav]', function () {
        var data_row = fab.row( $(this).parents('tr') ).data(); // here is the change
        var targetid = data_row.Userid;
        var custid = data_row.UserId;

         $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/favorite',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
      targetid: targetid,
      custid: custid,
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


      $('#example2 tbody').on('click', '[id*=unFav]', function () {
        var data_row = fab.row( $(this).parents('tr') ).data(); // here is the change
        var targetid = data_row.Userid;
        var custid = data_row.UserId;

         $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/unfavorite',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
      targetid: targetid,
      custid: custid,
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



  });



     function edit(event) {
        console.log(event.target.id);
       
        $(".examplehidden").click();
        $.ajax({
            type: "post",
            url: "http://localhost/Home_DB/functions/duplicate",
            data: {
                "id": event.target.id
            },
            dataType: "json",
            // alert(result),
            success: function(result) {
                console.log(result[0].AddressLine1);

                $('#srid').val(result[0].ServiceRequestId);
                $('#Addid2').val(result[0].AddressId);
                $('#date2').val(result[0].ServiceStartDate.split(" ", 1));
                 $('#time2').val(result[0].ServiceStartDate.substr(11, 18));
                 $('#street').val(result[0].AddressLine1);
                 $('#house_number').val(result[0].AddressLine2);
                 $('#Postalcode').val(result[0].PostalCode);
                 $('#city2').val(result[0].City);
               
                }
      
        });
    };


     function refund(event) {
        alert(event.target.id);
       
        $(".example2hidden").click();
        $.ajax({
            type: "post",
            url: "http://localhost/Home_DB/functions/reamount",
            data: {
                "id": event.target.id
            },
            dataType: "json",
            // alert(result),
            success: function(result) {
                alert(result[0].Userid);

                $('#userid').val(result[0].Userid);
                 $('#tc').html(result[0].TotalCost);
                 $('#tc1').html(result[0].TotalCost);
                // $('#Addid2').val(result[0].AddressId);
                // $('#date2').val(result[0].ServiceStartDate.split(" ", 1));
                //  $('#time2').val(result[0].ServiceStartDate.substr(11, 18));
                //  $('#street').val(result[0].AddressLine1);
                //  $('#house_number').val(result[0].AddressLine2);
                //  $('#Postalcode').val(result[0].PostalCode);
                //  $('#city2').val(result[0].City);
               
                }
      
        });
    };


     function cancel(event) {
        alert(event.target.id);
       
        $(".example3hidden").click();
        // $.ajax({
        //     type: "post",
        //     url: "http://localhost/Home_DB/functions/cancelreq",
        //     data: {
        //         "id": event.target.id
        //     },
        //     dataType: "json",
        // //     // alert(result),
        //     success: function(result) {
                alert(event.target.id);

                $('#hinalid').val(event.target.id);
                // $('#Addid2').val(result[0].AddressId);
                // $('#date2').val(result[0].ServiceStartDate.split(" ", 1));
                //  $('#time2').val(result[0].ServiceStartDate.substr(11, 18));
                //  $('#street').val(result[0].AddressLine1);
                //  $('#house_number').val(result[0].AddressLine2);
                //  $('#Postalcode').val(result[0].PostalCode);
                //  $('#city2').val(result[0].City);
               
                // }
      
        // });
    };

 function myFunction(event) {
  // alert("hdjf");
            console.log(event.target.parentNode.children[1])
            var x = $("#"+event.target.parentNode.children[1].children[0].id);
            if (event.target.parentNode.children[1].className.indexOf("w3-show") == -1) {
                event.target.parentNode.children[1].className += " w3-show";
            } else {
                event.target.parentNode.children[1].className = event.target.parentNode.children[1].className.replace(" w3-show", "");
            }
        }


  $(document).ready(function() {



    adminreq = $('#reqests').DataTable( {
        "order": [[ 3, "desc" ]],
         dom: 'Bfrtip',
        buttons: [
            'Export'
        ],
        "processing" : true,
    
    "ajax" : {
     url:"http://localhost/Home_DB/functions/adminpage",
     type:"POST"
    },
    "order" : [],
  "columnDefs": [ {
            "targets": 0,
            "data": "ServiceRequestId",
            // "defaultContent": "<button class=\"btn btn1 border\" id=\" hue \">Reschedule</button>  <button name=\"login\"  id=\"close\" class=\"btn btn2 border\">cancel</button>",


        },
        {
            "targets": 5,
            "data": "Paymentgatewayrefno",
            // "defaultContent": "<button class=\"btn btn1 border\" id=\" hue \">Reschedule</button>  <button name=\"login\"  id=\"close\" class=\"btn btn2 border\">cancel</button>",


        },
        {
      "targets": 1,
            "data": "ServiceStartDate",
            'render': function (data, type, row, meta) {
      return '<img src="http://localhost/Home_DB/public/assets/images/upcomingServices/cal.png" alt="" /> '+data.split(" ", 1)+'<br> <img src="http://localhost/Home_DB/public/assets/images/upcomingServices/time.png" alt="" />  '+data.substr(11, 18)+'';
                        },
    },
    {
                "targets": 2,
                // "data": "First_name"
                "render": function (data, type, row) {
                   var result =  row["First_name"] + "&nbsp" + row["Last_name"] + 
                   "<br><img src=\"http://localhost/Home_DB/public/assets/images/upcomingServices/home.png\" alt=\"\" /> " + row["AddressLine1"] ;
                   console.log(result);
                        return result;
                    },
                    // "targets": 0,
            },

             {
                "targets": 3,
                // "data": null,
                "defaultContent": null,
                "render": function (data, type, row, meta) {
                   var result3 =  "<span><img class=\"img1\" src=\"http://localhost/Home_DB/public/assets/images/serviceHistory/hat.png\" alt=\"\"></span> " + row["srname"] + "&nbsp" + row["srlname"] + 
                   "<div class=\"star-ratings container rate5\"><div class=\"fill-ratings\" style=\"width:"+ row["ratings"] +"% !important;\"><span id=\"st5\" class=\"star5\">★★★★★</span></div><div class=\"empty-ratings\"><span id=\"st51\" class=\"star5\">★★★★★</div></div></span><span>"+ row["ratings"] + "</span>";
                   // console.log(result);
                   if (row["srname"] != null && row["srlname"] != null) {
                    return result3;
                   }
                    },
                    
                    // "targets": 0,
            },
             {
            "targets": 4,
            "data": "Status",
            'render': function (data, type, row, meta) {
      // return ' <button class=\"border gbtn status1\"> '+ data +' </button>';
            if (row['Status'] == 'Cancelled') {
              return ' <button class=\"border gbtn status1\"> '+ data +' </button>'
            }
            if (row['Status'] == 'completed') {
              return ' <button class=\"border btn-success status1\"> '+ data +' </button>'
            }
        },
        },
        {
          "targets": 6,
          // "data": null,.
          "defaultContent": null,
                      'render': function (data, type, row, meta) {
      // return ' <div class="dropdown btn2"><div id="dropdownMenuButton1" class="test" data-bs-toggle="dropdown" aria-expanded="false"></div><ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"><li><a id="modl23" class="dropdown-item" >Edit & Reschedule</a></li><li><a class="dropdown-item" href="#">Refund</a></li><li><a class="dropdown-item" href="#">Cancel</a></li><li><a class="dropdown-item" href="#">Change SP</a></li><li><a class="dropdown-item" href="#">Escalate</a></li><li><a class="dropdown-item" href="#">History Log</a></li><li><a class="dropdown-item" href="#">Download Invoice</a></li></ul></div>';
        // render: function(data, type, row) {
                        return '<div class="w3-dropdown-click"><button value="' + row['ServiceRequestId'] + '" id="btn77" onclick="myFunction(event)"  class="w3-button test"></button><div  class="w3-dropdown-content w3-bar-block w3-border"><a href="#" onclick="edit(event)" id=' + row['ServiceRequestId'] + ' class="w3-bar-item w3-button">Edit &amp; Reschedule </a><a href="#" class="w3-bar-item w3-button" onclick="refund(event)" id=' + row['Userid'] + ' >Refund</a><a href="#" class="w3-bar-item w3-button" onclick="cancel(event)" id=' + row['ServiceRequestId'] + '>Cancel</a><a href="#" class="w3-bar-item w3-button">Change SP</a><a href="#" class="w3-bar-item w3-button">Escalate</a><a href="#" class="w3-bar-item w3-button"> History Log</a><a href="#" class="w3-bar-item w3-button"> Download Invoice</a></div></div>'
                    // }
    }
        }
        ]

        
    } );


 


 $('#SearchButton').on( 'click', function () {
  if ($('#SizingCheck').val() != ' ') {
    adminreq
        .columns( 0 )
        .search( $('#SizingCheck').val() )
        .draw();
  } 
  if ($('#autoSizingSelect').val() != ' ') {
    adminreq
        .columns( 2 )
        .search( $('#autoSizingSelect').val() )
        .draw();
  }

  if ($('#autoSizing').val() != ' ') {
    adminreq
        .columns( 3 )
        .search( $('#autoSizing').val() )
        .draw();
  }
  if ($('#autoSelect').val() != ' ') {
    adminreq
        .columns( 4 )
        .search( $('#autoSelect').val() )
        .draw();
  }

  if ($('#startdate').val() != ' ') {
    adminreq
        .columns( 1 )
        .search( $('#startdate').val() )
        .draw();
  }
    
} );




    

    

    });

  // } );

  


  //           }
  //       })
//   };
   var useradmin = $('#users').DataTable( {
        "order": [[ 3, "desc" ]],
         dom: 'Bfrtip',
        buttons: [
            'excel'
        ],
         "processing" : true,
    
    "ajax" : {
     url:"http://localhost/Home_DB/functions/adminpageuser",
     type:"POST"
    },
    "order" : [],
  "columnDefs": [ {
            "targets": 0,
            // "data": "ServiceRequestId",
             "render": function (data, type, row) {
                   var result =  row["First_name"] + "&nbsp" + row["Last_name"];
                   // console.log(result);
                        return result;
                    },
            // "defaultContent": "<button class=\"btn btn1 border\" id=\" hue \">Reschedule</button>  <button name=\"login\"  id=\"close\" class=\"btn btn2 border\">cancel</button>",


        },
        {
            "targets": 1,
            // "data": null,
            "defaultContent": null,
        },
        {
      "targets": 2,
            // "data": null,
            "defaultContent": null,
      //       'render': function (data, type, row, meta) {
      // return '<img src="http://localhost/Home_DB/public/assets/images/upcomingServices/cal.png" alt="" /> '+data.split(" ", 1);
      //                   },
    },
    {
      "targets": 3,
            "data": null,
            'render': function (data, type, row, meta) {
              if (row["typeId"] == 0) {
                return "Customer";
              }
              if (row['typeId'] == 1) {
                return "Serviceprovider";
              }
                        },
    },

         {
            "targets": 4,
            "data": "PostalCode",
        },

         {
            "targets": 5,
            "data": "Mobile",
        },

         {
            "targets": 6,
            // "data": "status",
            "render": function(data, type, row, meta){
              if (row["status"] == "Active") {
                return '<button name="activein" id="active" type="submit" class="btn border btn3">Inactive</button>'
              }

              if (row["status"] == "inactive") {
                return '<button name="activein" id="active" type="submit" class="btn border btn3">Active</button>'
              }

              // return '<button name="activein" id="active" type="submit" class="btn border btn3">'+ row["status"] + '</button>'
            }
        },
        ]
    } );



     $('#users tbody').on('click', '[id*=active]', function () {
        var data_row = useradmin.row( $(this).parents('tr') ).data(); // here is the change
    

        // alert("ofdk");
        var changeuser = data_row.Userid; 
        var changes = data_row.status; 
        // var stime = data_row.ServiceStartDate.substr(11, 18); 

        $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/changestatus',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
      changeuser: changeuser,
      changes: changes,
     
    },
    dataType: 'json',
    // alert("hello");
    cache: false,
    success: function(data){
      console.log(data.Message);
      if(data.status == "Success"){
                    // alert('success');
                    console.log('suc');
                    // $('a[href="#menu2"]').tab("show");
                    // $('#value5').val(data.var5);
                    //  var o = $('#value5').val();
                    //   var r = o +'pt';
                    //    $('.fill-ratings').width(r);
                    // localStorage.setItem("data", JSON.stringify(data));
                    
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




    
// } );
  

// } );



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


$('#ratesp11').on('submit', function(){
  alert('helo');
  // alert('helo');
  // var ohk1 = [];
  // $('#helook').each(function(){
    
  //     ohk1.push($(this).val());
    
  // });
  // ohk1 = ohk1.toString();
  // ohk2 = "<?php echo '$values->ServiceRequestId';?>";
  // console.log(ohk2);
  // alert(ohk2);
  // console.log(ohk1);
   var serviceid1 = $('#serviceid1').val();
   var ratingto = $('#ratingtosp').val();
   var helook = $('#helook').val();
   var ratingfrom = $('#ratingfrom').val();
   var comment = $('#comment').val();
   // var cmt = $('#cmt').val();
    var ontime = [];
                $('.st').each(function() {
                    if ($(this).is(":checked")) {
                        ontime.push($(this).val());
                    }
                });
                ontime = ontime.toString();
   var friendly = [];
                $('.star').each(function() {
                    if ($(this).is(":checked")) {
                        friendly.push($(this).val());
                    }
                });
                friendly = friendly.toString();
    var quality = [];
                $('.star1').each(function() {
                    if ($(this).is(":checked")) {
                        quality.push($(this).val());
                    }
                });
                quality = quality.toString();
                alert(helook);

  $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/Rate',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
      serviceid1: serviceid1,
      helook: helook,
      ratingfrom: ratingfrom,
      comment: comment,
      ontime: ontime,
      friendly: friendly,
      quality: quality,

    },
    dataType: 'json',
    // alert("hello");
    cache: false,
    success: function(data){
      console.log(data.Message);
      if(data.status == "Success"){
                    // alert('success');
                    console.log('suc');
                    // $('a[href="#menu2"]').tab("show");
                    $('#value5').val(data.var5);
                     var o = $('#value5').val();
                      var r = o +'pt';
                       $('.fill-ratings').width(r);
                    localStorage.setItem("data", JSON.stringify(data));
                    
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





$("#Add-form2").on("submit", function(){
   //Code: Action (like ajax...)
   var srid = $('#srid').val();
   var Addid = $('#Addid2').val();
   var date = $('#date2').val();
   // var extras = $('.cb-services').val();
   var time = $('#time2').val();
   var street = $('#street').val();
   var house_number = $('#house_number').val();
   var Postalcode = $('#Postalcode').val();
   var city2 = $('#city2').val();
    
  // alert(extras);
  // alert(insert);


  $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/editall',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
      srid: srid,
      Addid: Addid,
      date: date,
      time: time,
      street: street,
      house_number: house_number,
      Postalcode: Postalcode,
      city2: city2

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
        console.log("Status: " + textStatus); console.log("Error: " + errorThrown); 
    }   
   
   
 });

  return false;

});




$("#refundform").on("submit", function(){
   //Code: Action (like ajax...)
   var userid = $('#userid').val();
   // var Addid = $('#Addid2').val();
   // var date = $('#date2').val();
   // // var extras = $('.cb-services').val();
   // var time = $('#time2').val();
   // var street = $('#street').val();
   // var house_number = $('#house_number').val();
   // var Postalcode = $('#Postalcode').val();
   // var city2 = $('#city2').val();
    
  // alert(extras);
  // alert(insert);


  $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/refundamount',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
      userid: userid
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
        console.log("Status: " + textStatus); console.log("Error: " + errorThrown); 
    }   
   
   
 });

  return false;

});



$("#cancelsrid").on("submit", function(){
   //Code: Action (like ajax...)
   var srid = $('#hinalid').val();
   // var Addid = $('#Addid2').val();
   // var date = $('#date2').val();
   // // var extras = $('.cb-services').val();
   // var time = $('#time2').val();
   // var street = $('#street').val();
   // var house_number = $('#house_number').val();
   // var Postalcode = $('#Postalcode').val();
   // var city2 = $('#city2').val();
    
  // alert(extras);
  // alert(insert);


  $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/chancelsr',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
      srid: srid
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
        console.log("Status: " + textStatus); console.log("Error: " + errorThrown); 
    }   
   
   
 });

  return false;

});









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
   
   var card = $('#card-number').val();
   var radio_val = $('#r_Val').val();
  


  $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/book',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
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


$("#reschedule1").on("submit", function(){
   //Code: Action (like ajax...)
   // alert("helo");
   var cancelid1 = $('#cancelid1').val();
   var proid1 = $('#proid1').val();
   var date1 = $('#date1').val();
   var time1 = $('#time1').val();
    
  // alert(proid1);
  // alert(insert);


  $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/reschedule',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
     cancelid1: cancelid1,
     proid1: proid1,
     date1: date1,
     time1: time1

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
        console.log("Status: " + textStatus); console.log("Error: " + errorThrown); 
    }   
   
   
 });

  return false;

});


$("#Cancel").on("submit", function(){
   //Code: Action (like ajax...)
   // alert("helo");
   var cancelid = $('#cancelid').val();
    var cancelproid = $('#cancelproid').val();
    var commentsp = $('#commentsp').val();
    
  // alert(proid1);
  // alert(insert);


  $.ajax({
    type: 'post',
    url: 'http://localhost/Home_DB/functions/Cancel1',
    // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: {
      check: true,
     cancelid: cancelid,
     cancelproid: cancelproid,
     commentsp: commentsp,
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
        console.log("Status: " + textStatus); console.log("Error: " + errorThrown); 
    }   
   
   
 });

  return false;

});

