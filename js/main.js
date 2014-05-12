window.onload = function(){
    var menu = document.querySelector("#navCol"),
        burger = document.querySelectorAll("#burger")[0],
        cont =  document.querySelector('#contentWrap');
    
        
    menu.addEventListener("click", function(e){
        var sib  = e.target.nextElementSibling;
        
        if(sib){
            sib.classList.toggle("expanded");
        }
    });

    burger.addEventListener("click", function(e){
        e.preventDefault();
        menu.classList.toggle("full");
        cont.classList.toggle("shifted");
    
    });

}
