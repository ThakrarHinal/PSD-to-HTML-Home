

$(document).ready(function(){
    $(".dp-1").click(function(){
        $(".dp-1 .dp1").slideDown();
        $(".dp-1 .dp1 i").removeClass("fa fa-angle-down").addClass("fa fa-angle-right");
    })
})

$(document).ready(function(){
    $(".dp-1").click(function(){
            $(".dp-1 .dp1").slideUp();
        $(".dp-1 .dp1 i").removeClass("fa fa-angle-right").addClass("fa fa-angle-down");
      
    })
})

$(document).ready(function(){
    $(".dp-3").click(function(){
        $(".dp-3 .dp3").slideDown();
        $(".dp-3 .dp3 i").removeClass("fa fa-angle-down").addClass("fa fa-angle-right");
    })
})

$(document).ready(function(){
    $(".dp-3").click(function(){
            $(".dp-3 .dp3").slideUp();
        $(".dp-3 .dp3 i").removeClass("fa fa-angle-right").addClass("fa fa-angle-down");
      
    })
})

$(document).ready(function(){
    $(".dp-2").click(function(){
        $(".dp-2 .dp2").slideDown();
        $(".dp-2 .dp2 i").removeClass("fa fa-angle-down").addClass("fa fa-angle-right");
    })
})

$(document).ready(function(){
    $(".dp-2").click(function(){
            $(".dp-2 .dp2").slideUp();
        $(".dp-2 .dp2 i").removeClass("fa fa-angle-right").addClass("fa fa-angle-down");
      
    })
})




function responsive_menu(){
    var e = document.getElementById('menu_small');
    if(e.className === 'list1'){
        e.className += 'responsive';
    }
    else{
        e.className = 'list1';
    }
}