const checkpoint = 500;

const movingClass = "scroll-move";
const opacityClass = "scroll-opacity";

window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll <= checkpoint) {
        opacity = 1 - currentScroll / checkpoint;
    } else {
        opacity = 0;
    }

    var movingElems = document.getElementsByClassName(movingClass);
    for (var i = 0; i < movingElems.length; i++) {
        movingElems[i].style.marginTop = ((opacity) * 30) + 'vh';
    }

    var opacityElems = document.getElementsByClassName(opacityClass);
    for (var i = 0; i < opacityElems.length; i++) {
        opacityElems[i].style.opacity = opacity;
    }
});