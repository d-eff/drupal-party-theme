window.onload = function(){
    var menu = document.querySelectorAll("nav")[0],
        burger = document.querySelectorAll("#burger")[0];
    
        
    menu.addEventListener("click", function(e){
        e.preventDefault();
        var sib  = e.target.nextElementSibling;
        
        if(sib){
            sib.classList.toggle("expanded");
        }
    });

    burger.addEventListener("click", function(e){
        e.preventDefault();
        console.log("woo");
        menu.classList.toggle("full");
    
    });

}
