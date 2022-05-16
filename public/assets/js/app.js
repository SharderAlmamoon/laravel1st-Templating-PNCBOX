//  Zubair added js code for hero section
$(function () {
    "use strict";
    //you can put magicStartLoop class in any element you want to start with it

    //change magicStartLoop class every num of seconds
    setInterval(function () {
        //loop on every magicStartLoop in the page
        $(".magicStartLoop").each(function () {
            //after num of seconds make the first movement
            $(this).addClass("hidden").removeClass("magicStartLoop");
            //first movement
            $(this).next().addClass("magicStartLoop").removeClass("hidden");
            //check if the last element has magicStartLoop class to repeat the loop again
            if ($(".sliderContainer").children().last().hasClass("magicStartLoop")) {
                setTimeout(function () {
                    $(".sliderContainer").children().first().removeClass("hidden").addClass("magicStartLoop");
                }, 2000);//you must set this time as the same time for setInterval time
            }
        });
    }, 2000);//you can change the time for silder from 2000 to any value you want
    
    
});

//  Awesome apps features Start

var countup=0;
var countdown=0;
var flag=0;
var flag1=0;

jQuery(document).ready(function(){
    // $('.carousel').carousel();})
    jQuery("#up").click(function(){
        if(flag1==1){
            flag1=2;
            flag=0;
            if(countup==0){
                jQuery("#first").hide();
                jQuery("#second").show();
                jQuery("#third").hide();
                countup=2;
                countdown=countup;
                console.log(countup,countdown);
               }
               else if(countup==1){
                jQuery("#first").show();
                jQuery("#second").hide();
                jQuery("#third").hide(); 
                countup-=1;
                countdown=countup;
                console.log(countup,countdown);
               }
               else{
                jQuery("#first").hide();
                jQuery("#second").show();
                jQuery("#third").hide();
                countup=countup-1;
                countdown=countup;
                console.log(countup,countdown);
               }  
        }
  else{
    if(flag==0){
        flag1=2;
        if(countup==0){
         jQuery("#first").hide();
         jQuery("#second").hide();
         jQuery("#third").show();
         countup+=1;
         countdown=countup;
         console.log(countup,countdown);
        }
        else if(countup==1){
         jQuery("#first").hide();
         jQuery("#second").show();
         jQuery("#third").hide(); 
         countup+=1;
         countdown=countup;
         console.log(countup,countdown);
        }
        else{
         jQuery("#first").show();
         jQuery("#second").hide();
         jQuery("#third").hide();
         countup=0;
         countdown=countup;
         console.log(countup,countdown);
        }
      }
    }

    })
    jQuery("#down").click(function(){
    if(flag1==2){
        flag1=1;
        flag=0;
        if(countdown==0){
         jQuery("#first").hide();
         jQuery("#second").show();
         jQuery("#third").hide();
         countdown+=1;
         countup=countdown;
         console.log(countup,countdown);
        }
        else if(countdown==1){
         jQuery("#first").show();
         jQuery("#second").hide();
         jQuery("#third").hide();
         countdown-=1;
         countup=countdown;
         console.log(countup,countdown);
        }
        else{
         jQuery("#first").hide();
         jQuery("#second").hide();
         jQuery("#third").show();
         countdown=0;
         countup=countdown;
         console.log(countup,countdown);

        }
    }
    else {
        if(flag==0){
            flag1=1;
            if(countdown==0){
             jQuery("#first").hide();
             jQuery("#second").show();
             jQuery("#third").hide();
             countdown+=1;
             countup=countdown;
             console.log(countup,countdown);
            }
            else if(countdown==1){
             jQuery("#first").hide();
             jQuery("#second").hide();
             jQuery("#third").show(); 
             countdown+=1;
             countup=countdown;
             console.log(countup,countdown);
            }
            else{
             jQuery("#first").show();
             jQuery("#second").hide();
             jQuery("#third").hide();
             countdown=0;
             countup=countdown;
             console.log(countup,countdown);
    
            }
      
        }
    }
     })
     
})


// Awesome apps features End 

// Oytizo added js code

$num = $('.my-card').length;
		$even = $num / 2;
		$odd = ($num + 1) / 2;
		
		if ($num % 2 == 0) {
		  $('.my-card:nth-child(' + $even + ')').addClass('active');
		  $('.my-card:nth-child(' + $even + ')').prev().addClass('prev');
		  $('.my-card:nth-child(' + $even + ')').next().addClass('next');
		} else {
		  $('.my-card:nth-child(' + $odd + ')').addClass('active');
		  $('.my-card:nth-child(' + $odd + ')').prev().addClass('prev');
		  $('.my-card:nth-child(' + $odd + ')').next().addClass('next');
		}
		
		$('.my-card').click(function() {
		  $slide = $('.active').width();
		  console.log($('.active').position().left);
		  
		  if ($(this).hasClass('next')) {
			$('.card-carousel').stop(false, true).animate({left: '-=' + $slide});
		  } else if ($(this).hasClass('prev')) {
			$('.card-carousel').stop(false, true).animate({left: '+=' + $slide});
		  }
		  
		  $(this).removeClass('prev next');
		  $(this).siblings().removeClass('prev active next');
		  
		  $(this).addClass('active');
		  $(this).prev().addClass('prev');
		  $(this).next().addClass('next');
		});
		
		
		// Keyboard nav
		$('html body').keydown(function(e) {
		  if (e.keyCode == 37) { // left
			$('.active').prev().trigger('click');
		  }
		  else if (e.keyCode == 39) { // right
			$('.active').next().trigger('click');
		  }
		});
		
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-36251023-1']);
		  _gaq.push(['_setDomainName', 'jqueryscript.net']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		