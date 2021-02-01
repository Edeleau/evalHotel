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

    /************************* JS navbar && footer ***************************/
    window.onload = navBar;
    window.onresize = navBar;

    function navBar() {
        let withWindow = parseInt(window.innerWidth);
        let navbar = document.getElementById('navbarSupportedContent');
        let toggleSidebar = document.getElementById('toggle-btn');
        let footer = document.querySelectorAll('.select div');
        console.log(footer);

        if (withWindow > 992) {
            navbar.classList.add('disparition');
            navbar.classList.remove('navbar-collapse');
            toggleSidebar.classList.remove('disparition');
            footer.forEach(element => {
                element.classList.remove('col-12','text-center');
            });
        }
        if (withWindow <= 992) {
            navbar.classList.remove('disparition');
            navbar.classList.add('navbar-expand-lg', 'navbar-collapse');
            toggleSidebar.classList.add('disparition');
            footer.forEach(element => {
                element.classList.add('col-12','text-center');
            });
        }
    }

});