/**
 * Created by neerajsingh on 05/08/16.
 */


//Header Change color On scroll//

$(window).scroll(function(event){

    var yOffset = window.pageYOffset;
    var breakpoint = 550;
    if (yOffset > breakpoint){
        $(".custom-nav").addClass('active ');
    }else{
        $(".custom-nav").removeClass('active ');
    }

});


//Ends here//
