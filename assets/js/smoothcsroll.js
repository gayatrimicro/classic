
        jQuery("#BckTop").click(function(){
            window.scrollTo({top: 0, behavior: 'smooth'});
        });

        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            var mybutton=document.getElementById("BckTop");
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}