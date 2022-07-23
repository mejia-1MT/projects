var buttons = document.querySelectorAll('.administrator .navs button');
var panels = document.querySelectorAll('.content')

function show(index, color){
    buttons.forEach(function(node){
        node.style.backgroundColor='';
        node.style.color='';
    });
    buttons[index].style.backgroundColor=color;
    buttons[index].style.color='white';
    panels.forEach(function(node){
        node.style.display='none';
    });
    panels[index].style.display='block';
    panels[index].style.backgroundColor=color;
}