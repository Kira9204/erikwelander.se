document.addEventListener("DOMContentLoaded", function() {
    var sidebarEl = document.querySelector('.page-main-content-sidebar');
    var openCloseSidebarEl = document.querySelector('.page-main-content-sidebar-open-close');
    var sidebarContentEl = document.querySelector('#page-main-content-sidebar-content')
    var mainContentCenterEl = document.querySelector('.page-main-content-center');
    window.hasClosedSidebarOnce = false;
    window.sidebarOpen = true;

    function closeSideBar() {
        if(!hasClosedSidebarOnce) {
            sidebarEl.className += ' page-main-content-sidebar--opened page-main-content-sidebar--closed';
            openCloseSidebarEl.className += ' page-main-content-sidebar-open-close--opened page-main-content-sidebar-open-close--closed';
            mainContentCenterEl.className += ' page-main-content-center--opened page-main-content-center--closed';
            hasClosedSidebarOnce = true;
        } else {
            sidebarEl.className += ' page-main-content-sidebar--closed';
            openCloseSidebarEl.className += ' page-main-content-sidebar-open-close--closed';
            mainContentCenterEl.className += ' page-main-content-center--closed';
        }
        sidebarContentEl.className = 'page-main-content-sidebar-content--hidden';
        sidebarOpen = false;
    }

    function openSideBar() {
        sidebarEl.className = sidebarEl.className.substring(0, sidebarEl.className.length-' page-main-content-sidebar--closed'.length);
        openCloseSidebarEl.className = openCloseSidebarEl.className.substring(0, openCloseSidebarEl.className.length-' page-main-content-sidebar-open-close--closed'.length);
        sidebarContentEl.className = '';
        mainContentCenterEl.className = mainContentCenterEl.className.substring(0, mainContentCenterEl.className.length-' page-main-content-center--closed'.length);
        sidebarOpen = true;
    }

    openCloseSidebarEl.addEventListener('click', function(event) {
        if(sidebarOpen) {
            closeSideBar();
        } else if(!sidebarOpen) {
            openSideBar();
        }
    });
});

