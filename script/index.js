document.addEventListener("DOMContentLoaded", () => {
    const body = document.body;
    const button = document.getElementById("products");
    const hoverElements = [
        document.querySelector("header"),
        document.getElementById("product-dropdown"),
    ];

    let isButtonHovered = false;

    if (button) {
        // Wanneer de muis over de button gaat
        button.addEventListener("mouseenter", () => {
            isButtonHovered = true;
            body.classList.replace("products-nonactive", "products-active");
        });

        // Wanneer de muis de button verlaat
        button.addEventListener("mouseleave", () => {
            isButtonHovered = false;
            const isHoveringElsewhere = hoverElements.some(el => el?.matches(":hover"));
            if (!isHoveringElsewhere) {
                body.classList.replace("products-active", "products-nonactive");
            }
        });
    } else {
        console.error("Element met id 'products' niet gevonden in de DOM.");
    }

    hoverElements.forEach((element) => {
        if (element) {
            // Wanneer de muis een hover element binnengaat
            element.addEventListener("mouseenter", () => {
                if (isButtonHovered) {
                    body.classList.replace("products-nonactive", "products-active");
                }
            });

            // Wanneer de muis een hover element verlaat
            element.addEventListener("mouseleave", () => {
                const isHoveringElsewhere = hoverElements.some(el => el?.matches(":hover"));
                if (!isButtonHovered && !isHoveringElsewhere) {
                    body.classList.replace("products-active", "products-nonactive");
                }
            });
        } else {
            // console.warn("Een van de hover elementen is niet gevonden in de DOM.");
        }
    });
});



var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1.5,
    centeredSlides: true,
    spaceBetween: 10,
    initialSlide: 1,
    breakpoints: {
        1200: {
            slidesPerView: 2,
        },
    },
    scrollbar: {
        el: ".swiper-scrollbar",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});