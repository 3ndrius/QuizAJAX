document.addEventListener("DOMContentLoaded", function() {
            
          var przycisk = document.querySelector(".menu-btn");
            przycisk.addEventListener('click', function(event) {
                this.classList.toggle("change")
                console.log("dziala");
               var doc =document.querySelector(".menu");
                
               if(doc.style.display === 'block') {
                   
                    doc.style.display = 'none';
               }
                else{
                    doc.style.display = 'block';
                    doc.style.animation ='show 0.6s linear';
                }
                console.log(doc);
    
                
        });
            
  
    });
 
     