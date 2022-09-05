const checkpoint = 500;
var movingClass = "scroll-move";
var opacityClass = "scroll-opacity";

function addScrollFade(moveClass, opacityClass, checkpoint) {
    window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset;
        if (currentScroll <= checkpoint) {
            opacity = 1 - currentScroll / checkpoint;
        } else {
            opacity = 0;
        }

        var movingElems = document.getElementsByClassName(moveClass);
        for (var i = 0; i < movingElems.length; i++) {
            movingElems[i].style.marginTop.split('');
            movingElems[i].style.marginTop = ((opacity) * 30) + 'vh';
        }

        var opacityElems = document.getElementsByClassName(opacityClass);
        for (var i = 0; i < opacityElems.length; i++) {
            opacityElems[i].style.opacity = opacity;
        }
    });

}

addScrollFade("scroll-move-1", "scroll-opacity-1", 200);
addScrollFade("scroll-move-2", "", 500);
