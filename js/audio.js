window.addEventListener("load", function () {

    const sonido = new Audio("audio/au.mp3");

    sonido.volume = 1;

    sonido.play().catch(() => {

        document.body.addEventListener("click", function () {
            sonido.play();
        }, { once: true });

    });

});