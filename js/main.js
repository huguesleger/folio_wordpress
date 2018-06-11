// jQuery(function($) {
//   $('.site').css({
//     height: ($(window).height())
//   });
// });

jQuery(function($) {
  if ($('body').hasClass('home')){
    $('#footer').appendTo('.scroll-sections');
    $('#footer').css('display','block');
  }
});

jQuery(function($) {

  ////////// section hello active //////////
    if($('.part_sections').hasClass('__hidden')){
       $('.border div').addClass('__home');
    } else {
      $('.border div').removeClass('__home');
    }

    if ($('body').hasClass('home')){
      $('.nav-btn').addClass('__home');
    }else {
      $('.nav-btn').removeClass('__home');
    }

////////////nav btn/////////////////
		$('#Hamb').click(function(){
      if($('.nav-btn').hasClass('__home')){

        if($('#menu-main').hasClass('__is-open')){
           $('.border div').removeClass('__home');
        } else {
            $('.border div').addClass('__home');
        }};

        // if($('.wrap-part.part_home').hasClass('__hidden')&& $('.nav-btn').hasClass('__is-open')){
        //   $('.wrap-part.part_sections').css('overflow','hidden');
        //
        // }else {
        //   $('.wrap-part.part_sections').css('overflow','visible');
        // }

        // if($('body').hasClass('blog')){
        //   $('.nav-btn').removeClass('__home');
        // };
        if($('.wrap-part.part_home').hasClass('__visible')&& $('.nav-btn').hasClass('__is-open')){
          $('.skip-intro').hide();
        } else if ($('.wrap-part.part_home').hasClass('__hidden'))  {
            $('.skip-intro').hide();
        } else {
            $('.skip-intro').show();
        }

      if($('#menu-main').hasClass('__is-open')){
        if($('body').hasClass('home')){
                  parallax.disable();
                }

                  // $('#txtHamb').css('color','#fff');
        			  	$('.wrap-branding').addClass('__is-open');
                  // $('body').css('overflow','hidden');
                  $('.custom-logo-link').css('opacity','0');
                  $('.title-branding').addClass('__title-white');
                  $('.wrap-nav').addClass('__is-open');
        				  $('.info-nav').addClass('__is-open');

                   setTimeout(function(){
                  $('.img-nav').addClass('__is-open');
                },600);

                  $('.img-nav polygon').addClass('__tblack');
                  // $('.triangle').css('opacity','1');
      } else {
                    if($('body').hasClass('home')){
                  parallax.enable();
                }
        			  	$('.wrap-branding').removeClass('__is-open');
                  // $('body').css('overflow','visible');
                  $('.custom-logo-link').css('opacity','1');
        					$('.info-nav').removeClass('__is-open');
                  $('.wrap-nav').removeClass('__is-open');
                  $('.img-nav').removeClass('__is-open');
                  $('.title-branding').removeClass('__title-white');
                  // $('#txtHamb').css('color','initial');
                  // $('.img-nav polygon').removeClass('__tblack');
                  // $('.triangle').css('opacity','0.8');


      }
});
/////////////////////////////
/////////////////////////////
});

jQuery(function($) {

$('#menu-item-10 a, #menu-item-28 a').hover(function(){
  $('.img-nav polygon').addClass('__tyellow').removeClass('__tblack');
}, function(){
  $('.img-nav polygon').removeClass('__tyellow').addClass('__tblack');
});

$('#menu-item-813 a, #menu-item-634 a ').hover(function(){
  $('.img-nav polygon').addClass('__tred').removeClass('__tblack');
}, function(){
  $('.img-nav polygon').removeClass('__tred').addClass('__tblack');
});



});



//// chargement page
// jQuery(function($) {
//         setTimeout(function(){
//         $('#hello_part1').velocity({
//         opacity : 1,
//         translateX: "0"
//         }, {
//     duration: 600,
//
//         complete: function(){
//         }
//     });
//   });
//     setTimeout(function(){
//     $('#hello_part2').velocity({
//     opacity : 1,
//     translateY: "0"
//     }, {
// duration: 600,
//     complete: function(){
//     }
// });
// },1000);
//
// });
 //////////end onload

/////////////anim hello construction//////////

// var lineDrawing = anime({
//   targets: '#hello_part1 path',
//   strokeDashoffset: [anime.setDashoffset, 0],
//   easing: 'easeInQuart',
//   duration: 1500,
//   delay: function(el, i) { return i * 950 },
// //   fill: {
// //   value: ['#000']
// // }
// });

// var lineDrawing = anime({
//   targets: '#letters-part1 path',
//   strokeDashoffset: [anime.setDashoffset, 0],
//   easing: 'easeInOutCubic',
//   duration: 1500,
//   // begin: function(anim) {
//   //   document.querySelector('#letters-part1 path').setAttribute("stroke", "black");
//   //   document.querySelector('#letters-part1 path').setAttribute("fill", "none");
//   // },
//   complete: function(anim) {
//     document.querySelector('#letters-part1 path').setAttribute("fill", "yellow");
//   },
//   delay: function(el, i) { return i * 950 },
// });


jQuery(function($) {
//   var letterTime = 2000;
// var logoAnimation = anime({
//     targets: '#hello_part1 path',
//     strokeDashoffset: [anime.setDashoffset, 0],
//     easing: 'easeInOutCubic',
//     duration: 1500,
//     delay: function(el, i) { return i * 950 },
//     offset: 0,
//       begin: function(anim) {
//         var letters = document.querySelectorAll("#hello_part1 path"),
//           i;
//
//         for (i = 0; i < letters.length; ++i) {
//           letters[i].setAttribute("stroke", "#000");
//           letters[i].setAttribute("fill", "none");
//         }
//       },
//         complete: function(anim) {
//           if (anim.currentTime >= letterTime) {
//             var letters = document.querySelectorAll("#hello_part1 path"),
//               i;
//             for (i = 0; i < letters.length; ++i) {
//               letters[i].setAttribute("stroke", "none");
//               letters[i].setAttribute("fill", "#000");
//             }
//             }
//       }
//   });


//   setTimeout(function(){
// $('#hello_part1 path').velocity({
// fill: '#000'
// }, {
// duration: 100,
// });
// $('.hello_part1').addClass('__none');
// },2500);


//
// var logoAnimation = anime.timeline({
//   direction: 'alternate',
//   loop: false
// });
//
// logoAnimation.add([
//  {
//     targets: '#hello_part1 path',
//     translateX: (target) => {
//       let x = 1200;
//       let translate;
//       if (target.classList.contains('hori')) translate = anime.random(0, 1) ? x : -x;
//       if (target.classList.contains('diag-right') || target.classList.contains('diag-left')) translate =  x / 3;
//       return [translate, 0];
//     },
//     translateY: (target) => {
//       let y = 1200;
//       let translate;
//       if (target.classList.contains('vert')) translate = anime.random(0, 1) ? y : -y;
//       if (target.classList.contains('diag-right')) translate =  -y / 3;
//       if (target.classList.contains('diag-left')) translate =  y / 3;
//       return [translate, 0];
//     },
//     scale: {
//       value: [6, 1],
//       duration: 500,
//     },
//     stroke: '#F9C100',
//     opacity: {
//       value: [0, 1],
//       duration: 100,
//     },
//     delay: (t, i) => (i * 25),
//     duration: 500,
//     easing: 'easeOutQuart',
//     offset: 0
//   }
// ]);




});



// lineDrawing
//   .add({
//     targets: '#basicTimeline .square.el',
//     translateX: 250,
//     easing: 'easeOutExpo'
//   });

/////////center hello device tablette/mobile////////
jQuery(function($) {
  var windowWidth = $(window).width();
  var block = $('.wrap-block');
  if(windowWidth <= 1024){
  $('.hello').css({
    left:($(window).width() - $('.hello').width()),
    top: ($(window).height() - $('.hello').height()) / 2
  });
}
});
///////////////////////////////
////////////////////////////////

///////open block  hello/////////////
jQuery(function($) {

  $(".hello_circle").click(function(){
    $('.triangle svg').css('overflow','hidden');
    setTimeout(function(){
      var animtriangle = anime({
        targets: '.triangle polygon',
        translateX: function() { return anime.random(150, -30) + '%'; },
         scale: function() { return anime.random(10,5) / 10; },
         rotate: function() { return anime.random(-360,360); },
         duration: function() { return anime.random(1000,2000); },
        loop: false,
        easing: 'easeInOutExpo',
        delay :  500 ,
        opacity: 0,
    });
    $('#hello_part2').velocity({
    translateY:"-100%",
    opacity:0
    }, {
  duration: 600,
    complete: function(){
      // $("#block").addClass("__deform");
      $('.part_home').addClass('__open');
      $(".wrap-block").addClass("__open");
      // $(".hello").addClass("__open");
    }
  });
  });
  setTimeout(function(){
  $('#block').velocity({
  width: "100%",
  translateX:"150%",
  translateY:"110%",
  scale:3.5
  }, {
duration: 600,
  complete: function(){
    $("#block").addClass("__deform");
    $(".hello").addClass("__open");
  }
});
});
setTimeout(function(){
$('#letters-part1 path').velocity({
stroke: "none",
fill: "#fff"
}, {
duration: 600,
complete: function(){
$('.hello_fill').css('stroke','#fff');
$('._E').css({
  transform: "translateY(-105%)"
});
$('.hello-title').css('color','#fff');
$('#close').append('<div class="close-hello"><i class="far fa-arrow-alt-circle-left"></i></div>');
$(".txt-hello").addClass("__open");
$("._L").addClass("left");
}
});
},1000);
});

///////////////////////

$("#close").click(function(){
$('.triangle svg').css('overflow','initial');
setTimeout(function(){
 $(".txt-hello ").removeClass("__open");
$('#block').velocity({
width: "15%",
translateX:"0%",
translateY:"0%",
scale: 1
}, {
duration: 600,
complete: function(){
  $("#block").removeClass("__deform");
  $('.part_home').removeClass('__open');
  $(".wrap-block").removeClass("__open");
  $(".hello").removeClass("__open");
  $('.close-hello').remove();
  setTimeout(function(){
  $('#hello_part2').velocity({
  translateY:"0%",
  opacity:1
  }, {
  duration: 600,
  });
  });
}
});
});
setTimeout(function(){
$('#hello_part1 path').velocity({
stroke: "none",
fill: "#000"
}, {
duration: 600,
complete: function(){
$('.hello_fill').css('stroke','#ff5252');
$('._E').css({
transform: "translateY(0%)"
});
$('.hello-title').css('color','initial');
// $('.close-hello').remove();
$("._L").removeClass("left");
}
});
var reverse = anime({
  targets: '.triangle polygon',
  translateX: 0,
  opacity: 1,
});
},1000);
});

////////////////////////////
////////////////////////////

/////////////go full page//////////
// $('.btn-full').click(function(){
//   $('.part_home').css({
//                 "transform": "translate3d(0 ,-100%, 0)",
//                 "transition": "transform (0.85s)"
// });
// $('.part_home').removeClass('__visible').addClass('__hidden');
// $('.part_full').removeClass('__hidden');
// $('.part_full').css({
//               "transform": "translate3d(0 ,0%, 0)",
//               "transition": "transform (0.85s)",
// });
// });

//// bullet-nav////
$('.btn_design').click(function(){
  setTimeout(function(){
    $('.part_full').css('display','block');
    },50);
      setTimeout(function(){
  $('.part_home').css({
                "transform": "translate3d(0 ,-100%, 0)",
                "transition": "transform (0.85s)"
});
$('.part_home').removeClass('__visible').addClass('__hidden');
$('.btn_hello').removeClass('__active');
$('.btn_design').addClass('__active');
$('.part_design').removeClass('__hidden');
$('.part_full').removeClass('__hidden');
$('.part_full').css({
              "transform": "translate3d(0 ,0%, 0)",
              "transition": "transform (0.85s)"
});
},100);
});


$('.btn_hello').click(function(){
          setTimeout(function(){
  $('.part_home').css({
                "transform": "translate3d(0 ,0%, 0)",
                "transition": "transform (0.85s)"
});
$('.btn_hello').addClass('__active');
$('.btn_design').removeClass('__active');
$('.part_home').addClass('__visible').removeClass('__hidden');
$('.part_full').css({
              "transform": "translate3d(0 ,100%, 0)",
              "transition": "transform (0.85s)"
});
},100);
setTimeout(function(){
  $('.part_full').css('display','none');
},650);
});


///////////click btn enter homepage sections////////////////

$("#Home").click(function(){

  $('.part_sections').css('display','block');
  var bgColorIntro;
  var select = $(this).attr("name");
  setTimeout(function(){

    var animtriangle = anime({
      targets: '.triangle polygon',
      translateX: function() { return anime.random(50, -150) + '%'; },
      translateY: function() { return anime.random(-550, -150) + '%'; },
       scale: function() { return anime.random(1,5) / 10; },
       rotate: function() { return anime.random(-360,360); },
       duration: function() { return anime.random(1000,2000); },
      loop: false,
      easing: 'easeInOutExpo',
      delay :  10 ,
  });
},350);


  setTimeout(function(){
    // $(".bg-section-intro[name="+select+"]").addClass('visible');
    // bgColorIntro = $(".bg-section-intro [name="+select+"]");
      // $('body').css('overflow','visible');
      $('.skip-intro').hide();
      $('.bullet-header').hide();
      $('.nav-btn').removeClass('__home');
      $('.border div').removeClass('__home');
      $('.part_home').css({
                    "transform": "translate3d(0 ,-100%, 0)",
                    "transition": "transform (0.85s)"
});
      $('.part_full').css({
                    "transform": "translate3d(0 ,-100%, 0)",
                    "transition": "transform (0.85s)"
});
      $('.part_sections').removeClass('__hidden');
      $('.part_sections').css({
                    "transform": "translate3d(0 ,0%, 0)",
                    "transition": "transform (0.85s)"
});
        $('.home').css('overflow','visible');
  },1500);
    setTimeout(function(){
      $('.part_home').removeClass('__visible').addClass('__hidden');
      $('.part_home').hide();
      $('.wrap-part').css('height','auto');
    },2300);


    $('.main-slider').css('display', 'block');
    $('.main-slider').get(0).slick.setPosition();


  });

  $('.main-slider').slick({
    dots: true,
    rtl: false,
    arrows: false,
    adaptiveHeight: false,
    autoplay: true,
    autoplaySpeed: $('.main-slider').data('sliderspeed'),
    pauseOnHover: false,
    lazyLoad: 'progressive',
    useCSS: true,
  });

});//////////end onload




/////////////////////////////
////////////////////////////

////full section black////
jQuery(function($) {

////btn more circle/////

// $('#circle-more').click(function(){
//   $('.wrap-part .part_full').velocity({
//     setTimeout(function(){
//       $('.bg-black').addClass('__right');
//       $('.design').addClass('__right');
//     },1000);
//   })
// });

// $("#circle-more").click(function(){
// setTimeout(function(){
//     $('.bg-black').addClass('__right');
//     $('.design').addClass('__right');
// $('.design').velocity({
//   translateX:"20%"
//   }, {
//   duration: 600,
// complete: function(){
//   $('#and path').addClass('__right').removeClass('and-white');
//   $('#design path').css({
//     strokeWidth: "1px",
//     stroke: "#000"
//   });
// }
// });
// });
//   });



$('.head-more').click(function(){
    $('.part_full').addClass('__open');
    $('.cover-img-graphic').toggleClass('__open');
    $('.head-more').addClass('__rotate');
    setTimeout(function(){
  $('.infos-design').toggleClass('__open');
},600);
    // $('.txt-design').velocity({
    //   translateY:"-10%",
    //   opacity:"1"
    //   }, {
    //   duration: 600,
    // complete: function(){
    //   $('.design').addClass('__right');
    // }
    // });
    $('.txt-design').addClass('__visible');
    $('.title-design').addClass('__open');


$this = $(this);
if($this.hasClass('__open')){
	 $this.removeClass('__open');
   $('.part_full').removeClass('__open');
  $('.head-more').removeClass('__rotate');
  // setTimeout(function(){
  // $('.txt-design').velocity({
  //   opacity:"0"
  //   }, {
  //   duration: 200,
  // complete: function(){
  //   $('.design').removeClass('__right');
  // }
  //
  // });
    $('.txt-design').removeClass('__visible');
    $('.title-design').removeClass('__open');


}else{
		 $this.addClass('__open');
	}
});
	//close nav left
});

//hauteur section parallax//

// jQuery(function($) {
//   $('.wrap-template').css({
//     height: ($(window).height()-120)
//   });
// });

jQuery(function($) {
  var windowWidth = $(window).width();
  if(windowWidth >= 1600){
  $('.work').addClass('col-lg-3');
} else {
  $('.work').removeClass('col-lg-3');
}


});



//// single-post ///

jQuery(function($) {

// if($('body').hasClass('fullwidth-single')){
//     $('#portfolio-type').addClass('container-fluid').removeClass('container');
// };

if($('body').hasClass('fullwidth-folio')){
  $('#folio_fullwidth').addClass('container-fluid').removeClass('container');
};

// if($('body').hasClass('fullwidth-single')){
//     $('#portfolio-type #contentSingle').addClass('container-fluid').removeClass('container');
// };

});


 jQuery(function($) {

       $('.gotop').on('click', function (e) {
           e.preventDefault();
           $('html,body').animate({
               scrollTop: 0
           }, 700);
       });


 });



 var scene = document.getElementById('Triangles');
 var scene2 = document.getElementById('WebTemplate');
 var parallax = new Parallax(scene);
 var parallax2 = new Parallax(scene2);

// var controller = new slidebars();
// controller.init();
