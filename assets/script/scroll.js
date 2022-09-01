const checkpoint = 500;

window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll <= checkpoint) {
        opacity = 1 - currentScroll / checkpoint;
    } else {
        opacity = 0;
    }
    document.querySelector(".title").style.marginTop = ((opacity) * 30) + 'vh';
    document.querySelector(".title").style.opacity = opacity;
    document.querySelector(".subtitle").style.opacity = opacity;
});