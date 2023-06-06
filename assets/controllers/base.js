let header = document.querySelector("#navbar")
let btnliste = document.querySelector("#btnliste");
let lastScrollValue = 0;

document.addEventListener('scroll', () => {
    let top = document.documentElement.scrollTop;
    if (lastScrollValue < top) {
        header.classList.add("hidden");
        if (btnliste.checked) {
            btnliste.checked = false;
        }
    } else {
        header.classList.remove("hidden");
    }
    lastScrollValue = top;
});