/* ============================== typing animation ============================ */
var typed = new Typed(".typing",{
  strings:[""," Web Developpeur","  Developpeur Front End","  Developpeur Back End"],
  typeSpeed:100,
  BackSpeed:60,
  loop:true
})


/* ============================== Aside ============================ */
const nav = document.querySelector(".nav"),
    navList = nav.querySelectorAll("li"),
    totalNavList = navList.length,
    allSection = document.querySelectorAll(".section"),
    totalSection = allSection.length;
    for(let i=0; i<totalNavList; i++)
    {
        const a = navList[i].querySelector("a");
        a.addEventListener("click", function()
        {
            removeBackSection();
            for(let j=0; j<totalNavList; j++)
            {
                if(navList[j].querySelector("a").classList.contains("active"))
                {
                    addBackSection(j);
                   // allSection[j].classList.add("back-section");
                }
                navList[j].querySelector("a").classList.remove("active");
            }
            this.classList.add("active")
            showSection(this);
            if(window.innerWidth < 1200)
            {
                asideSectionTogglerBtn();
            }
        })
    }
    function removeBackSection()
    {
      for(let i=0; i<totalSection; i++)
      {
          allSection[i].classList.remove("back-section");
      }   
    }
    function addBackSection(num)
    {
      allSection[num].classList.add("back-section");
    }
    function showSection(element)
    {
        for(let i=0; i<totalSection; i++)
        {
            allSection[i].classList.remove("active");
        }
        const target = element.getAttribute("href").split("#")[1];
        document.querySelector("#" + target).classList.add("active")
    }
    function updateNav(element)
    {
        for(let i=0; i<totalNavList; i++)
        {
            navList[i].querySelector("a").classList.remove("active");
            const target = element.getAttribute("href").split("#")[1];
            if(target === navList[i].querySelector("a").getAttribute("href").split("#")[1])
            {
              navList[i].querySelector("a").classList.add("active");
            }
        }
    }
    document.querySelector(".hire-me").addEventListener("click", function()
    {
        const sectionIndex = this.getAttribute("data-section-index");
        //console.log(sectionIndex);
        showSection(this);
        updateNav(this);
        removeBackSection();
        addBackSection(sectionIndex);
    })
    const navTogglerBtn = document.querySelector(".nav-toggler"),
          aside = document.querySelector(".aside");
          navTogglerBtn.addEventListener("click", () => 
          {
              asideSectionTogglerBtn();
          })
          function asideSectionTogglerBtn()
          {
              aside.classList.toggle("open");
              navTogglerBtn.classList.toggle("open");
              for(let i=0; i<totalSection; i++ )
              {
                  allSection[i].classList.toggle("open");
              }
          }
  
  







/*----------------------------------------------------*/
/* HEADER NAVIGATION
------------------------------------------------------ */
// $(document).ready(function() {
//     $("[href]").each(function() {
//         if (this.href == window.location.href) {
//             $(this).addClass("current");
//         }
//     });
//   });
    
  /*----------------------------------------------------*/
  /* LANDING PAGE
  ------------------------------------------------------ */
  // $(document).ready(function(){
  // const hero = document.querySelector('.hero');
  // const slider = document.querySelector('.slider');
  // const logo = document.querySelector('.logo');
  // const menu = document.querySelector('.navigation1');
  // const menu1 = document.querySelector('.navigation2');
  // const menuButton = document.querySelector('.menuButton');
  // const headline = document.querySelector('.headline');
  // const scroll = document.querySelector('#scroll-title');
  
  // const tl = new TimelineMax();
  // tl.fromTo(hero, 1, {height:"0%"}, {height:"100%", ease: Power2.easeInOut})
  //   .fromTo(hero, 1.5, {width:"100%"}, {width:"100%", ease: Power2.easeInOut})
  //   .fromTo(slider, 2, {y:"-100%"}, {y:"0%", ease: Power2.easeInOut}, "-=2")  //added -=1.4 so it starts at the same time as the slider
  //   .fromTo(logo, 0.5, {y:"-30", opacity:0}, {y:"0", opacity:1, ease: Power2.easeInOut}, "-=0.5")  
  //   .fromTo(menu, 0.5, {y:"-30", opacity:0}, {y:"0", opacity:1, ease: Power2.easeInOut}, "-=0.5") 
  //   .fromTo(menu1, 0.5, {y:"-30", opacity:0}, {y:"0", opacity:1, ease: Power2.easeInOut}, "-=0.5") 
  //   .fromTo(menuButton, 0.5, {y:"-30", opacity:0}, {y:"0", opacity:1, ease: Power2.easeInOut}, "-=0.5")
  //   .fromTo(scroll, 0.5, {y:"30", opacity:0}, {y:"0", opacity:1, ease: Power2.easeInOut}, "-=0.5")
  //   .fromTo(headline, 1, {y:"-100%", opacity:0}, {y:"-100%", opacity:1, ease: Power2.easeIn}, "-=1")
  // });
  
  /*----------------------------------------------------*/
  /* MENU TOGGLE RESPONSIVE
  ------------------------------------------------------ */
  // $(document).ready(function(){
  //   var open = 0;
  //   $('.menuButton').bind('click', function(){
  //     $('.btn').toggleClass('activeBtn');
  //       if (open===0) {
  //         $("#overmenu").animate({"margin-left": '+=101%'});
  //         open=1;
  //         } else {
  //         $("#overmenu").animate({"margin-left": '-=101%'});
  //         open=0;
  //         }
  //   })
  //   $("#overmenu").on("click", "a", function(event){
  //     $('.btn').toggleClass('activeBtn');
  //       if (open===0) {
  //         $("#overmenu").animate({"margin-left": '+=101%'});
  //         open=1;
  //       } else {
  //         $("#overmenu").animate({"margin-left": '-=101%'});
  //         open=0;
  //       }
  //   });
  // });
  
  /*----------------------------------------------------*/
  /* ANIMATION TITLE
  ------------------------------------------------------ */
  
  // $(document).ready(function(){
  //   anime({
  //     targets: '#portfolio path',
  //     strokeDashoffset: [anime.setDashoffset, 0],
  //     easing: 'easeInOutSine',
  //     duration: 1500,
  //     delay: function(el, i) { return i * 250 },
  //     direction: 'alternate',
  //     loop: false
  //   });
  // });
  
  /*----------------------------------------------------*/
  /* MENU ---> RESPONSIVE
  ------------------------------------------------------ */
  
  // $(document).ready(function(){
  //   let navToggle = document.getElementById('nav-toggle');
  //   let mainMenu = document.getElementById('js-main-menu');
  
  //   navToggle.addEventListener('click', function(){
  //   navToggle.classList.toggle('active');
  //   mainMenu.classList.toggle('active');
  //   })
  // });
  
  
  // $(document).ready(function(){
  // var nav = $(".nav");
  
  // nav.on("scroll", function(e) {
      
  //   if (this.scrollTop > 100) {
  //     nav.addClass(".nav-test");
  //   } else {
  //     nav.removeClass(".nav");
  //   }
    
  // });
  // });
  
  /*----------------------------------------------------*/
  /* SHOW SECTION ON SCROLL
  ------------------------------------------------------ */
  
  // $(document).ready(function(){
  //   $("#show").click(function(){
  //     $("p").show(1000);
  //   });
  // });
  
  // $(document).scroll(function() {
  //   var y = $(this).scrollTop();
  //   if (y > 1000) {
  //     $('#presentation').fadeIn();
  //   }
  // });
  
  /*----------------------------------------------------*/
  /* Smooth Scrolling
  ------------------------------------------------------ */
  
  // $(document).ready(function($) {
  
  //   $('.smoothscroll').on('click',function (e) {
  //      e.preventDefault();
   
  //      var target = this.hash,
  //      $target = $(target);
   
  //      $('html, body').stop().animate({
  //          'scrollTop': $target.offset().top
  //      }, 1000, 'swing', function () {
  //          window.location.hash = target;
  //      });
  //  });
   
  //  });
  
  /*----------------------------------------------------*/
  /* TEXT APPARITION
  ------------------------------------------------------ */
  
  //  $(document).ready(function() {
  //  ScrollReveal().reveal('.tagline', { delay:400 });
  //  ScrollReveal().reveal('.text-background1', { delay:1000 });
  //  ScrollReveal().reveal('.text-background2', { delay:1600 });
  //  ScrollReveal().reveal('.text-background3', { delay:2200 });
  //  ScrollReveal().reveal('.text-background4', { delay:1000 });
  //  ScrollReveal().reveal('.text-background5', { delay:2400 });
  // });
  
  /*----------------------------------------------------*/
  /* FIXED NAV BAR ON SCROLL 
  ------------------------------------------------------ */
  // $(document).ready(function() {
        
  //     var scroll_pos = 0;
  //     $(document).scroll(function() {
  //         scroll_pos = $(this).scrollTop();
  //         if(scroll_pos > 700) {
  //             $(".nav").css('position', 'fixed');
  //             $(".nav").css('width', '100%');
  //             $(".nav").css('background-color', 'transparent');
  //             $(".logo a").css('color', 'black');
  //             $(".menu li a").css('color', 'black');
  //             $(".menu li a:hover::after").css('background', 'black');
           
  //         }else{
  //             $(".nav").css('position', 'relative');
  //             $(".nav").css('background-color', 'transparent');
  //             $(".logo a").css('color', 'white');
  //             $(".menu li a").css('color', 'white');
  //             $(".menu li a:hover::after").css('color', 'white');
  //         }
  //     });
  
  // });
  /*----------------------------------------------------*/
  /* PROJECTS PRESENTATION TRIGGER ON SCROLL
  ------------------------------------------------------ */
  // $(document).ready(function() {
  // var controller = new ScrollMagic.Controller();
  
  // $(".project").each(function(){
      
  //     var picOverlay = $(this).find(".overlay");
  //     var projectInfo = $(this).find(".project-info");
  //     var smallTitle = $(this).find(".small-title");
  //     var projectLink = $(this).find(".project-link");
  //     var title = $(this).find("h4");
  //     var pageLink = $(this).find(".pagelink");
      
      
  // var animateIn = new TimelineMax();
      
  // animateIn
  // .fromTo(picOverlay, 2, {skewX:30, scale:1.5}, {skewX:0, xPercent:100, transformOrigin: "0% 100%", ease: Power4.easeOut},"-=1")
  
  // .from(projectInfo, 1, {scaleY:0, transformOrigin: "bottom left"}, "-=1.5")
  
  // .from(smallTitle, 0.3, {autoAlpha: 0, y:30, ease: Power4.easeOut}, "-=0.8")
  
  // .from(projectLink, 0.3, {autoAlpha: 0, y:30, ease: Power4.easeOut}, "-=0.8")
  
  // .from(title, 0.3, {autoAlpha: 0, y:30, ease: Power4.easeOut}, "-=0.8")
  
  // .from(pageLink, 0.3, {autoAlpha: 0, y:30, ease: Power4.easeOut}, "-=0.8")
  
  
  // // Make a scrollMagic Scene
  
  // var scene = new ScrollMagic.Scene({
  //     triggerElement: this,
  // })
  
  // //.addIndicators()
  // .setTween(animateIn).addTo(controller);
  
  // });
  // });
  
  /*----------------------------------------------------*/
  /* ABOUT PAGE
  ------------------------------------------------------ */
  
  // $(document).ready(function(){
  //   $(".left").hover(function() {
  //     $(".leftFront").slideToggle();
  //   });
  //   $(".right").hover(function() {
  //       $(".rightFront").slideToggle();
  //     })
  // });
  
  /*----------------------------------------------------*/
  /* BACK TO TOP
  ------------------------------------------------------ */
  
  // $(document).ready(function(){
  //   $(".backtotop").click(function() {
  //     $("html,body").animate({ scrollTop: $("html,body").offset().top }, "slow");
  //   });
  // })
  
  