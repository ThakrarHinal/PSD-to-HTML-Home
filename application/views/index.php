<?php
//index.php




?>
<!DOCTYPE html>
<html>
 <head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <script>
   

  $(document).ready(function() {
    // $('.fc-today-button').click();
   var calendar = $('#calendar').fullCalendar({
    editable:true,
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay'
    },
    events: 'http://localhost/Home_DB/functions/load',
    selectable:true,
    selectHelper:true,
    
   });
  });
   
  </script>
 </head>
 <body>
  
  <div class="container">
   <div id="calendar"></div>
  </div>
 </body>
</html>


