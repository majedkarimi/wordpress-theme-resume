'use strict';
// selectors
const boxMobileNav = document.querySelector('.btn-nav-mobile');
const openNav = document.querySelector('.btn-nav-mobile .bi-list');
const closeNav = document.querySelector('.btn-nav-mobile .bi-x');
const mobileMenu = document.querySelector('#header');
const scrollHome = document.querySelector('#header .home');
const scrollAbout = document.querySelector('#header .about-menu');
const scrollResume = document.querySelector('#header .resume-menu');
const scrollSkill = document.querySelector('#header .skill-menu');
const scrollPortfolio = document.querySelector('#header .porfolio-menu');
const scrollContact = document.querySelector('#header .contact-menu');

// mobile menu responsive
openNav.addEventListener('click', function () {
    mobileMenu.style.left = '0';
    openNav.style.display = 'none';
    closeNav.style.cssText = `
        display : flex;
    `;

});
closeNav.addEventListener('click', function () {
    mobileMenu.style.left = '-360px';
    openNav.style.display = 'flex';
    closeNav.style.display = 'none';
});

// scroll menu
scrollHome.addEventListener('click',function(){
    window.scrollTo(0,0);
})
scrollAbout.addEventListener('click',function(){
    window.scrollTo(300,550);
    document.querySelector('#header ul li a').classList.remove('active');
    document.querySelector('#header .about a').classList.add('active');
})
scrollSkill.addEventListener('click',function(){
    window.scrollTo(550,900);
    document.querySelector('#header a').classList.remove('active');
    document.querySelector('#header .resume a').classList.add('active');
    document.querySelector('#header .about a').classList.remove('active');

})
scrollResume.addEventListener('click',function(){
    window.scrollTo(550,1300);
    document.querySelector('#header a').classList.remove('active');
    document.querySelector('#header .resume a').classList.add('active');
    document.querySelector('#header .about a').classList.remove('active');
})
// hero type
const typed = document.querySelector('.typed')
if (typed) {
  let typed_strings = typed.getAttribute('data-typed-items')
  typed_strings = typed_strings.split(',')
  new Typed('.typed', {
    strings: typed_strings,
    loop: true,
    typeSpeed: 100,
    backSpeed: 50,
    backDelay: 2000
  });
}
