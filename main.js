$(document).ready(function(){
    
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });
    $("#bars").click(function(){
        $(".navbar-brand").toggleClass("show");
        console.log("wpw");
    })
    let top=document.querySelector(".scroll-up-btn");
 
    // slide-up script
    top.addEventListener("click",function(){
        document.documentElement.scrollTop = 0;
       
    });
    const counters = document.querySelectorAll('.counter');
    const speed = 3000; // The lower the slower
    window.onscroll=function(){
         // scroll-up button show/hide script
         if(this.scrollY > 500){
            top.classList.add("show");
         }else{
             top.classList.remove("show");
         }
        if(this.scrollY > 1300){
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
            
                    // Lower inc to slow and higher to slow
                    const inc = target / speed;
            
                    // console.log(inc);
                    // console.log(count);
            
                    // Check if target is reached
                    if (count < target) {
                        // Add inc to count and output in counter
                        counter.innerText = Math.ceil(count + inc);
                        // Call function every ms
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target;
                    }
                };
            
                updateCount();
            });
            
        }
    };

});
  //Transfer Money
  const ben=document.querySelector(".beneficiary");
  function benShow(){
  ben.classList.remove("hide");
}
function tp(){
    alert ("Login Page Coming Soon!");
}