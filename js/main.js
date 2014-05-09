window.onload = function(){
    var menu = document.querySelectorAll(".menu")[1];
        
    menu.addEventListener("click", function(e){
        e.preventDefault();
        var sib  = e.target.nextElementSibling;
        
        if(sib){
            sib.classList.toggle("expanded");
        }
    });

}
