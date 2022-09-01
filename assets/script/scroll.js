const checkpoint = 300;

window.onscroll = function () {
    scrollRotate();
};

function scrollRotate() {
    const currentScroll = window.pageYOffset;
    if (currentScroll <= checkpoint) {
        opacity = 1 - currentScroll / checkpoint;
    } else {
        opacity = 0;
    }
    document.querySelector(".title").style.opacity = opacity;
    document.querySelector(".subtitle").style.opacity = opacity;
}