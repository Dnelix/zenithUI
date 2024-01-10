"use strict";
//#######################//
//####### GENERIC #######//
//#######################//
function _(x){
	return document.getElementById(x);
}

function goTo(here){
    window.location.href=here;
}

function goBack(x=null){
    history.back(x);
}

function reloadPage(){
    window.location.reload();
}

function changeClass(item, removeClass, putClass) {
    var targetElement = $('#'+item);
    targetElement.removeClass(removeClass);
    targetElement.addClass(putClass);
}

function toggleView(elem1, elem2=null, elem3=null, elem4=null){
    $(elem1).toggleClass('d-none');
    $(elem2).toggleClass('d-none');
    $(elem3).toggleClass('d-none');
    $(elem4).toggleClass('d-none');
}

//#######################//
//####### SPECIFIC ######//
//#######################//
function changeSiteTheme(theme){
    if (theme == 'dark'){
        changeClass('sidebar', 'is-lighter', 'is-dark');
        changeClass('nav-head', 'is-light', 'is-dark');
        changeClass('pageBody', 'bg-white', 'bg-dark');
        changeClass('contentCard', 'bg-white', 'bg-dark');
    } else {
        changeClass('sidebar', 'is-dark', 'is-lighter');
        changeClass('nav-head', 'is-dark', 'is-light')
        changeClass('pageBody', 'bg-dark', 'bg-white');
        changeClass('contentCard', 'bg-dark', 'bg-white');
    }
}

function changeImage(imgid, newSrc) {
    document.getElementById(imgid).src = newSrc;
}