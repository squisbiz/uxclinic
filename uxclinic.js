$(document).ready(function(){
    
    $('.mobilenav-toggle').on('click', function(e) {
      $('#body').toggleClass("displaymobilemenu"); //you can list several class names 
      e.preventDefault();
    });
    
    function evaluate(){
    var item = $(this);
    var relatedItem = $("#" + item.attr("data-related-item")).parent();
   
    if(item.is(":checked")){
        relatedItem.fadeIn();
    }else{
        relatedItem.fadeOut();   
    }
}

$('input[type="checkbox"]').click(evaluate).each(evaluate);


})
