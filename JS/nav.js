const menu = document.querySelector(".menu-movil i"),
      nav = document.querySelector("nav");

menu.addEventListener('click', function(){
    /*if(nav.className==='oculto'){
        nav.classList.remove('oculto');
    }else{
        nav.classList.add('oculto');
    }*/
    nav.classList.toggle('oculto');
});