function responsive_menu(){
    var e = document.getElementById('menu_small');
    if(e.className === 'list1'){
        e.className += 'responsive';
    }
    else{
        e.className = 'list1';
    }
}