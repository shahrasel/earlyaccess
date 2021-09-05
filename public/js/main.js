(function ($) {
"use strict";

$( function() {
  $( "#speed" ).selectmenu();

  $( "#files" ).selectmenu();

  $( "#number" )
    .selectmenu()
    .selectmenu( "menuWidget" )
      .addClass( "overflow" );

  $( "#salutation" ).selectmenu();
  $( "#beDetilsShort" ).selectmenu();
  $( "#communityOne" ).selectmenu();
  $( "#communityOnedd" ).selectmenu();
  $( "#communityTwo" ).selectmenu();
  $( "#footageOne" ).selectmenu();
  $( "#footageTwo" ).selectmenu();
  $( "#schoolD" ).selectmenu();
  $( "#scDtwo" ).selectmenu();
  $( "#scDthree" ).selectmenu();
  $( "#properType" ).selectmenu();
  $( "#sFttOne" ).selectmenu();
  $( "#sFttTwo" ).selectmenu();
  $( "#lSizeOne" ).selectmenu();
  $( "#lSizeTwo" ).selectmenu();
  $( "#antOne" ).selectmenu();
  $( "#anTwo" ).selectmenu();  
  $( "#lotSizeOne" ).selectmenu(); 
  $( "#lotSizeTwo" ).selectmenu(); 
  $( "#realtor" ).selectmenu(); 

  
  
  $( "#hmloan" ).selectmenu();
  $( "#tomove" ).selectmenu();
  $( "#realtor1" ).selectmenu(); 
  $( "#hmloan1" ).selectmenu();
  $( "#tomove1" ).selectmenu();

  $("#realtor2" ).selectmenu();  
  $( "#hmloan2" ).selectmenu();
  $( "#tomove2" ).selectmenu();
 
  
  

  
  
  

  
} );




$('body').on('click', '.header', function() {
  $('.level-box').slideUp();
  $(this).toggleClass('header-active');
  var current = $(this).closest('.box-a1').find('.level-box');
  if (current.is(':visible')) {
    current.slideUp();
  } else {
    current.slideDown();
  }
});



// details page slider 
$('.slider-for').slick({
  autoplay:true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  asNavFor: '.slider-nav',
  dots: false
});
$('.slider-nav').slick({
  slidesToShow: 6,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  arrows: false,
  centerMode: true,
  focusOnSelect: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 4,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
	

// area highlighted 
$('.single-item-area').slick({

  autoplay:true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]

});

// Floor Plan

$('.single-item-plan').slick({

  autoplay:true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]

});


$( window ).load(function() {
  $('#bentory-more-modal').addClass('bentory-maplist-modal-community');
  $('#be-filter-controller').addClass('bentory-maplist-modal-community');
});

$(".hamburger").click(function(){
  $(this).toggleClass('active');
 });

 $(".width-modifie3").click(function(){
  $(this).addClass('active-wide-modifier');
 });

 $(".be-list-page-search-input").click(function(){
  $(this).addClass('be-list-page-search-input-active-width');
 });

//  $("#be-arrow-inverter").click(function(){
//   $(this).addClass('be-arrow-inverter');
//  });

 
 
 



// map view
$('.bentory-map-view').hide();


$('.bentory-mapview-child').on('click', function(event) {
  $(this).parent('.bentory-list-view').hide();
  $('.bentory-map-view').show();
  $('.benmap-list-mobile').hide();
  $('.benmap-map-mobile').show();
  $(window).scrollTop(0);


  
     
event.preventDefault();
});

// list view
$('.bentory-listview-child').on('click', function(event) {
  $(this).parent('.bentory-map-view').hide(); 

  
  $('.bentory-list-view').show();
  $('.benmap-map-mobile').hide();
  $('.benmap-list-mobile').show();
  $(window).scrollTop(0);
  
event.preventDefault();
});



$('.bentory-mapview-child').on('click', function(event) {
  $(this).parent('.bentory-list-view').hide(); 
event.preventDefault();
});



$('.bentory-banner-menu li').on('click', function(event) {

  $('.bentory-banner-menu li').removeClass('selected--bannerMenu');
  var index =  $(this).index();

  $('.bentory-banner-menu li').eq(index).addClass('selected--bannerMenu');

event.preventDefault();

});




// Homes & Plans
$('.be-home-plan--box').hide();
$('.be-home-plan--box').eq(0).show();

$('.be-home-plan--tabs > li').on('click', function(event) {
  
  $('.be-home-plan--box').hide();
  var index3 = $(this).index();
  
  //alert(index3);

  $('.be-home-plan--box').eq(index3).show();
  
  event.preventDefault();
  
  });


  $('.be-home-plan--tabs > li > a').on('click', function(event) {
    $('.be-home-plan--tabs > li > a').removeClass("be-home-plan-tabs--active");

    if ( $(this).hasClass("be-home-plan-tabs--active") ) {
      $(this).removeClass("be-home-plan-tabs--active");
    }else{
      $(this).addClass("be-home-plan-tabs--active");
    } 
  
      //$(this).toggleClass('be-home-plan-tabs--active');
    
    event.preventDefault();
    
    });




$('.bentory-custom-select--box').on('click', function(event) {

  $(this).toggleClass('bentory-custom-select--box-rotate');
  
  
  //alert('jkajsdkljf');
event.preventDefault();
});




$('body').on('click', '.be-filter-controller-community', function(event) {
  $('.bentory-maplsit-modalPanel').fadeIn();  
event.preventDefault();
});



$('.betory-btn-cross--popup').on('click', function(event) {
$('.bentory-maplsit-modalPanel2').removeClass('bentory-maplsit-modalPanel-active2');
$('#be-arrow-inverter').removeClass('be-arrow-inverter');  


event.preventDefault();
});






/*$('.bentory-header-searchBtn, .bentory-user-sign-mobile, .built_my_acc').on('click', function(event) {
    $('.bentory-user-singing-panel').fadeIn("slow");    
	event.preventDefault();
});*/

$('.bentory-user-sign-mobile-footer').on('click', function(event) {
  $('.bentory-user-singing-panel').fadeIn("slow");
  $(window).scrollTop(0);    
  event.preventDefault();
});



$('.betory-btn-cross--popup').on('click', function(event) {
  $('.bentory-maplsit-modalPanel').fadeOut("slow");  

event.preventDefault();
});








//for cross button
$('.bentory-btn-sign-cross').on('click', function(event) {
    $('.bentory-user-singing-panel').fadeOut("slow");    
	event.preventDefault();
});

$('#bentory-signin').on('click', function(event) {
  //$('.bentory-user-singing-panel').fadeOut();
  $('.be-signing').fadeIn("slow");  
  $('.be-signUp').fadeOut("slow"); 
  $('#bentory-signin').addClass('bentory-tab-selected');
  $('#bentory-signout').removeClass('bentory-tab-selected');
event.preventDefault();
});

$('#bentory-signout').on('click', function(event) {
  $('.be-signing').fadeOut("slow");
  $('.be-signUp').fadeIn("slow");
  $('#bentory-signout').addClass('bentory-tab-selected');
  $('#bentory-signin').removeClass('bentory-tab-selected');

  
  //alert('hello data');    
event.preventDefault();
});


// mobile menu 

$('#mobule_hamburger_btn').on('click', function(event) {
  

    if ( $(".bentory-main-menu--mobile").hasClass("bentory-mob-active") ) {
      $(".bentory-main-menu--mobile").removeClass("bentory-mob-active");
    }else{
      $(".bentory-main-menu--mobile").addClass("bentory-mob-active");
    } 
event.preventDefault();
});






// Start mobile cross and hamburger toggle 

$('#mobule_hamburger_btn').on('click', function(event) {
  
$(this).toggleClass('mobule_hamburger_btn_alter');
  // if ( $(".be-mobile-menu-holder").hasClass("holder-mob-active") ) {
  //   $(".be-mobile-menu-holder").removeClass("holder-mob-active");
  // }else{
  //   $(".be-mobile-menu-holder").addClass("holder-mob-active");
  // } 
event.preventDefault();
});

// End mobile cross and hamburger toggle 

$('#mobule_hamburger_btn').on('click', function(event) {
  

  if ( $(".be-mobile-menu-holder").hasClass("holder-mob-active") ) {
    $(".be-mobile-menu-holder").removeClass("holder-mob-active");
  }else{
    $(".be-mobile-menu-holder").addClass("holder-mob-active");
  } 
event.preventDefault();
});


$('.bentory-mobile-cross').on('click', function(event) {
    $(".bentory-main-menu--mobile").removeClass("bentory-mob-active");
    $(".be-mobile-menu-holder").removeClass("holder-mob-active");
    //$("this").parent(.bentory-mobile-cross).fadeOut();
  
event.preventDefault();
});

// home slider

$('.home-slider-active').slick({
  dots: false,
  prevArrow: false,
  nextArrow: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});



//  @loader Animation
jQuery(window).load(function() {
    jQuery("#loading").fadeOut(500);
    });


// scrollToTop
$.scrollUp({
	scrollName: 'scrollUp', // Element ID
	topDistance: '300', // Distance from top before showing element (px)
	topSpeed: 300, // Speed back to top (ms)
	animation: 'fade', // Fade, slide, none
	animationInSpeed: 200, // Animation in speed (ms)
	animationOutSpeed: 200, // Animation out speed (ms)
	scrollText: '<i class="fas fa-angle-up"></i>', // Text for element
	activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
});

//select box controller 
jQuery('.listController').change(function() {
  var options = '';
  if(jQuery(this).val() == 'newhome') {
      options = '<option value="1">Any Price</option>';     
  }
  else if ($(this).val() == 'b'){
      options = '<option value="2">2</option>';
  }

  jQuery('.maplist_att_01').html(options);

});

// jQuery(document).ready(function(){
//   jQuery('.multi_select').selectpicker();
//   });
$(".default_option").click(function(){
  $(this).parent().toggleClass("active");
})

$(".maplist_first_att_main li").click(function(){
  var currentele = $(this).html();
  $(".maplist_first_att_option_main li").html(currentele);
  $(this).parents(".select_wrap").removeClass("active");
});

$(".maplist_first_att li").click(function(){
  var currentele = $(this).html();
  $(".maplist_first_att_option li").html(currentele);
  $(this).parents(".select_wrap").removeClass("active");
});

$(".maplist_first_att_01 li").click(function(){
  var currentele = $(this).html();
  $(".maplist_first_att_option_01 li").html(currentele);
  $(this).parents(".select_wrap").removeClass("active");
});

$(".maplist_first_att_02 li").click(function(){
  var currentele = $(this).html();
  $(".maplist_first_att_option_02 li").html(currentele);
  $(this).parents(".select_wrap").removeClass("active");
});

$(".maplist_first_att_03 li").click(function(){
  var currentele = $(this).html();
  $(".maplist_first_att_option_03 li").html(currentele);
  $(this).parents(".select_wrap").removeClass("active");
});

$(".maplist_first_att_option_04 li").click(function(){

  var currentele = $(this).html();
  $(".maplist_first_att_04  li").html(currentele);
  $(this).parents(".select_wrap").removeClass("active");

});


// for rent   

$(".maplist_first_att_option_05   li").click(function(){

  var currentele = $(this).html();
  $(".maplist_first_att_05 li").html(currentele);
  $(this).parents(".select_wrap").removeClass("active");

});

$(".maplist_first_att_option_06   li").click(function(){

  var currentele = $(this).html();
  $(".maplist_first_att_06 li").html(currentele);
  $(this).parents(".select_wrap").removeClass("active");

});

$(".maplist_first_att_option_07   li").click(function(){

  var currentele = $(this).html();
  $(".maplist_first_att_07 li").html(currentele);
  $(this).parents(".select_wrap").removeClass("active");

});

// for new home 

$(".maplist_first_att_option_08   li").click(function(){
  var currentele = $(this).html();
  $(".maplist_first_att_08 li").html(currentele);
  $(this).parents(".select_wrap").removeClass("active");

});

$(".maplist_first_att_option_09   li").click(function(){
  var currentele = $(this).html();
  $(".maplist_first_att_09 li").html(currentele);
  $(this).parents(".select_wrap").removeClass("active");

});


$(".maplist_first_att_option_10   li").click(function(){
  var currentele = $(this).html();
  $(".maplist_first_att_10 li").html(currentele);
  $(this).parents(".select_wrap").removeClass("active");

});







$(".lots-size").hide();

$(".lots").click(function(){
  
  // alert('community');
  $(".maplist-beds").hide();
  $(".maplist-baths").hide();
  $(".lots-size").show();
  
  });

  $(".for-rent").click(function(){
    $("#bentory-more-modal").removeClass();
    $("#be-filter-controller").removeClass();
    $(".select_wrap.any-price").removeClass('active');
     
    $("#bentory-more-modal").addClass('bentory-maplist-modal-for-rent');
    $("#be-filter-controller").addClass('bentory-maplist-modal-for-rent');

    $(".maplist-beds").show();
    $(".maplist-baths").show();
    $(".lots-size").hide();  
    });

    $('body').on('click', '.bentory-maplist-modal-for-rent',  function(event) {
      $('.bentory-maplsit-modalPanel-for--rent').fadeIn();    
    event.preventDefault();
    });

    $(".betory-btn-cross--popup").click(function(){
      $('.bentory-maplsit-modalPanel-for--rent').fadeOut(); 
    });


      $(".new-homes").click(function(){
      $("#bentory-more-modal").removeClass();
      $("#be-filter-controller").removeClass();
      $(".select_wrap.any-price").removeClass('active');
      $(".maplist-beds").show();
      $(".maplist-baths").show();
      $(".lots-size").hide();  
  

      $("#bentory-more-modal").addClass('bentory-maplist-modal-new-homes'); 
      $("#be-filter-controller").addClass('bentory-maplist-modal-new-homes'); 
      
      
      });

      $('body').on('click', '.bentory-maplist-modal-new-homes',  function(event) {
        $('.bentory-maplsit-modalPanel-new-home').fadeIn();
        //alert('hello data...'); 
        
        
      event.preventDefault();
      }); 

      $(".betory-btn-cross--popup").click(function(){
        //$("#bentory-more-modal").removeClass();
        $('.bentory-maplsit-modalPanel-new-home').fadeOut(); 
        });
     


  // for communiy modal==========================
  //============================================================



  $(".community").click(function(){
  
    $("#bentory-more-modal").removeClass();
    
     $("#be-filter-controller").removeClass();


    $("#bentory-more-modal").addClass('bentory-maplist-modal-community');

    // for mobile view filter button when click 

    $("#be-filter-controller").addClass('be-filter-controller-community');

    $(".maplist-beds").show();
    $(".maplist-baths").show();
    $(".lots-size").hide();
    
    });


  $('body').on('click', '.bentory-maplist-modal-community',  function(event) {
    $('.bentory-maplsit-modalPanel').fadeIn();    
  event.preventDefault();
  });

  // lot popup

  $(".lots").click(function(){
    $("#bentory-more-modal").removeClass();
    $("#be-filter-controller").removeClass();
    $("#bentory-more-modal").addClass('bentory-maplist-modal-lots');
    $("#be-filter-controller").addClass('bentory-maplist-modal-lots');
    $(".lots-size").addClass('active');
    $(".any-price").addClass('active');
    
       
    });

    $('body').on('click', '.bentory-maplist-modal-lots',  function(event) {
      $('.bentory-maplsit-modalPanel--lots').fadeIn();    
    event.preventDefault();
    });

    $(".betory-btn-cross--popup").click(function(){

      $(".bentory-maplsit-modalPanel--lots").fadeOut();
      // $("#bentory-more-modal").removeClass();
      // $("#bentory-more-modal").addClass('bentory-maplist-modal-lots');   
      });
    

 
  


})(jQuery);



        //     bentoryMob     = document.getElementById("bentory-main-nav")

        // var bentoryManiNav = document.getElementById("bentory-main-menu--mobile").innerHTML =  bentoryMob ;


        //var bentoryMob     = document.getElementsByClassName("bentory-main-menu--mobile");

        //bentoryMob.innerHTML(bentoryManiNav);
        //console.log(bentoryMob);   


// core js start here 

const animaitonSec = document.querySelectorAll('.bentory-common-animaiton');
        
        observer = new IntersectionObserver((entries) => {
        
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    entry.target.classList.add('bentory-acitive'); 
                }
                else {
                    entry.target.classList.remove('bentory-acitive');
                }
            })
        
        })
        
        animaitonSec.forEach(test => {
            observer.observe(test)
        });


        // Aminity scroller community 

        var communityListsAminity = document.querySelectorAll('.bentory-emenites-menu-community');
        //console.log(communityListsAminity);

        var communityArrowLeft = document.querySelector('.communityAminityArrow--left');
        var communityArrowRight = document.querySelector('.communityAminityArrow--right');


        var communityAminityCurrent = 0;

        function communityAminityReset(){

          for( var i = 0; i < communityListsAminity.length; i++ ){
            communityListsAminity[i].style.display = 'none';
          }
        }

        //communityAminityReset();

        function startSlide(){
          communityAminityReset();
          communityListsAminity[0].style.display = 'block';

        }

        startSlide();

        function leftAminityArrow(){
          communityAminityReset();
          communityListsAminity[communityAminityCurrent - 1].style.display = 'block';
          communityAminityCurrent--;
        }

        function rightAminityArrow(){
          communityAminityReset();
          communityListsAminity[communityAminityCurrent + 1].style.display = 'block';
          communityAminityCurrent++;
        }

        communityArrowLeft.addEventListener('click', function(){
          if(communityAminityCurrent === 0){
            communityAminityCurrent = communityListsAminity.length;
          }
          leftAminityArrow();
        });

        communityArrowRight.addEventListener('click', function(){
          if(communityAminityCurrent === communityListsAminity.length-1){
            communityAminityCurrent = -1;
          }
          rightAminityArrow();
        });


        // Aminity scroller New Home 
        //=======================================================

        var communityListsAminity2 = document.querySelectorAll('.bentory-emenites-menu-community2');
        //console.log(communityListsAminity);

        var communityArrowLeft2 = document.querySelector('.communityAminityArrow--left2');
        var communityArrowRight2 = document.querySelector('.communityAminityArrow--right2');


        var communityAminityCurrent2 = 0;

        function communityAminityReset2(){

          for( var i = 0; i < communityListsAminity2.length; i++ ){
            communityListsAminity2[i].style.display = 'none';
          }
        }

        //communityAminityReset();

        function startSlide2(){
          communityAminityReset2();
          communityListsAminity2[0].style.display = 'block';

        }

        startSlide2();

        function leftAminityArrow2(){
          communityAminityReset2();
          communityListsAminity2[communityAminityCurrent2 - 1].style.display = 'block';
          communityAminityCurrent2--;
        }

        function rightAminityArrow2(){
          communityAminityReset2();
          communityListsAminity2[communityAminityCurrent2 + 1].style.display = 'block';
          communityAminityCurrent2++;
        }

        communityArrowLeft2.addEventListener('click', function(){
          if(communityAminityCurrent2 === 0){
            communityAminityCurrent2 = communityListsAminity2.length;
          }
          leftAminityArrow2();
        });

        communityArrowRight2.addEventListener('click', function(){
          if(communityAminityCurrent2 === communityListsAminity2.length-1){
            communityAminityCurrent2 = -1;
          }
          rightAminityArrow2();
        });


        // Aminity scroller For Lots
        //=======================================================

        var communityListsAminity3 = document.querySelectorAll('.bentory-emenites-menu-community3');
        //console.log(communityListsAminity);

        var communityArrowLeft3 = document.querySelector('.communityAminityArrow--left3');
        var communityArrowRight3 = document.querySelector('.communityAminityArrow--right3');


        var communityAminityCurrent3 = 0;

        function communityAminityReset3(){

          for( var i = 0; i < communityListsAminity3.length; i++ ){
            communityListsAminity3[i].style.display = 'none';
          }
        }

        //communityAminityReset();

        function startSlide3(){
          communityAminityReset3();
          communityListsAminity3[0].style.display = 'block';

        }

        startSlide3();

        function leftAminityArrow3(){
          communityAminityReset3();
          communityListsAminity3[communityAminityCurrent3 - 1].style.display = 'block';
          communityAminityCurrent3--;
        }

        function rightAminityArrow3(){
          communityAminityReset3();
          communityListsAminity3[communityAminityCurrent3 + 1].style.display = 'block';
          communityAminityCurrent3++;
        }

        communityArrowLeft3.addEventListener('click', function(){
          if(communityAminityCurrent3 === 0){
            communityAminityCurrent3 = communityListsAminity3.length;
          }
          leftAminityArrow3();
        });

        communityArrowRight3.addEventListener('click', function(){
          if(communityAminityCurrent3 === communityListsAminity3.length-1){
            communityAminityCurrent3 = -1;
          }
          rightAminityArrow3();
        });


        // Aminity scroller For Filters
        //=======================================================

        var communityListsAminity4 = document.querySelectorAll('.bentory-emenites-menu-community4');
        //console.log(communityListsAminity);

        var communityArrowLeft4 = document.querySelector('.communityAminityArrow--left4');
        var communityArrowRight4 = document.querySelector('.communityAminityArrow--right4');


        var communityAminityCurrent4 = 0;

        function communityAminityReset4(){

          for( var i = 0; i < communityListsAminity4.length; i++ ){
            communityListsAminity4[i].style.display = 'none';
          }
        }

        //communityAminityReset();

        function startSlide4(){
          communityAminityReset4();
          communityListsAminity4[0].style.display = 'block';

        }

        startSlide4();

        function leftAminityArrow4(){
          communityAminityReset4();
          communityListsAminity4[communityAminityCurrent4 - 1].style.display = 'block';
          communityAminityCurrent4--;
        }

        function rightAminityArrow4(){
          communityAminityReset4();
          communityListsAminity4[communityAminityCurrent4 + 1].style.display = 'block';
          communityAminityCurrent4++;
        }

        communityArrowLeft4.addEventListener('click', function(){
          if(communityAminityCurrent4 === 0){
            communityAminityCurrent4 = communityListsAminity4.length;
          }
          leftAminityArrow4();
        });

        communityArrowRight4.addEventListener('click', function(){
          if(communityAminityCurrent4 === communityListsAminity4.length-1){
            communityAminityCurrent4 = -1;
          }
          rightAminityArrow4();
        });



        



