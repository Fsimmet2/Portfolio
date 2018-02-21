$(document).ready(function(){

  $(document).scroll(function(){
    var pos = $("nav").position();
    var head = document.querySelector("#header");
    var posh = head.getBoundingClientRect();

    if(posh.top <= -(pos.top)){
      $("#bg").css('background-image', "url('../../img/portfolio/fleche1.jpg')");
    }
    else{
      $("#bg").css('background-image', '');
    }

  })

})
