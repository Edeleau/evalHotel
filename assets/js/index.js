$(function () {

    'use strict';

    /************************* JS Sidebar ***************************/
    $('.js-menu-toggle').click(function (e) {

        var $this = $(this);

        if ($('body').hasClass('show-sidebar')) {
            $('body').removeClass('show-sidebar');
            $this.removeClass('active');
        } else {
            $('body').addClass('show-sidebar');
            $this.addClass('active');
        }

        e.preventDefault();

    });

    // click outside offcanvas
    $(document).mouseup(function (e) {
        var container = $(".sidebar");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            if ($('body').hasClass('show-sidebar')) {
                $('body').removeClass('show-sidebar');
                $('body').find('.js-menu-toggle').removeClass('active');
            }
        }
    });
    
    /************************* JS navbar ***************************/
    window.onload = navBar;
    window.onresize = navBar;

    function  navBar() { 
        let withWindow = parseInt(window.innerWidth);
        let navbar = document.getElementById('navbarSupportedContent');
        let toggleSidebar = document.getElementById('toggle-btn');
        let imgRoom2 = document.getElementById('imgRoom2');
        let imgRoom3 = document.getElementById('imgRoom3');
        let imgTest1 = document.getElementById('imgTest1');
        let whoWeAreContainer = document.getElementById('whoWeAreContainer');

        

        if (withWindow > 992) {
            navbar.classList.add('disparition');
            navbar.classList.remove( 'navbar-collapse');
            toggleSidebar.classList.remove('disparition');
            imgRoom2.classList.remove('disparition');
            imgRoom3.classList.remove('disparition');
            imgTest1.style.position = "relative";
            whoWeAreContainer.style.border = "var(--color1) 2vh solid"
        }
        if (withWindow <= 992) {
            navbar.classList.remove('disparition');
            navbar.classList.add('navbar-expand-lg' , 'navbar-collapse');
            toggleSidebar.classList.add('disparition');
            imgRoom2.classList.add('disparition');
            imgRoom3.classList.add('disparition');
            imgTest1.style.position = "static";
            whoWeAreContainer.style.border = "none"
        }
    }   

        /************************* Img Animations ***************************/


    let imgRoom1 = document.getElementById('imgRoom1');
    let imgRoom2 = document.getElementById('imgRoom2');
    let imgRoom3 = document.getElementById('imgRoom3');
    let imgExperience1 = document.getElementById('imgExperience1');
    let imgExperience2 = document.getElementById('imgExperience2');

    imgRoom1.addEventListener('mouseover', imgMouseOver);
    imgRoom1.addEventListener('mouseout', imgMouseOut);
    imgRoom1.addEventListener('click', changeImg);
    
    imgRoom2.addEventListener('mouseover', imgMouseOver2);
    imgRoom2.addEventListener('mouseout', imgMouseOut2);
    imgRoom2.addEventListener('click', changeImg);

    imgRoom3.addEventListener('mouseover', imgMouseOver2);
    imgRoom3.addEventListener('mouseout', imgMouseOut2);
    imgRoom3.addEventListener('click', changeImg);

    imgExperience1.addEventListener('mouseover', imgMouseOver);
    imgExperience1.addEventListener('mouseout', imgMouseOut);

    imgExperience2.addEventListener('mouseover', imgMouseOver);
    imgExperience2.addEventListener('mouseout', imgMouseOut);

    function changeImg(){
        let imgSrc = this.children[0].getAttribute('src');
        let imgAlt = this.children[0].getAttribute('alt');
        let img1Src = imgRoom1.children[1].getAttribute('src');
        let img1Alt = imgRoom1.children[1].getAttribute('alt');
        imgRoom1.children[1].setAttribute('src', imgSrc);
        imgRoom1.children[1].setAttribute('alt', imgAlt);
        this.children[0].setAttribute('src', img1Src);
        this.children[0].setAttribute('alt', img1Alt);
    };

    function imgMouseOver(){
        this.children[0].classList.add('imgOn');
        this.children[0].classList.remove('imgOut')
        this.children[1].classList.add('imgOn');
        this.children[1].classList.remove('imgOut')
    };
    function imgMouseOut(){
        this.children[0].classList.add('imgOut');
        this.children[0].classList.remove('imgOn');
        this.children[1].classList.add('imgOut');
        this.children[1].classList.remove('imgOn');
    };
    function imgMouseOver2(){
        this.children[0].classList.add('imgOn');
        this.children[0].classList.remove('imgOut')
    };
    function imgMouseOut2(){
        this.children[0].classList.add('imgOut');
        this.children[0].classList.remove('imgOn');
    };


});