
 $(document).ready(function(){
    fnLoader(1);
	$(".gotop").on("click", function(){
		$("html,body").animate({scrollTop:0});
	});
	$(".humBur").on("click", function(){
		if($(this).next("ul").css("display") == "none"){
			$(this).next("ul").slideDown();
            //$(".bg-overlay").show();
		} else {
			$(this).next("ul").slideUp();
           // $(".bg-overlay").hide();
		}
	});
    $(".view-filter").on("click", function(){
        $(".m-filter").addClass("_active");
        $(this).removeClass("_active");
    });
    $(".m-filter .cancel").on("click", function(){
        $(".m-filter").removeClass("_active");
        $(".view-filter").addClass("_active");
    });
    $(".view-enquiry").on("click", function(){
        $(".fixed-div").addClass("_active");
        $(this).removeClass("_active");
    });
    $(".fixed-div .cancel").on("click", function(){
        $(".fixed-div").removeClass("_active");
        $(".view-enquiry").addClass("_active");
    });


	$(".navList li").click(function() {
	   var elmPosition = $(this).offset().left;
	    var elmwidth = $(this).outerWidth();
	        $(".navList li").removeClass("active");
	    $(this).addClass("active");
	    $(".navBorder").css({ width : elmwidth, left: elmPosition});
	  });
    $(document).on("scroll", fnFilterOnscroll);
});
 $(document).keyup(function(e) {
     if (e.keyCode == 27) { // escape key maps to keycode `27`
     	if($(".modal").hasClass('in')){
        	$('.modal').removeClass('in visible');
    	}
    }
});

 function fnFilterOnscroll() {
    if ($(window).scrollTop() > 10) {
        if(!$(".m-filter").hasClass("_active") || !$(".fixed-div").hasClass("_active")){
            $(".view-filter, .view-enquiry").addClass("_active");
        }
    } else {
        $(".view-filter, .view-enquiry").removeClass("_active");
    }
 }

function fnCheckFav(){
 	var favProperty = fnGetFav('myFav');
 	$("[data-fav='"+ favProperty +"'], .plugins").find(".__like").children('.yet-add').removeClass("_active");
 	$("[data-fav='"+ favProperty +"'], .plugins").find(".__like").children('.added').addClass("_active");
}

function fnSetFav(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
    fnCheckFav(value);
}

function fnGetFav(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function fnDelFav(name) {
    setCookie(name,"",-1);
}

function showPassword() {
    
    var key_attr = $('#key').attr('type');
    
    if(key_attr != 'text') {
        
        $('.checkbox').addClass('show');
        $('#key').attr('type', 'text');
        
    } else {
        
        $('.checkbox').removeClass('show');
        $('#key').attr('type', 'password');
        
    }
}

function fnLoader(action){
    if(action == true) {
        $(".full-cover").fadeIn();
    } else {
        $(".full-cover").fadeOut();
    }
}
$(window).load(function() {
    fnLoader(0);
    $(".main-body-wrapper").show();
});