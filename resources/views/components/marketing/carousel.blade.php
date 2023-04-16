<style>

    .slider-wrapper {
        position: relative;
        overflow: hidden;
    }

    .slides-container {
        display: flex;
        overflow: hidden;
        scroll-behavior: smooth;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .slide-arrow {
        position: absolute;
        display: flex;
        top: 0;
        bottom: 0;
        margin: auto;
        height: 4rem;
        background-color: white;
        border: none;
        width: 2rem;
        font-size: 3rem;
        padding: 0;
        cursor: pointer;
        opacity: 0.5;
        transition: opacity 100ms;
    }

    .slide-arrow:hover,
    .slide-arrow:focus {
        opacity: 1;
    }

    #slide-arrow-prev {
        left: 0%;
        padding-left: 0.25rem;
        border-radius: 0 2rem 2rem 0;
        z-index: 5;
    }

    #slide-arrow-next {
        right: 0;
        padding-left: 0.75rem;
        border-radius: 2rem 0 0 2rem;
    }

    .slide {
        width: 100%;
        height: 50%;
        flex: 1 0 100%;
    }

</style>
<section class="slider-wrapper mx-4">
    <button class="slide-arrow" id="slide-arrow-prev">
        &#8249;
    </button>
    <button class="slide-arrow" id="slide-arrow-next">
        &#8250;
    </button>
    <ul class="slides-container" id="slides-container">
        <li class="slide">
            <x-marketing.testimonials.first-testimonial/>
        </li>
        <li class="slide">
            <x-marketing.testimonials.second-testimonial/>
        </li>
        <li class="slide">
            <x-marketing.testimonials.third-testimonial/>
        </li>
        <li class="slide">
            <x-marketing.testimonials.fourth-testimonial/>
        </li>
    </ul>
</section>

<script>
    const slidesContainer = document.getElementById("slides-container");
    const slide = document.querySelector(".slide");
    const prevButton = document.getElementById("slide-arrow-prev");
    const nextButton = document.getElementById("slide-arrow-next");

    let touchStartX = 0;

    nextButton.addEventListener("click", () => {
        const slideWidth = slide.clientWidth;
        slidesContainer.scrollLeft += slideWidth;
    });

    prevButton.addEventListener("click", () => {
        const slideWidth = slide.clientWidth;
        slidesContainer.scrollLeft -= slideWidth;
    });

    slidesContainer.addEventListener("touchstart", (event) => {
        touchStartX = event.touches[0].clientX;
    });

    slidesContainer.addEventListener("touchend", (event) => {
        const touchEndX = event.changedTouches[0].clientX;
        const slideWidth = slide.clientWidth;

        if (touchEndX < touchStartX) {
            // swiped left
            slidesContainer.scrollLeft += slideWidth;
        } else if (touchEndX > touchStartX) {
            // swiped right
            slidesContainer.scrollLeft -= slideWidth;
        }
    });
</script>
